<!DOCTYPE html>
<html>
<head>
    
    <?php $this->load->view("client/tpl/head"); ?>

     <script type="text/javascript">
         $(document).ready(function () {


             var e = window.location.pathname;
             if (e == "/default.aspx" || e == "/index.htm" || e == "/" || e == "/Default.aspx") {
                 $("#hidden").slideDown();
             }
             else {
                 $("#hidden").slideUp();

             }

             $(".flexy-menu").flexymenu({
                 speed: 400,
                 type: "vertical",
                 indicator: false
             });

         });
    </script>   

</head>
<body id="ctl00_pone" onkeypress="if (event.keyCode == 13) return false;">
    <div class="container">
        

<?php $this->load->view("client/tpl/header", $list_data); ?>
<div class="googlecpc">
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 926024870;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script><iframe name="google_conversion_frame" title="Google conversion frame" width="300" height="13" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/926024870/?random=1466693612779&amp;cv=8&amp;fst=1466693612779&amp;num=1&amp;fmt=1&amp;guid=ON&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=420&amp;u_java=false&amp;u_nplug=8&amp;u_nmime=12&amp;frm=0&amp;url=http%3A//www.trananh.vn/&amp;tiba=H%E1%BB%87%20th%E1%BB%91ng%20%C4%91i%E1%BB%87n%20m%C3%A1y%20-%20m%C3%A1y%20t%C3%ADnh%20-%20%C4%91i%E1%BB%87n%20tho%E1%BA%A1i%20T" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no"></iframe>

<noscript>
    &lt;div style="display: inline;"&gt;
        &lt;img height="1" width="1" style="border-style: none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/926024870/?value=0&amp;amp;guid=ON&amp;amp;script=0" /&gt;
    &lt;/div&gt;
</noscript>
</div>

        
<div class="row">
    <div class="category">
        <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs">
            <div class="tit-list" id="hidden-toggler">
                <span class="glyphicon glyphicon-list homepage">
                <em></em>
                <em></em>
                <em></em>
                </span><a title="Trang chủ" href="javascript:;">Danh mục sản phẩm</a>
            </div>            
        </div>
        <div class="col-lg-7 col-md-10 col-sm-9 col-xs-12">
            <div class="search-pro">
                <div class="input-group">
                    <input type="text" class="form-control" id="txtSearch" placeholder="Từ khóa tìm kiếm..." onkeypress="if (event.keyCode == 13) document.getElementById('btnSearch').click();" onkeyup="searchSuggest(event);" autocomplete="off">
                    <div id="search_suggest" style="z-index: 299999; visibility: hidden; position: absolute;
                        left: 0; top: 48px">
                    </div>
                    <span class="input-group-btn">
                        <button id="btnSearch" class="btn btn-default" type="button" onclick="searchRedirect();">
                            <span class="icon-search glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
            <div class="cart">
                <strong><a rel="nofollow" href="/mua-hang">GIỎ HÀNG</a></strong>
                <p>
                    0</p>
                <span class="icon-cart glyphicon glyphicon-shopping-cart"></span>
            </div>
        </div>
    </div>
</div>
<!-- Category -->



        <div class="row menu-flex">
            <div class="menu-banner-video">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 padLeftNo">
                    
