<!DOCTYPE html>
<html>
    <head>
        <?php
            $data['title'] = 'Trang chủ';
            $this->load->view('admin/tpl/head',$data);
        ?>
        <?php
        if (isset($css)) {
            foreach ($css as $key => $value) {
                echo '<link rel="stylesheet" href="'. base_url() .'public/css/' . $value . '.css">';
            }
        }
        ?>
    </head>
    <body class="sb-l-o sb-r-c">
        <div id="main">
            <!-- Start: header -->
            <!-- Common view -->
            <!-- Message -->
            <header class="navbar navber-fixed-top bg-info">
                <?php
                    $this->load->view('admin/tpl/header');
                ?>
            </header>
            <!-- End: header -->
            <!-- Start: Sidebar -->
            <aside id="sidebar_left" class="nano nano-primary">
                <?php
                    $data_sidebar = array();
                    $this->load->view("admin/tpl/sidebar", $data_sidebar);
                ?>
            </aside>
            <!-- End: Sidebar -->
            <!-- Start: Content-Wrapper -->
			<section id="content_wrapper">
                <header id="topbar" class="affix">
                <?php
                    //$bread['breadcrumbs'] = array();
                    //$this->load->view("admin/tpl/header_content", $bread); 
                ?>
                </header>
    			<?php 
                    if (empty($main) || $main == 'index') {
                        $main = 'home';
                    }
                    $this->load->view("admin/tpl/$main"); 
                ?>
			</section>
            <!-- End: Content-Wrapper -->
        </div>
        <!-- End: Main -->
        <script type="text/javascript" src="<?= public_url(); ?>/admin/ipanel/assets/js/main.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function () {
                "use strict";
                // Init Theme Core      
                Core.init({
                    sbm: "sb-l-c",
                });

                //FooTable
                $(function () {
                    $('.footable').footable();
                });

            });
        </script>
    </body>
</html>