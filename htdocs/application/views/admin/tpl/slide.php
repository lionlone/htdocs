               <!-- Common view -->
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
                        <a href="http://demothu.web5s.com.vn/admin/slide.html">Slide</a>
                </li>
                        <li class="current">
                        <a href="">Danh sách</a>
                </li>
        </ol>        </div>
        <div class="topbar-right">
                <a class="btn btn-success fw600 pull-right mr10 br3 pv5" href="http://demothu.web5s.com.vn/admin/slide/add.html">
                        <i class="fa fa-plus mr5"></i> Thêm mới                </a>
        </div>
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
<section id="content" class="gallery-page">
    <div class="tray tray-center pn va-t">
        <div class="mh15 pb15 br-b br-light">
            <div class="row">
                <div class="col-xs-7"></div>
                <div class="col-xs-5 text-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default to-grid">
                            <span class="fa fa-th"></span>
                        </button>
                        <button type="button" class="btn btn-default to-list">
                            <span class="fa fa-navicon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="mix-container">
                            <div class="mix label1">
                    <div class="panel p6 pbn">
                        <div class="of-h">
                            <img src="http://media.web5s.com.vn/sites/666/slider/slideshow1.jpg" class="h-200" title="01">
                            <div class="row table-layout">
                                <div class="col-xs-8 va-m pln">
                                    <h6 class="fs15">01</h6>
                                </div>
                                <div class="col-xs-4 text-right va-m prn">
                                    <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/slide/del/1710.html" title="Xóa" class="verify_action floatR" 
                                            notice="Bạn có chắc chắn muốn xóa slide này ?:<br><b>01</b>"
                                    >
                                            <span class="fa fa-remove fs15 text-danger ml10"></span>
                                    </a>
                                    <a href="http://demothu.web5s.com.vn/admin/slide/edit/1710.html" title="Chỉnh sửa" class="ml5 floatR">
                                        <span class="fa fa-pencil fs15 text-alert"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="mix label1">
                    <div class="panel p6 pbn">
                        <div class="of-h">
                            <img src="http://media.web5s.com.vn/sites/666/slider/slideshow2.jpg" class="h-200" title="02">
                            <div class="row table-layout">
                                <div class="col-xs-8 va-m pln">
                                    <h6 class="fs15">02</h6>
                                </div>
                                <div class="col-xs-4 text-right va-m prn">
                                    <a href="javascript:void(0)" _url="http://demothu.web5s.com.vn/admin/slide/del/1711.html" title="Xóa" class="verify_action floatR" 
                                            notice="Bạn có chắc chắn muốn xóa slide này ?:<br><b>02</b>"
                                    >
                                            <span class="fa fa-remove fs15 text-danger ml10"></span>
                                    </a>
                                    <a href="http://demothu.web5s.com.vn/admin/slide/edit/1711.html" title="Chỉnh sửa" class="ml5 floatR">
                                        <span class="fa fa-pencil fs15 text-alert"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="gap"></div>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
    </div>
</section>

<!-- Plugin CSS -->
<link rel="stylesheet" type="text/css" href="public/admin/ipanel/vendor/plugins/magnific/magnific-popup.css" />

<!-- Admin Forms CSS -->
<link rel="stylesheet" type="text/css" href="public/admin/ipanel/assets/admin-tools/admin-plugins/admin-modal/adminmodal.css" />

<!-- Mixitup Plugin (CDN) -->
<script src="file/jquery.mixitup.min.js"></script>

<!-- Page Plugins -->
<script type="text/javascript" src="public/admin/ipanel/vendor/plugins/magnific/jquery.magnific-popup.js"></script>