<ul class="flexy-menu orange vertical" id="hidden" style="display: block;">
    <li class="flexymenuli" style=""><span class="icon-cate"></span><a href="/dien-lanh-cid388" title="Điện lạnh tại Trần Anh">Điện lạnh</a>
        <ul class="flexy-menu-box" style="display: none;">
            <div class="flexy-menu-inner">
                <li><a href="/dien-lanh-cid388" class="menu-top-red" title="Điện lạnh tại Trần Anh">
                    Sản phẩm điện lạnh</a> </li>
                <li><a href="/dien-lanh/dieu-hoa-cid537" title="Điều hòa">Điều hòa</a></li>
            </div>
            
        </ul>
    </li>
    <li class="flexymenuli" style=""><span class="icon-cate"></span><a href="/do-gia-dung-cid390" title="Đồ gia dụng tại Trần Anh">Đồ gia dụng</a>
        <ul class="flexy-menu-box" style="display: none;">
            <div class="flexy-menu-inner list3">
                <li><a href="/do-gia-dung-cid390" class="menu-top-red" title="Đồ dùng gia đình tại Trần Anh">
                    Đồ dùng gia đình</a></li>
                <li><a href="/do-gia-dung/quat-mat-cid408" title="Quạt mát">Quạt mát</a></li>
               
            </div>
            
        </ul>
    </li>
    <li class="flexymenuli" style=""><span class="icon-cate"></span><a href="/dien-tu-am-thanh-cid389" title="Điện tử âm thanh tại Trần Anh">Điện tử &amp; Âm thanh</a>
        <ul class="flexy-menu-box" style="display: none;">
            <div class="flexy-menu-inner">
                <li><a href="/dien-tu-am-thanh/tivi-led-cid533" class="menu-top-red" title="Tivi LED bán tại Trần Anh">
                    Tivi LED</a> </li>
                <li><a href="/dien-tu-am-thanh/tivi-led-sony-cid533-pr0-br155" title="TiVi Sony">Tivi
                    LED Sony</a></li>
               
            </div>
            

        </ul>
    </li>
    <li class="flexymenuli" style=""><span class="icon-cate"></span><a href="/dien-thoai-cid12">
        Điện thoại</a>
        <ul class="flexy-menu-box" style="display: none;">
            <div class="flexy-menu-inner">
                <li><a href="/dien-thoai/dien-thoai-di-dong-cid338" class="menu-top-red" title="Điện thoại di động chính hãng tại Trần Anh">
                    Điện thoại di động</a> </li>
                <li><a href="/dien-thoai/dien-thoai-di-dong-samsung-cid338-pr0-br121" title="Điện thoại Samsung">
                    Điện thoại Samsung</a></li>
                
            </div>
            
        </ul>
    </li>
    <li class="flexymenuli" style=""><span class="icon-cate"></span><a href="/thiet-bi-so-cid562" title="Kỹ thuật số">Kỹ thuật số</a>
        <ul class="flexy-menu-box" style="display: none;">
            <div class="flexy-menu-inner">
                <li><a href="/ky-thuat-so/may-anh-so-cid8" class="menu-top-red" title="Máy Ảnh Giá Rẻ phân phối tại Trần Anh">
                    Máy ảnh số</a> </li>
                <li><a href="/ky-thuat-so/may-anh-so-canon-cid8-pr0-br145" title="Máy ảnh Canon">Máy
                    ảnh Canon</a></li>

            </div>
            
        </ul>
    </li>
    <li class="flexymenuli" style=""><span class="icon-cate"></span><a href="/laptop-tablet/laptop-cid9" title="Laptop chính hãng">Laptop</a>
        <ul class="flexy-menu-box" style="display: none;">
            <div class="flexy-menu-inner">
                <li><a href="/laptop-tablet/laptop-cid2" class="menu-top-red" title="Laptop tại Trần Anh">
                    Laptop theo hãng</a> </li>
                <li><a href="/laptop/laptop-dell-cid2-pr0-br146/?od=ton_des" title="Laptop Dell">Laptop Dell</a></li>
                

            </div>
            
        </ul>
    </li>
    <li class="flexymenuli" style=""><span class="icon-cate"></span><a href="/laptop-tablet/tablet-cid1142" title="Máy tính bảng giá rẻ">Tablet</a>
        <ul class="flexy-menu-box" style="display: none;">
            <div class="flexy-menu-inner list3">
                <li><a href="/laptop-tablet/tablet-cid600" class="menu-top-red" title="Tablet chính hãng tại  Trần Anh">
                    Máy tính bảng theo hãng</a> </li>
                <li><a href="/laptop-tablet/tablet-apple-cid600-pr0-br166" title="Tablet Apple">Tablet
                    Apple</a></li>
            </div>

        </ul>
    </li>
    <li class="flexymenuli" style=""><span class="icon-cate"></span><a href="/may-tinh-linh-kien-cid10" title="Máy tính linh kiện chính hãng">Máy tính &amp; Linh kiện</a>
        <ul class="flexy-menu-box" style="display: none;">
            <div class="flexy-menu-inner">
                <li><a href="/may-tinh-linh-kien/may-tinh-de-ban-cid3" class="menu-top-red" title="Máy tính để bàn - PC">
                    Máy tính để bàn - PC</a> </li>
                <li><a href="/may-tinh-linh-kien/may-tinh-de-ban-may-tinh-tran-anh-cid3-pr0-br175" title="Máy tính để bàn Trần Anh">Máy tính Trần Anh</a></li>

            </div>
            
        </ul>
    </li>
    <li class="flexymenuli" style=""><span class="icon-cate"></span><a href="/thiet-bi-van-phong-cid5" title="Thiết bị văn phòng">Thiết bị văn phòng</a>
        <ul class="flexy-menu-box" style="display: none;">
            <div class="flexy-menu-inner">
                <li><a href="/thiet-bi-van-phong/may-in-cid26" class="menu-top-red" title="Máy in - Printer">
                    Máy in - Printer</a></li>
                <li><a href="/thiet-bi-van-phong/may-in-canon-cid26-pr0-br145" title="Máy in Canon">
                    Máy in CANON</a></li>

            </div>
            
        </ul>
    </li>
    <!-- <li class="flexymenuli" style=""><span class="icon-cate mg-left"></span><a class="nostyle" href="/khuyen-mai-tran-anh.htm">CT khuyến mại</a></li> -->
