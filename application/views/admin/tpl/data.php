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
    <div class="panel">
        <div class="panel-heading"> 
            <ul class="tabs nav panel-tabs-border panel-tabs panel-tabs-left">
                <li class="active"><a href="#data_info">Dữ liệu trang</a></li>
            </ul>
        </div>
        <div class="panel-body pn mt10">
            <table class="footable table table-striped table-hover table-bordered admin-form fs13">
                <thead>
                    <tr class="info">
                        <td class="footable-first-column w300">Từ khóa</td>
                        <td class="">Giá trị</td>
                        <th class="text-center w150">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- List -->
                        <?php foreach ($list_data as $key => $data): ?>
                            <tr>
                                <td><a href="<?= admin_url(); ?>/data/edit/<?= $data['id'];?>" title="Chỉnh sửa"><?= $data['key'];?></a>
                                </td>
                                <td><?= $data['data']; ?></td>
                                <td class="text-center">
                                <a href="<?= admin_url(); ?>/data/edit/<?= $data['id'];?>" title="Chỉnh sửa" class="btn btn-xs btn-warning btn-edit br3">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <!-- <a href="" title="Sử dụng giá trị mặc định" class="btn btn-xs btn-danger btn-delete br3 verify_action" 
                                   notice="Bạn có chắc chắn muốn chuyển giá trị về mặc định:<br><b></b>"
                                   >
                                    <i class="fa fa-times"></i>
                                </a> -->
                            </td>
                            </tr>
                        <?php endforeach ?>

                        </tbody>
            </table>
        </div>
    </div>
</section>

                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>