<script type="text/javascript">
jQuery(document).ready(function() {

   var dropdownFilter = {

       // Declare any variables we will need as properties of the object
       $filters: null,
       $reset: null,
       groups: [],
       outputArray: [],
       outputString: '',

       // The "init" method will run on document ready and cache any jQuery objects we will need.
       init: function() {
           var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "dropdownFilter" object so that we can share methods and properties between all parts of the object.

           self.$filters = $('#select-filters');
           self.$reset = $('#mix-reset');
           self.$container = $('#mix-container');

           self.$filters.find('fieldset').each(function() {
               self.groups.push({
                   $dropdown: $(this).find('select'),
                   active: ''
               });
           });

           self.bindHandlers();
       },

       // The "bindHandlers" method will listen for whenever a select is changed. 
       bindHandlers: function() {
           var self = this;

           // Handle select change    
           self.$filters.on('change', 'select', function(e) {
               e.preventDefault();

               self.parseFilters();
           });

           // Handle reset click
           self.$reset.on('click', function(e) {
               e.preventDefault();

               self.$filters.find('select').val('');

               self.parseFilters();
           });
       },

       // The parseFilters method pulls the value of each active select option
       parseFilters: function() {
           var self = this;

           // loop through each filter group and grap the value from each one.
           for (var i = 0, group; group = self.groups[i]; i++) {
               group.active = group.$dropdown.val();
           }

           self.concatenate();
       },

       // The "concatenate" method will crawl through each group, concatenating filters as desired:
       concatenate: function() {
           var self = this;

           self.outputString = ''; // Reset output string

           for (var i = 0, group; group = self.groups[i]; i++) {
               self.outputString += group.active;
           }

           // If the output string is empty, show all rather than none:
           !self.outputString.length && (self.outputString = 'all');

           //console.log(self.outputString); 
           // ^ we can check the console here to take a look at the filter string that is produced

           // Send the output string to MixItUp via the 'filter' method:
           if (self.$container.mixItUp('isLoaded')) {
               self.$container.mixItUp('filter', self.outputString);
           }
       }
   };


   // To keep our code clean and modular, all custom functionality will be contained inside a single object literal called "checkboxFilter".
   var checkboxFilter = {

       // Declare any variables we will need as properties of the object
       $filters: null,
       $reset: null,
       groups: [],
       outputArray: [],
       outputString: '',

       // The "init" method will run on document ready and cache any jQuery objects we will need.
       init: function() {
           var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "checkboxFilter" object so that we can share methods and properties between all parts of the object.

           self.$filters = $('#checkbox-filters');
           self.$reset = $('#mix-reset2');
           self.$container = $('#mix-container');

           self.$filters.find('fieldset').each(function() {
               self.groups.push({
                   $inputs: $(this).find('input'),
                   active: [],
                   tracker: false
               });
           });

           self.bindHandlers();
       },

       // The "bindHandlers" method will listen for whenever a form value changes. 
       bindHandlers: function() {
           var self = this;

           self.$filters.on('change', function() {
               self.parseFilters();
           });

           self.$reset.on('click', function(e) {
               e.preventDefault();
               self.$filters[0].reset();
               self.parseFilters();
           });
       },

       // The parseFilters method checks which filters are active in each group:
       parseFilters: function() {
           var self = this;

           // loop through each filter group and add active filters to arrays
           for (var i = 0, group; group = self.groups[i]; i++) {
               group.active = []; // reset arrays
               group.$inputs.each(function() {
                   $(this).is(':checked') && group.active.push(this.value);
               });
               group.active.length && (group.tracker = 0);
           }

           self.concatenate();
       },

       // The "concatenate" method will crawl through each group, concatenating filters as desired:
       concatenate: function() {
           var self = this,
               cache = '',
               crawled = false,
               checkTrackers = function() {
                   var done = 0;

                   for (var i = 0, group; group = self.groups[i]; i++) {
                       (group.tracker === false) && done++;
                   }

                   return (done < self.groups.length);
               },
               crawl = function() {
                   for (var i = 0, group; group = self.groups[i]; i++) {
                       group.active[group.tracker] && (cache += group.active[group.tracker]);

                       if (i === self.groups.length - 1) {
                           self.outputArray.push(cache);
                           cache = '';
                           updateTrackers();
                       }
                   }
               },
               updateTrackers = function() {
                   for (var i = self.groups.length - 1; i > -1; i--) {
                       var group = self.groups[i];

                       if (group.active[group.tracker + 1]) {
                           group.tracker++;
                           break;
                       } else if (i > 0) {
                           group.tracker && (group.tracker = 0);
                       } else {
                           crawled = true;
                       }
                   }
               };

           self.outputArray = []; // reset output array

           do {
               crawl();
           }
           while (!crawled && checkTrackers());

           self.outputString = self.outputArray.join();

           // If the output string is empty, show all rather than none:
           !self.outputString.length && (self.outputString = 'all');

           //console.log(self.outputString); 
           // ^ we can check the console here to take a look at the filter string that is produced

           // Send the output string to MixItUp via the 'filter' method:
           if (self.$container.mixItUp('isLoaded')) {
               self.$container.mixItUp('filter', self.outputString);
           }
       }
   };

   // Init multiselect plugin on filter dropdowns
   $('#filter1').multiselect({
       buttonClass: 'btn btn-default',
   });
   $('#filter2').multiselect({
       buttonClass: 'btn btn-default',
   });

   // Init checkboxFilter code
   checkboxFilter.init();

   // Init dropdownFilter code
   dropdownFilter.init();

   var $container = $('#mix-container'), // mixitup container
       $toList = $('.to-list'), // list view button
       $toGrid = $('.to-grid'); // list view button

   // Instantiate MixItUp
   $container.mixItUp({
       controls: {
           enable: false // we won't be needing these
       },
       animation: {
           duration: 400,
           effects: 'fade translateZ(-360px) stagger(45ms)',
           easing: 'ease'
       },
       callbacks: {
           onMixFail: function() {}
       }
   });

   $toList.on('click', function() {
       if ($container.hasClass('list')) {
           return
       }
       $container.mixItUp('changeLayout', {
           display: 'block',
           containerClass: 'list'
       }, function(state) {
           // callback function
       });
   });
   $toGrid.on('click', function() {
       if ($container.hasClass('grid')) {
           return
       }
       $container.mixItUp('changeLayout', {
           display: 'inline-block',
           containerClass: 'grid'
       }, function(state) {
           // callback function
       });
   });

   // Add Gallery Item to Lightbox
   $('.mix img').magnificPopup({
     type: 'image',
     callbacks: {
       beforeOpen: function(e) {
           // we add a class to body to indicate overlay is active
           // We can use this to alter any elements such as form popups
           // that need a higher z-index to properly display in overlays
           $('body').addClass('mfp-bg-open');

           // Set Magnific Animation
           this.st.mainClass = 'mfp-zoomIn';

           // Inform content container there is an animation
           this.contentContainer.addClass('mfp-with-anim');
       },
       afterClose: function(e) {
           $('body').removeClass('mfp-bg-open');
       },
       elementParse: function(item) {
         // Function will fire for each target element
         // "item.el" is a target DOM element (if present)
         // "item.src" is a source that you may modify
         item.src = item.el.attr('src');
       },
     },
     removalDelay: 200, //delay removal by X to allow out-animation
   });


});
</script>
<!-- END: PAGE SCRIPTS -->

                <!-- Modal -->
                <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal_click_content"></div>
                    </div>
                </div>