</ul>
<!-- Menu -->

                </div>
                
<div class="col-lg-7 col-md-7 col-sm-9 padRno">
    <div class="banner-slider">       
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">                
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li><li data-target="#carousel-example-generic" data-slide-to="1" class=""></li><li data-target="#carousel-example-generic" data-slide-to="2" class=""></li><li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                 
                    <div id="ctl00_newslidehome1_rptAdv_ctl00_divitem" class="item active">
                        <a href="http://www.trananh.vn/khuyenmai.htm" id="ctl00_newslidehome1_rptAdv_ctl00_hlAdv" target="_blank" title="Khuyến mại hàng tuần tại siêu thị điện máy Trần Anh">
                            <img src="http://slide.trananh.vn/trananh/2016/06/02/BANNER.EURO3.png" id="ctl00_newslidehome1_rptAdv_ctl00_imgItem" alt="Khuyến mại hàng tuần tại siêu thị điện máy Trần Anh"></a>
                    </div>
                    
                    <div id="ctl00_newslidehome1_rptAdv_ctl01_divitem" class="item">
                        <a href="http://www.trananh.vn/khuyen-mai-tran-anh.htm" id="ctl00_newslidehome1_rptAdv_ctl01_hlAdv" target="_blank" title="Khuyến mại hàng tuần tại siêu thị điện máy Trần Anh">
                            <img src="http://slide.trananh.vn/trananh/2016/06/09/Banner_popup.png" id="ctl00_newslidehome1_rptAdv_ctl01_imgItem" alt="Khuyến mại hàng tuần tại siêu thị điện máy Trần Anh"></a>
                    </div>
                    
                    <div id="ctl00_newslidehome1_rptAdv_ctl02_divitem" class="item">
                        <a href="http://www.trananh.vn/khuyen-mai-nganh-tablet.htm" id="ctl00_newslidehome1_rptAdv_ctl02_hlAdv" target="_blank" title="Khuyến mại hàng tuần tại siêu thị điện máy Trần Anh">
                            <img src="http://slide.trananh.vn/trananh/2016/06/23/Untitled-3(1).png" id="ctl00_newslidehome1_rptAdv_ctl02_imgItem" alt="Khuyến mại hàng tuần tại siêu thị điện máy Trần Anh"></a>
                    </div>
                    
                    <div id="ctl00_newslidehome1_rptAdv_ctl03_divitem" class="item">
                        <a href="http://www.trananh.vn/mua-tivi-samsung-49KS7500-gia-uu-dai" id="ctl00_newslidehome1_rptAdv_ctl03_hlAdv" target="_blank" title="Khuyến mại hàng tuần tại siêu thị điện máy Trần Anh">
                            <img src="http://slide.trananh.vn/trananh/2016/06/22/galaxy_giftcard(2).png" id="ctl00_newslidehome1_rptAdv_ctl03_imgItem" alt="Khuyến mại hàng tuần tại siêu thị điện máy Trần Anh"></a>
                    </div>
                                   
            </div>



            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>


        </div>
    </div>
