<div class="navbar-branding dark bg-info">
    <a class="navbar-brand" href="admin.html"> <b>ivoc.vn </b></a>
    <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
</div>
<ul class="nav navbar-nav navbar-left">
    <li>
        <a class="fw700 fs14" target="_blank" href="<?= base_url(); ?>"><span class="octicon octicon-screen-full fs18 mr5"></span> Xem website</a>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    

    <li class="ph10 pv20 hidden-xs"> <i class="fa fa-circle text-tp fs8"></i> </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
            <img src="<?= public_url(); ?>/img/avatar.jpg" alt="avatar" width="30" height="30" class="br3 mr15" />
            <span>Xin chào: Nguyễn</span>
            <span class="caret caret-tp hidden-xs"></span>
        </a>
        <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
            <li class="br-t of-h">
                <a href="<?= public_url() . "/accout"; ?>" class="fw600 p12 animated animated-short fadeInDown">
                    <span class="fa fa-lock pr5"></span> Thay đổi mật khẩu 
                </a>
            </li>
            <li class="br-t of-h">
                <a href="<?= public_url() . "/logout"; ?>" class="fw600 p12 animated animated-short fadeInDown">
                    <span class="fa fa-power-off pr5"></span> Thoát 
                </a>
            </li>
        </ul>
    </li>
</ul>