var markers = [];
var geocoder, map, infowindow, arr;
var http_arr = new Array();
function initAutocomplete() {
	loadTable();
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 21.0403089, lng: 105.78822160000004},
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	var input = document.getElementById('pac-input');
	var searchBox = new google.maps.places.SearchBox(input);
	map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
	map.addListener('bounds_changed', function() {
		searchBox.setBounds(map.getBounds());
	});
	geocoder = new google.maps.Geocoder;
	infowindow = new google.maps.InfoWindow;
	searchBox.addListener('places_changed', function() {
		var places = searchBox.getPlaces();
		if (places.length == 0) {
			return;
		}
		deleteOverlays();
		var bounds = new google.maps.LatLngBounds();
		places.forEach(function(place) {
			markerName = placeMarker(place.geometry.location, place.formatted_address, places.length);
			infowindow.setContent(place.formatted_address);
			infowindow.open(map, markerName);
			if (place.geometry.viewport) {
				bounds.union(place.geometry.viewport);
			} else {
				bounds.extend(place.geometry.location);
			}
		});
		map.fitBounds(bounds);
	});
	var fx = google.maps.InfoWindow.prototype.setPosition;
	google.maps.InfoWindow.prototype.setPosition = function() {
		if (this.logAsInternal) {
			google.maps.event.addListenerOnce(this, 'map_changed', function() {
				var map = this.getMap();
				if (map) {
					pos = this.getPosition();
					geocoder.geocode({'location': pos}, function(results, status) {
						if (status === google.maps.GeocoderStatus.OK) {
							if (results[1]) {
								placeMarker(pos, results[1].formatted_address, 1);
							}
						}
					});
				}
			});
		}
		fx.apply(this, arguments);
	};
	google.maps.event.addListener(map, 'click', function(event) {
		geocoder.geocode({'location': event.latLng}, function(results, status) {
			if (status === google.maps.GeocoderStatus.OK) {
				if (results[1]) {
					markerName = placeMarker(event.latLng, results[1].formatted_address, 1);
					infowindow.setContent(results[1].formatted_address);
					infowindow.open(map, markerName);
				}
			}
		});
	});
}
function placeMarker(location, name, length) {
	if (length == 1) {
		deleteOverlays();
		document.getElementById('lat').value = location.lat();
		document.getElementById('lng').value = location.lng();
		document.getElementById('DiaChi').value = name;
	} else {
		document.getElementById('lat').value = '';
		document.getElementById('lng').value = '';
	}
	var marker = new google.maps.Marker({
		position: location,
		title: name,
		map: map
	});
	markers.push(marker);
	return marker;
}
function deleteOverlays() {
	markers.forEach(function(marker) {
		marker.setMap(null);
	});
	markers = [];
}
$(document).on('click', '.btn-add', function() {
	var formData = new FormData($("#form1")[0]);
	formData.append('DanhGia', $('.rateit').rateit('value'));
	$.ajax({
		url: '',
		type: 'POST',
		data: formData,
		async: false,
		success: function (data) {
			$('#form1').trigger('reset');
			//$('.rateit').rateit('reset');
			$('#btn-submit').html('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> THÊM ĐỊA ĐIỂM');
			alert(data);
			//loadTable();
		},
		cache: false,
		contentType: false,
		processData: false
	});
	return false;
});
$(document).on('click', '.btn-edit', function() {
	$('#DiaChi').focus();
	var i = $(this).attr('value');
	$('#btn-submit').html('<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> SỬA ĐỊA ĐIỂM');
	$('#form1').trigger('reset');
	$('#action').val('update');
	$('#id-map').val(arr[i].id);
	$('#lat').val(arr[i].lat);
	$('#lng').val(arr[i].lng);
	$('#DiaChi').val(arr[i].DiaChi);
	$('#DiaDiem').val(arr[i].DiaDiem);
	$('.rateit').rateit('value', arr[i].DanhGia);
	$('#Kieu' + arr[i].Kieu).prop('checked', true);
	$('#MoTa').val(arr[i].MoTa);
	deleteOverlays();
	LatLng = new google.maps.LatLng(arr[i].lat, arr[i].lng);
	map.setCenter(LatLng);
	var marker = new google.maps.Marker({
		position: LatLng,
		map: map
	});
	infowindow = new google.maps.InfoWindow;
	infowindow.setContent(arr[i].DiaChi);
	infowindow.open(map, marker);
	markers.push(marker);
	$('#btn-cancel').show();
});
$(document).on('click', '#btn-cancel', function() {
	deleteOverlays();
	$('#form1').trigger('reset');
	$('.rateit').rateit('reset');
	$('#btn-submit').html('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> THÊM ĐỊA ĐIỂM');
	$(this).hide();
});
$(document).on('click', '.btn-del', function() {
	if (confirm('Bạn có muốn xóa địa điểm này?')) {
		var id = $(this).attr('value');
		$.post('', { action: 'delete', id: id },
		function(data) {
			alert(data);
			loadTable();
		});
	}
});
function loadTable() {
	$.post('', { action: 'load' },
	function(data) {
		printTable(data);
	});
}
function printTable(data) {
	try {
		arr = jQuery.parseJSON(data);
		var html = '<table class="table table-hover"><tr><th>ID</th><th>ĐỊA CHỈ</th><th>ĐỊA ĐIỂM</th><th>HÀNH ĐỘNG</th></tr>';
		for (i = 0; i < arr.length; i++) {
			html += '<tr><td>' + arr[i].id + '</td>';
			html += '<td>' + arr[i].DiaChi + '</td>';
			html += '<td>' + arr[i].DiaDiem + '</td>';
			html += '<td><a type="button" class="btn btn-default btn-sm btn-edit" value=' + i + '><span class="glyphicon glyphicon-pencil"></span> SỬA</a> ';
			html += '<a type="button" class="btn btn-danger btn-sm btn-del" value=' + arr[i].id + '><span class="glyphicon glyphicon-trash"></span> XÓA</a></td></tr>';
		}
		html += '</table>';
		$('.maps-list').html(html);
	} catch (e) {
		console.log(e);
	}
}