</div>
<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
    <div class="video-top">
        <div class="tvc">
            <a onclick="open_me('/tvc', false, false,false,false,false, false, false, true,510,810,0,0); return false;" href="#">
                
                        <img src="http://adv.trananh.vn/trananh/2016/03/12/Varios-Mix_03.png" id="ctl00_newslidehome1_rptTVC_ctl00_imgTVC" class="img-thumbnail" alt="Trần Anh khuyến mại hàng tuần giá sốc">
                    
            </a>
        </div>
        <div class="bt-video">
            
                    <a href="http://www.trananh.vn/tin-tuc/bao-chi-noi-ve-chung-toi/banh-truong-quy-mo-tran-anh-chay-dua-mo-5-dai-sieu-thi-n33738" id="ctl00_newslidehome1_RPTuyendung_ctl00_hlTuyendung" target="_blank">
                        <img src="http://adv.trananh.vn/trananh/2016/06/22/bannerkt3.gif" id="ctl00_newslidehome1_RPTuyendung_ctl00_imgTuyendung" class="img-thumbnail" alt="Trần Anh tuyển dụng"></a>
                
                    <a href="http://www.trananh.vn/tuyen-dung" id="ctl00_newslidehome1_RPTuyendung_ctl01_hlTuyendung" target="_blank">
                        <img src="http://adv.trananh.vn/trananh/2016/03/08/banner-tuyendung(1).png" id="ctl00_newslidehome1_RPTuyendung_ctl01_imgTuyendung" class="img-thumbnail" alt="Trần Anh tuyển dụng"></a>
                
        </div>
    </div>
</div>


<script type="text/javascript">
    $(function () {
        $('#carousel-example-generic').carousel({
            interval: false            
        });       
    });
