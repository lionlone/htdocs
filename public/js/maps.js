var map = new google.maps.Map(document.getElementById('googleMap'), {
	center: {lat: 21.0403089, lng: 105.78822160000004},
	zoom: 15,
	mapTypeId: google.maps.MapTypeId.ROADMAP
});
$(document).ready(function() {
	loadMap();
});
var LatLng, infowindow = new google.maps.InfoWindow;
var markers = [];
var Kieu = 0;
$(document).on('click', '.btn-search', function() {
	loadMap();
});
$(document).on('submit', 'form', function() {
	$('.btn-search').click();
	return false;
});
$('input[type=radio][name=Kieu]').change(function() {
	Kieu = $(this).val();
	loadMap();
});
function loadMap() {
	$.post('', { place: $('#place-name').val(), Kieu: Kieu },
	function(data) {
		try {
			var arr = jQuery.parseJSON(data);
			var item = '';
			for (i = 0; i < arr.length; i++) {
				item += '<div class="items"><a role="tab" data-toggle="tab" class="list-group-item clearfix" data-lat="' + arr[i].lat + '" data-lng="' + arr[i].lng + '" data-address="' + arr[i].DiaChi + '" data-id="' + arr[i].id + '">';
				item += '<div class="col-xs-9 col-sm-8 col-md-9 col-lg-9">';
				item += '<h4 class="list-group-item-heading">' + arr[i].DiaDiem + '</h4>';
				item += '<p class="list-group-item-text">' + arr[i].DiaChi + '</p></div>';
				item += '<img class="media-object" alt="64x64" src="images/' + arr[i].avatar + '" data-holder-rendered="true" style="width: 64px; height: 64px;"></a>';
				item += '<div class="detail-show" style="display:none;" id="' + arr[i].id + '"><img class="imgcss3" src="images/' + arr[i].avatar + '">';
				item += '<div style="margin-left:10px;"><b>Bình chọn:</b> <span class="rateit" data-rateit-value="' + arr[i].DanhGia + '" data-rateit-ispreset="true" data-rateit-readonly="true"></span></div>';
				item += '<div style="margin-left:10px;"><b>Thông tin:</b> <br>' + arr[i].MoTa + '</div></div></div>';
				LatLng = new google.maps.LatLng(arr[i].lat, arr[i].lng);
				if (i == 0) map.setCenter(LatLng);
				var marker = new google.maps.Marker({
					position: LatLng,
					title: arr[i].DiaChi,
					map: map
				});
				infowindow.setContent(arr[i].DiaChi);
				markers.push(marker);
				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open(map, this);
				});
			}
			$('.list-maps').html(item);
			if ($('.lib-rate').length) $('.lib-rate').remove();
			$('body').append('<script class="lib-rate" src="js/jquery.rateit.min.js"></script>');
		} catch (e) {
			console.log(e);
		}
	});
}
$(document).on('click', '.list-group-item', function() {
	$('.detail-show').each(function() {
		$(this).slideUp();
	});
	$('.detail-show#' + $(this).data('id')).slideDown();
	deleteOverlays();
	LatLng = new google.maps.LatLng($(this).data('lat'), $(this).data('lng'));
	map.setCenter(LatLng);
	var marker = new google.maps.Marker({
		position: LatLng,
		map: map
	});
	infowindow = new google.maps.InfoWindow;
	infowindow.setContent($(this).data('address'));
	infowindow.open(map, marker);
	markers.push(marker);
});
function deleteOverlays() {
	markers.forEach(function(marker) {
		marker.setMap(null);
	});
	markers = [];
}