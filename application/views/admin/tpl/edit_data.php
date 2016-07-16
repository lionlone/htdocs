              <!-- Common -->
<header id="topbar" class="affix">
        <div class="topbar-left">
                <!-- Breadcrumbs -->
                <ol class="breadcrumb">
        <li class="crumb-icon">
                <a href="http://demothu.web5s.com.vn/admin.html" title="">
                        <span class="glyphicon glyphicon-home"></span>
                </a>
        </li>
        
                                <li >
                        <a href="">Cấu hình</a>
                </li>
                        <li >
                        <a href="http://demothu.web5s.com.vn/admin/data.html">Dữ liệu trang</a>
                </li>
                        <li class="current">
                        <a href="">Dữ liệu trang</a>
                </li>
        </ol>        </div>
        <div class="topbar-right"></div>
</header>

<!-- Message -->





<!-- Widget verify action -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="box_verify_action">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa  fa-life-bouy"></i> Thông báo</h4>
      </div>
      <div class="modal-body">
            <p><i class="fa  fa-fa-warning"></i><span  id="notice"></span></p>
      </div>
      <div class="modal-footer">
        <a id="cancel" href="javascript:void(0)" class="btn btn-default" data-dismiss="modal">Hủy bỏ</a>
        <a id="accept" href="javascript:void(0)" class="btn btn-primary">Xác nhận</a>
      </div>
    </div>
  </div>
</div>
<!-- Main content wrapper -->
<section id="content">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Từ khóa</th>
				<th>Giá Trị</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<form action="<?= admin_url();?>/data/edit/<?= $edit_data['id']; ?>" method="POST" role="form">
					<td class="text-center"><?= $edit_data['key']; ?></td>
					<td>
				    	<input type="text" class="form-control" value="<?= $edit_data['data']; ?>" name="data" id="" placeholder="Nội dung">
	    			</td>
	    			<td><button type="submit" class="btn btn-primary">Sửa</button></td>
				
				</form>
			</tr>
		</tbody>
	</table>
</section>