</script>
            </div>
        </div>
        
        

    <div class="product-list">
        <div class="row bg-white">
            <div class="title-product">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 padLeftNo padRightNo">
                    <div class="title">
                        <a href="/dien-lanh-cid388">ĐIỆN LẠNH</a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-9 hidden-xs border-bt">
                    <div class="title-list-product">
                        <ul>
                            <li><a href="/san-pham-ban-chay/cid388">Sản phẩm bán chạy</a></li>
                            <li><a href="/san-pham-moi/cid388">Sản phẩm mới</a></li>
                            <li><a href="/san-pham-khuyen-mai/cid388">Sản phẩm khuyến mại</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-white">
            <div class="product slider responsive_listproducthome slick-initialized slick-slider">
                
        <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 1200px; left: 0px;">
        <div id="ctl00_ContentPlaceHolder1_ListProductHome1_rptData_ctl04_productline" class="col-lg-15 col-lg-3  border-last item active slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide04" style="width: 239px;">
            <div class="product">
                <div class="img-pro-hot">
                    <div class="fixed-image">
                        <a href="/dien-lanh/cuc-lanh-dieu-hoa-1-chieu-samsung-ar09kcfssurnsv-9-000btu-pid191957cid537" id="ctl00_ContentPlaceHolder1_ListProductHome1_rptData_ctl04_linkpro" title="Cục lạnh điều hòa 1 chiều Samsung AR09KCFSSURNSV 9.000BTU" tabindex="0">
                            <img src="http://img.trananh.vn/trananh/2016/03/18/cuc-lanh-dieu-hoa-1-chieu-samsung-ar09kcfssurnsv-9-000btu.jpg.150.150.cache" id="ctl00_ContentPlaceHolder1_ListProductHome1_rptData_ctl04_imagespro" alt="Cục lạnh điều hòa 1 chiều Samsung AR09KCFSSURNSV 9.000BTU" height="150" width="150"></a>
                        <div class="discount">
                            <span id="ctl00_ContentPlaceHolder1_ListProductHome1_rptData_ctl04_icondiscount" class="icon-discount"></span>
                            <p>
                                <span id="ctl00_ContentPlaceHolder1_ListProductHome1_rptData_ctl04_ltdiscount" class="ldiscount">Giảm 15%</span></p>
                        </div>
                        <div id="ctl00_ContentPlaceHolder1_ListProductHome1_rptData_ctl04_iconpromo" class="ico-promotion"></div>
                    </div>
                </div>
                <div class="product-name">
                    <a id="ctl00_ContentPlaceHolder1_ListProductHome1_rptData_ctl04_Title" title="Cục lạnh điều hòa 1 chiều Samsung AR09KCFSSURNSV 9.000BTU" href="/dien-lanh/cuc-lanh-dieu-hoa-1-chieu-samsung-ar09kcfssurnsv-9-000btu-pid191957cid537" tabindex="0">Cục lạnh điều hòa 1 chiều Samsung AR09KCFSSURNSV</a></div>
                <div class="product-price price-dt1">
                    <span class="gny"></span><span class="number8-sb"></span><span class="numberdot-sb"></span><span class="number1-sb"></span><span class="number9-sb"></span><span class="number0-sb"></span><span class="numberdot-sb"></span><span class="number0-sb"></span><span class="number0-sb"></span><span class="number0-sb"></span></div>
                <div id="ctl00_ContentPlaceHolder1_ListProductHome1_rptData_ctl04_productreal" class="product-real-price price-dt1">
                    <small class="real-price">
                        <span class="number6-bw"></span><span class="numberdot-bw"></span><span class="number9-bw"></span><span class="number9-bw"></span><span class="number0-bw"></span>
                    </small>
                    <span class="gkm-b"></span>
                    
                </div>
            </div>
        </div></div></div>
    
        
    
        
    
        
    
        
    

            </div>
        </div>
    </div>




    <div class="product-list">
        <div class="row bg-white">
            <div class="title-product">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 padLeftNo padRightNo">
                    <div class="title">
                        <a href="/do-gia-dung-cid390">ĐỒ GIA DỤNG</a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-9 hidden-xs border-bt">
                    <div class="title-list-product">
                        <ul>
                            <li><a href="/san-pham-ban-chay/cid390">Sản phẩm bán chạy</a></li>
                            <li><a href="/san-pham-moi/cid390">Sản phẩm mới</a></li>
                            <li><a href="/san-pham-khuyen-mai/cid390">Sản phẩm khuyến mại</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bg-white">
            <div class="product slider responsive_listproducthome slick-initialized slick-slider">
                
        <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 1200px; left: 0px;">
        <div id="ctl00_ContentPlaceHolder1_ListProductHome2_rptData_ctl04_productline" class="col-lg-15 col-lg-3  border-last item active slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide14" style="width: 239px;">
            <div class="product">
                <div class="img-pro-hot">
                    <div class="fixed-image">
                        <a href="/noi-com-dien/noi-com-dien-sharp-ks-n18etv-rp-rb-1-8l-pid192532cid1080" id="ctl00_ContentPlaceHolder1_ListProductHome2_rptData_ctl04_linkpro" title="Nồi cơm điện Sharp KS-N18ETV &quot;RP/RB&quot; 1.8L" tabindex="0">
                            <img src="http://img.trananh.vn/trananh/2016/04/07/noi-com-dien-sharpks-n18etv-rp-rb-1-8-lit.jpg.150.150.cache" id="ctl00_ContentPlaceHolder1_ListProductHome2_rptData_ctl04_imagespro" alt="Nồi cơm điện Sharp KS-N18ETV &quot;RP/RB&quot; 1.8L" height="150" width="150"></a>
                        <div class="discount">
                            <span id="ctl00_ContentPlaceHolder1_ListProductHome2_rptData_ctl04_icondiscount" class="icon-discount"></span>
                            <p>
                                <span id="ctl00_ContentPlaceHolder1_ListProductHome2_rptData_ctl04_ltdiscount" class="ldiscount">Giảm 26%</span></p>
                        </div>
                        <div id="ctl00_ContentPlaceHolder1_ListProductHome2_rptData_ctl04_iconpromo"></div>
                    </div>
                </div>
                <div class="product-name">
                    <a id="ctl00_ContentPlaceHolder1_ListProductHome2_rptData_ctl04_Title" title="Nồi cơm điện Sharp KS-N18ETV &quot;RP/RB&quot; 1.8L" href="/noi-com-dien/noi-com-dien-sharp-ks-n18etv-rp-rb-1-8l-pid192532cid1080" tabindex="0">Nồi cơm điện Sharp KS-N18ETV "RP/RB" 1.8L</a></div>
                <div class="product-price price-dt1">
                    <span class="gny"></span><span class="number1-sb"></span><span class="numberdot-sb"></span><span class="number2-sb"></span><span class="number2-sb"></span><span class="number0-sb"></span><span class="numberdot-sb"></span><span class="number0-sb"></span><span class="number0-sb"></span><span class="number0-sb"></span></div>
                <div id="ctl00_ContentPlaceHolder1_ListProductHome2_rptData_ctl04_productreal" class="product-real-price price-dt1">
                    <small class="real-price">
                        <span class="number8-bw"></span><span class="number9-bw"></span><span class="number9-bw"></span>
                    </small>
                    <span class="gkm-b"></span>
                    
                </div>
            </div>
        </div></div></div>
    
            </div>
        </div>
    </div> 
<?php
    $this->load->view("client/tpl/footer", $list_data); 
?>
<!-- Footer -->
</body>
</html>
