              <!-- Common -->
<header id="topbar" class="affix">
        <div class="topbar-left">
                <!-- Breadcrumbs -->
                <ol class="breadcrumb">
			        <li class="crumb-icon">
			            <a href="" title="">
			                <span class="glyphicon glyphicon-home"></span>
			            </a>
			        </li>
        
                    <li >
		                <a href="">Gian hàng</a>
		            </li>
                    <li >
		                <a href="">THêm gian hàng</a>
		            </li>
        		</ol>
        </div>
		<div class="topbar-right"></div>
</header>

<!-- Message -->
<!-- Main content wrapper -->
<section id="content">
    <div class="panel">
    	<div class="container">
		<form action="" method="POST" class="form-horizontal" id="form1" role="form">
		<input type="text" class="hidden" id="action" name="action" value="insert">
				<div class="form-group">
					<legend>Thêm gian hàng</legend>
				</div>
		
				<div class="form-group">
						<label for="">Tên gian hàng</label>
						<input type="text" class="form-control" id="nameshop" name="nameshop" placeholder="Tên gian hàng">
				</div>
				
				<div class="form-group">
						<label for="">Người quản trị gian hàng</label>
						<input type="text" class="form-control" id="adminshop" name="adminshop" placeholder="Nhập nickname thành viên quản trị gian hàng">
				</div>

				<div class="form-group">
						<label for="">Link shop ( http://domain.com/linkshop )</label>
						<input type="text" class="form-control" id="linkshop" name="linkshop" placeholder="Link shop viết liền không dấu">
				</div>

				<div class="form-group">
						<label for="">Website shop</label>
						<input type="text" class="form-control" id="websiteshop" name="websiteshop" placeholder="Website shop viết liền không dấu">
				</div>
				
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<input id="pac-input" class="controls" type="text" placeholder="Tìm kiếm"></input>
					<div id="map"></div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<legend><h1 class="text-center title-action">ĐỊA ĐIỂM</h1></legend>
						<div class="form-group">
							<input type="text" class="hidden" id="id-map" name="id-map">
							<input type="text" class="hidden" id="lat" name="lat" placeholder="lat">
							<input type="text" class="hidden" id="lng" name="lng" placeholder="lng">
							<input type="text" class="form-control" id="DiaChi" name="DiaChi" placeholder="Địa chỉ">
							<input type="text" class="form-control" id="DiaDiem" name="DiaDiem" placeholder="Địa điểm">
							<input type="file" class="form-control" id="avatar" name="avatar" placeholder="Ảnh đại diện">
							<div style="margin-top:10px;">Bình chọn: <span class="rateit"></span></div>
							<textarea class="form-control" rows="5" name="MoTa" id="MoTa" placeholder="Mô tả"></textarea>
						</div>
						<!-- <a type="button" id="btn-cancel" class="btn btn-danger" style="display:none;"><span class="glyphicon glyphicon-remove"></span> HỦY</a> -->
				</div>
				<div style="clear: both;"></div>

				<div class="form-group">
						<label for="">Số điện thoại</label>
						<input type="text" class="form-control" id="" name="phoneshop" placeholder="Số điện thoại">
				</div>
				
				<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="" name="emailshop" placeholder="Email">
				</div>

				<div class="form-group">
					<a type="button" id="btn-submit" class="btn btn-primary btn-add"><span class="glyphicon glyphicon-plus"></span> THÊM GIAN HÀNG</a>
				</div>
		</form>
		</div>
    </div>
</section>
	<!-- <script src="//code.jquery.com/jquery.js"></script> -->
	<script src="<?= base_url(); ?>public/js/maps-google.js"></script>
	<script src="<?= base_url(); ?>public/js/jquery.rateit.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg9cdPU7sNSY9zWgBkfjBnd6L5wSkPzD4&libraries=places&callback=initAutocomplete" async defer></script>