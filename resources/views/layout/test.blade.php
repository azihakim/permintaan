<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8 no-js">      <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9 no-js">           <![endif]-->
<!--[if gt IE 9]>  <html class="no-js">                       <![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Karma - Responsive minimalistic bootstrapped admin theme.</title>

    <!-- // IOS webapp icons // -->

    <meta name="apple-mobile-web-app-title" content="Karma Webapp">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/mobile/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/mobile/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/mobile/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/mobile/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/mobile/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/mobile/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" href="images/mobile/apple-touch-icon.png" />
    <link rel="shortcut icon" href="images/favicons/favicon.ico" />

    <!-- // IOS webapp splash screens // -->

    <link rel="apple-touch-startup-image"
        media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"
        href="/images/mobile/apple-touch-startup-image-1536x2008.png" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)"
        href="/images/mobile/apple-touch-startup-image-1496x2048.png" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)"
        href="/images/mobile/apple-touch-startup-image-768x1004.png" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)"
        href="/images/mobile/apple-touch-startup-image-748x1024.png" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"
        href="/images/mobile/apple-touch-startup-image-640x1096.png" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"
        href="/images/mobile/apple-touch-startup-image-640x920.png" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)"
        href="/images/mobile/apple-touch-startup-image-320x460.png" />

    <!-- // Windows 8 tile // -->

    <meta name="application-name" content="Karma Webapp">
    <meta name="msapplication-TileColor" content="#333333" />
    <meta name="msapplication-TileImage" content="images/mobile/windows8-icon.png" />

    <!-- // Handheld devices misc // -->

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- // Stylesheets // -->

    <link rel="stylesheet" href="{{ asset('style/bootstrap/core/dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/bootstrap/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/bootstrap/datepicker/css/datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/bootstrap/fileupload/bootstrap-fileupload.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/bootstrap/typeahead/typeahead.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/bootstrap/colorpicker/css/colorpicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/bootstrap/timepicker/css/bootstrap-timepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/fontawesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap-custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap-extended.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/helpers.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/mediaqueries.css') }}" />

    <!-- // Helpers // -->

    <script src="{{ asset('style/js/plugins/modernizr.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/mobiledevices.js') }}"></script>

    <!-- // jQuery core // -->

    <script src="{{ asset('style/js/libs/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('style/js/libs/jquery-ui-1.10.4.min.js') }}"></script>

    <!-- // Bootstrap // -->

    <script src="{{ asset('style/bootstrap/core/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/select2/select2.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/bootboxjs/bootboxjs.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/holder/holder.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/typeahead/typeahead.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/fileupload/bootstrap-fileupload.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/inputmask/bootstrap-inputmask.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/timepicker/js/bootstrap-timepicker.min.js') }}"></script>

    <!-- // Custom/premium plugins // -->

    <script src="{{ asset('style/js/plugins/responsivetables.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/responsivehelper.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/mainmenu.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/easyfiletree.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/autosaveforms.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/chainedinputs.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/checkboxtoggle.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/bootstraptabsextend.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/lockscreen.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/autoexpand.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/notify.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/nanogress.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/powerwizard.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/simpleselect.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/tinycontextmenu.1.0.min.js') }}"></script>

    <!-- // Third-party plugins // -->

    <script src="{{ asset('style/js/plugins/tinyscrollbar.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/jquery.knob.js') }}"></script>
    <script src="{{ asset('style/js/plugins/prism.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/h5f.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/gmap3.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/jquery.tablesorter.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/jquery.tablesorter.widgets.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/jquery.tablesorter.pager.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('style/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('style/js/plugins/hogan-2.0.0.js') }}"></script>
    <script src="{{ asset('style/js/plugins/jquery.nouislider.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/jquery.autosize-min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/jquery.pwstrength.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/jquery.vticker.min.js') }}"></script>
    <script src="{{ asset('style/js/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('style/js/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('style/js/flot/excanvas.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/layout.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/json2.js') }}"></script>

    <!-- // Custom //-->

    <script src="{{ asset('style/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('style/js/plugins/demo.js') }}"></script>
    <script src="{{ asset('style/js/plugins/main.js') }}"></script>

</head>

<body>
    <div id="container" class="clearfix">

        <!-- ********************************************
         * SIDEBAR MAIN:                            *
         *                                          *
         * the part which contains the main         *
         * navigation, logo, search and more...     *
         ******************************************** -->

        <aside id="sidebar-main" class="sidebar">

            <div class="sidebar-logo">
                <a href="index.html" id="logo-big">
                    <h1>karma</h1>
                    <h2>/webapp</h2>
                </a>
            </div><!-- End .sidebar-logo -->
            <div class="tab-content">
                <div id="sidebar-tab-1" class="tab-pane active clearfix">

                    <!-- ********** -->
                    <!-- NEW MODULE -->
                    <!-- ********** -->

                    <div class="sidebar-module">
                        <nav class="sidebar-nav-v2">
                            <ul>
                                <li>
                                    <a href="index.html"><i class="fa fa-dashboard"></i> Dashboard <span
                                            class="indicator-pill">32</span></a>
                                </li>
                                <li>
                                    <a href="statistics.html"><i class="fa fa-sun-o"></i> Statistics<span
                                            class="indicator-dot">2</span></a>
                                </li>
                                <li class="page-arrow active-page">
                                    <a href="charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a>
                                </li>
                                <li>
                                    <a href="calendar.html"><i class="fa fa-calendar-o"></i> Calendar</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope-o"></i> Form Elements <i
                                            class="fa fa-caret-left pull-right"></i></a>

                                    <!-- * sub menu * -->
                                    <ul>
                                        <li>
                                            <a href="forms.html">Forms</a>
                                        </li>
                                        <li>
                                            <a href="forgot.html">Forgot Form</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login Form</a>
                                        </li>
                                        <li>
                                            <a href="login2.html">Login 2 Form</a>
                                        </li>
                                        <li>
                                            <a href="reset.html">Reset Form</a>
                                        </li>
                                        <li>
                                            <a href="signup.html">Signup Form</a>
                                        </li>
                                        <li>
                                            <a href="wizard.html">Wizard</a>
                                        </li>
                                        <li>
                                            <a href="wysiwyg.html">WYSIWYG</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-file-o"></i> Pages <i
                                            class="fa fa-caret-left pull-right"></i></a>

                                    <!-- * sub menu * -->
                                    <ul>
                                        <li>
                                            <a href="#">Billing</a>
                                        </li>
                                        <li>
                                            <a href="comments.html">Comments</a>
                                        </li>
                                        <li>
                                            <a href="clients.html">Clients</a>
                                        </li>
                                        <li>
                                            <a href="faqs.html">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="files.html">Files</a>
                                        </li>
                                        <li>
                                            <a href="planning.html">Planning</a>
                                        </li>
                                        <li>
                                            <a href="#">Social</a>
                                        </li>
                                        <li>
                                            <a href="ticketsupport.html">Ticket Support</a>
                                        </li>
                                        <li>
                                            <a href="timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="wiki.html">Wiki</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-star-o"></i> UI Elements<i
                                            class="fa fa-caret-left pull-right"></i></a>

                                    <!-- * sub menu * -->
                                    <ul>
                                        <li>
                                            <a href="buttonsandicons.html">Buttons &amp; Icons</a>
                                        </li>
                                        <li>
                                            <a href="notifications.html">Notifications</a>
                                        </li>
                                        <li>
                                            <a href="dropdownmenu.html">Dropdown &amp; Menu</a>
                                        </li>
                                        <li>
                                            <a href="misc.html">Misc</a>
                                        </li>
                                        <li>
                                            <a href="tabs.html">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="toolbars.html">Toolbars</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="media.html"><i class="fa fa-picture-o"></i> Media</a>
                                </li>
                                <li>
                                    <a href="modules.html"><i class="fa fa-wrench"></i> Modules</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-bars"></i> Menu Levels<i
                                            class="fa fa-caret-left pull-right"></i></a>

                                    <!-- * sub menu * -->
                                    <ul>
                                        <li>
                                            <a href="#">Sub level 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Sub level 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Sub level 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Sub level 1<i
                                                    class="fa fa-caret-left pull-right"></i></a>

                                            <!-- * sub sub menu * -->
                                            <ul>
                                                <li>
                                                    <a href="#">Sub level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#">Sub level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#">Sub level 2</a>
                                                </li>
                                                <li>
                                                    <a href="#">Sub level 2</a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="#">Sub level 1</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="tables.html"><i class="fa fa-table"></i> Tables</a>
                                </li>
                                <li>
                                    <a href="pagelayout.html"><i class="fa fa-th"></i> Page Layout</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-warning"></i> Error Pages <i
                                            class="fa fa-caret-left pull-right"></i></a>

                                    <!-- * sub menu * -->
                                    <ul>
                                        <li>
                                            <a href="400.html">400</a>
                                        </li>
                                        <li>
                                            <a href="401.html">401</a>
                                        </li>
                                        <li>
                                            <a href="403.html">403</a>
                                        </li>
                                        <li>
                                            <a href="404.html">404</a>
                                        </li>
                                        <li>
                                            <a href="500.html">500</a>
                                        </li>
                                        <li>
                                            <a href="503.html">503</a>
                                        </li>
                                    </ul>

                                </li>
                                <li>
                                    <a href="maps.html"><i class="fa fa-map-marker"></i> Maps</a>
                                </li>
                                <li>
                                    <a href="widgets.html"><i class="fa fa-columns"></i> Widgets</a>
                                </li>
                                <li>
                                    <a href="sitemap.html"><i class="fa fa-sitemap"></i> Sitemap</a>
                                </li>
                            </ul>
                        </nav><!-- End .sidebar-nav-v1 -->
                    </div><!-- End .sidebar-module -->
                </div>
                <div id="sidebar-tab-2" class="tab-pane clearfix">

                    <!-- ********** -->
                    <!-- NEW MODULE -->
                    <!-- ********** -->

                    <div class="sidebar-module">
                        <div class="circular-stats">
                            <div class="circular-stats-inner">
                                <div class="circular-stats-data">
                                    <strong>2779</strong>
                                    <span>+ 31%</span>
                                </div>
                                <input class="knob" data-width="100" data-cursor="false" data-fgColor="#222222"
                                    data-bgColor="#555555" data-thickness=".20" value="31" data-readOnly="true"
                                    data-angleOffset="-0" data-displayInput="false">
                            </div>
                        </div><!-- End .circular-stats -->
                        <div class="circular-stats-infobox">
                            <strong>This day</strong>
                            <span>Lorem ipsum</span>
                            <a href="#" class="btn btn-default">View</a>
                        </div><!-- End .circular-stats-infobox -->
                        <div class="spacer-20"></div>
                        <div class="circular-stats">
                            <div class="circular-stats-inner">
                                <div class="circular-stats-data">
                                    <strong>12899</strong>
                                    <span>+ 77%</span>
                                </div>
                                <input class="knob" data-width="100" data-cursor="false" data-fgColor="#222222"
                                    data-bgColor="#555555" data-thickness=".20" value="77" data-readOnly="true"
                                    data-angleOffset="-0" data-displayInput="false">
                            </div>
                        </div><!-- End .circular-stats -->
                        <div class="circular-stats-infobox">
                            <strong>This month</strong>
                            <span>Lorem ipsum</span>
                            <a href="#" class="btn btn-default">View</a>
                        </div><!-- End .circular-stats-infobox -->
                        <div class="spacer-20"></div>
                        <div class="circular-stats">
                            <div class="circular-stats-inner">
                                <div class="circular-stats-data">
                                    <strong>82229</strong>
                                    <span>+ 89%</span>
                                </div>
                                <input class="knob" data-width="100" data-cursor="false" data-fgColor="#222222"
                                    data-bgColor="#555555" data-thickness=".20" value="89" data-readOnly="true"
                                    data-angleOffset="-0" data-displayInput="false">
                            </div>
                        </div><!-- End .circular-stats -->
                        <div class="circular-stats-infobox">
                            <strong>This year</strong>
                            <span>Lorem ipsum</span>
                            <a href="#" class="btn btn-default">View</a>
                        </div><!-- End .circular-stats-infobox -->
                    </div><!-- End .sidebar-module -->
                </div>
            </div><!-- End .tab-content -->

            <div class="sidebar-line">
                <!-- A seperator line -->
            </div>

            <!-- * Tabs can be removed, if so dont forget * -->
            <!-- * to remove the .tab-pane divs(wrapper). * -->

            <ul class="ext-tabs-sidebar">
                <li class="active">
                    <a href="#sidebar-tab-3"><i class="fa fa-bar-chart-o"></i> Stats 2</a>
                </li>
                <li>
                    <a href="#sidebar-tab-4"><i class="fa fa-bar-chart-o"></i> Stats 3</a>
                </li>
            </ul><!-- End .ext-tabs-sidebar -->
            <div class="tab-content">
                <div id="sidebar-tab-3" class="tab-pane active clearfix">

                    <!-- ********** -->
                    <!-- NEW MODULE -->
                    <!-- ********** -->

                    <div class="sidebar-module">
                        <div class="circular-stats-duo-row">
                            <div class="circular-stats radius-40">
                                <div class="circular-stats-inner">
                                    <div class="circular-stats-data">
                                        <strong>99</strong>
                                        <span>- 14%</span>
                                    </div>
                                    <input class="knob" data-width="80" data-cursor="false" data-fgColor="#222222"
                                        data-bgColor="#555555" data-thickness=".20" value="14"
                                        data-readOnly="true" data-angleOffset="-0" data-displayInput="false">
                                </div>
                                <div class="circular-stats-title">Day</div>
                            </div><!-- End .circular-stats -->
                            <div class="circular-stats radius-40">
                                <div class="circular-stats-inner">
                                    <div class="circular-stats-data">
                                        <strong>1129</strong>
                                        <span>+ 25%</span>
                                    </div>
                                    <input class="knob" data-width="80" data-cursor="false" data-fgColor="#222222"
                                        data-bgColor="#555555" data-thickness=".20" value="45"
                                        data-readOnly="true" data-angleOffset="-0" data-displayInput="false">
                                </div>
                                <div class="circular-stats-title">Week</div>
                            </div><!-- End .circular-stats -->
                        </div><!-- End .circular-stats-duo-row -->
                        <div class="spacer-20"></div>
                        <div class="circular-stats-duo-row">
                            <div class="circular-stats radius-40">
                                <div class="circular-stats-inner">
                                    <div class="circular-stats-data">
                                        <strong>9103</strong>
                                        <span>+ 67%</span>
                                    </div>
                                    <input class="knob" data-width="80" data-cursor="false" data-fgColor="#222222"
                                        data-bgColor="#555555" data-thickness=".20" value="67"
                                        data-readOnly="true" data-angleOffset="-0" data-displayInput="false">
                                </div>
                                <div class="circular-stats-title">Month</div>
                            </div><!-- End .circular-stats -->
                            <div class="circular-stats radius-40">
                                <div class="circular-stats-inner">
                                    <div class="circular-stats-data">
                                        <strong>21129</strong>
                                        <span>- 88%</span>
                                    </div>
                                    <input class="knob" data-width="80" data-cursor="false" data-fgColor="#222222"
                                        data-bgColor="#555555" data-thickness=".20" value="88"
                                        data-readOnly="true" data-angleOffset="-0" data-displayInput="false">
                                </div>
                                <div class="circular-stats-title">Year</div>
                            </div><!-- End .circular-stats -->
                        </div><!-- End .circular-stats-duo-row -->
                    </div><!-- End .sidebar-module -->
                </div>
                <div id="sidebar-tab-4" class="tab-pane clearfix">

                    <!-- ********** -->
                    <!-- NEW MODULE -->
                    <!-- ********** -->

                    <div class="sidebar-module">
                        <div class="user-progressbar">
                            <img src="images/users/user-6.jpg" alt="" />
                            <div class="bar" style="width:88%">
                                <span>88%</span>
                            </div>
                        </div><!-- End .user-progressbar -->
                        <div class="spacer-10"></div>
                        <div class="user-progressbar">
                            <img src="images/users/user-7.jpg" alt="" />
                            <div class="bar" style="width:33%">
                                <span>33%</span>
                            </div>
                        </div><!-- End .user-progressbar -->
                        <div class="spacer-10"></div>
                        <div class="user-progressbar">
                            <img src="images/users/user-8.jpg" alt="" />
                            <div class="bar" style="width:21%">
                                <span>21%</span>
                            </div>
                        </div><!-- End .user-progressbar -->
                        <div class="spacer-10"></div>
                        <div class="user-progressbar">
                            <img src="images/users/user-9.jpg" alt="" />
                            <div class="bar" style="width:65%">
                                <span>65%</span>
                            </div>
                        </div><!-- End .user-progressbar -->
                        <div class="spacer-10"></div>
                        <div class="user-progressbar">
                            <img src="images/users/user-10.jpg" alt="" />
                            <div class="bar" style="width:24%">
                                <span>24%</span>
                            </div>
                        </div><!-- End .user-progressbar -->
                    </div><!-- End .sidebar-module -->
                </div>
            </div><!-- End .tab-content -->

            <div class="sidebar-line">
                <!-- A seperator line -->
            </div>

        </aside><!-- End aside -->

        <div id="main" class="clearfix">

            <!-- ********************************************
             * MAIN HEADER:                             *
             *                                          *
             * the part which contains the breadcrumbs, *
             * dropdown menus, toggle sidebar button    *
             ******************************************** -->

            <header id="header-main">
                <div class="header-main-top">
                    <div class="pull-left">

                        <!-- * This is the responsive logo * -->

                        <a href="index.html" id="logo-small">
                            <h4>karma</h4>
                            <h5>/webapp</h5>
                        </a>
                    </div>
                    <div class="pull-right">

                        <!-- * This is the trigger that will show/hide the menu * -->
                        <!-- * if the layout is in responsive mode              * -->

                        <a href="#" id="responsive-menu-trigger">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- End #header-main-top -->
                <div class="header-main-bottom">
                    <div class="pull-left">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Library</a></li>
                            <li class="active">Data</li>
                        </ul><!-- End .breadcrumb -->
                    </div>
                    <div class="pull-right">
                        <p>Version 1.0.0</p>
                    </div>
                </div><!-- End #header-main-bottom -->
            </header><!-- End #header-main -->

            <div id="content" class="clearfix">

                <!-- ********************************************
                 * HEADER SEC:                              *
                 *                                          *
                 * the part which contains the page title,  *
                 * buttons and dropdowns.                   *
                 ******************************************** -->

                <header id="header-sec">
                    <div class="row ext-raster">
                        <div class="col-sm-8">
                            <div class="inner-padding">
                                <h2>Charts</h2>
                            </div><!-- End .inner-padding -->
                        </div>
                        <span class="breakpoint-sm ext-raster-line-8"></span>
                        <div class="col-sm-4">
                            <div class="inner-padding">
                                <form>
                                    <select class="form-control shortcut-menu">
                                        <option value="0">Shortcut Menu(works)</option>
                                        <option value="index.html">Dashboard</option>
                                        <option value="statistics.html">Statistics</option>
                                        <option value="calendar.html">Calendar</option>
                                        <option value="buttonsandicons.html">Buttons &amp; Icons</option>
                                        <option value="widgets.html">Widgets</option>
                                        <option value="forms.html">Forms</option>
                                        <option value="media.html">Media</option>
                                    </select>
                                </form>
                            </div><!-- End .inner-padding -->
                        </div>
                    </div><!-- End .row -->
                </header><!-- End #header-sec -->

                <!-- ********************************************
                     * WINDOW:                                  *
                     *                                          *
                     * the part which contains the main content *
                     ******************************************** -->

                <div class="window">
                    <div class="actionbar">
                        <div class="pull-left">
                            <a href="#" class="btn small-toggle-btn" data-toggle-sidebar="left"></a>
                            <p> Lorem ipsum dolor nec.</p>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn">
                                <i class="fa fa-star"></i>
                            </a>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul role="menu" class="dropdown-menu pull-center ext-dropdown-icons-vertical">
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </li>
                                    <li class="disabled">
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-file"></i></a>
                                    </li>
                                </ul>
                            </div><!-- End .dropdown -->
                            <a class="btn" href="#" id="lockscreen-button-trigger">
                                <i class="fa fa-lock"></i>
                            </a>
                        </div>
                    </div><!-- End .actionbar-->
                    <div class="inner-padding">
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <i class="fa fa-warning"></i>Just a couple of chart examples(there are many more charts
                            available) and yes you can change the colors!
                        </div>
                        <div class="subheading">
                            <h3>Bar charts</h3>
                        </div>
                        <div id="chart-bars-1" style="width:100%; height:240px"></div>
                        <div class="spacer-20"></div>
                        <div class="subheading">
                            <h3>Mixed charts</h3>
                        </div>
                        <div id="chart-mixed-1" style="width:100%; height:240px"></div>
                        <div class="spacer-20"></div>
                        <div class="subheading">
                            <h3>Realtime charts</h3>
                        </div>
                        <div id="chart-rt-1" style="width:100%; height:240px"></div>
                    </div><!-- End .inner-padding -->
                    <div class="spacer-30"></div>
                </div><!-- End .window -->

                <!-- ********************************************
                     * FOOTER MAIN:                             *
                     *                                          *
                     * the part which contains things like      *
                     * chat, buttons, copyright and             *
                     * dropup menu(s).                          *
                     ******************************************** -->

                <footer id="footer-main" class="footer-sticky">
                    <div class="footer-main-inner">
                        <div class="pull-left">
                            <p>Copyright © 2013 CreativeMilk</p>
                        </div>
                        <div class="pull-right">
                            <div class="dropup">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    Menu
                                    <i class="fa fa-caret-up"></i>
                                </a>
                                <ul role="menu" class="dropdown-menu ext-dropdown-icons-right">
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i> Comments</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-rss"></i> RSS Feed</a>
                                    </li>
                                    <li class="disabled">
                                        <a href="#"><i class="fa fa-link"></i> Disabled link</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-file"></i> Upload files</a>
                                    </li>
                                </ul>
                            </div><!-- End .dropup -->
                            <div class="dropup" id="ext-dropdown-chat">
                                <a class="btn dropdown-toggle ext-dropdown-chat-btn" data-toggle="dropdown"
                                    href="#">
                                    <span class="online-dot"></span>
                                    Steven Watson
                                    <i class="fa fa-comments chat-blink-icon"></i>
                                </a>
                                <div class="ext-dropdown-chat dropdown-menu pull-right">
                                    <div class="ext-dropdown-chat-inner">
                                        <div class="ext-dropdown-header">
                                            <i class="fa fa-comments"></i>
                                            <h5>Live chat</h5>
                                            <a href="#"
                                                class="btn btn-default btn-sm ext-dropdown-chat-info-toggle">
                                                <i class="fa fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="ext-dropdown-chat-window scrollbar-y">
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="seperator"><span>11/15/12</span></div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-5.jpg" alt="" />
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Martin:</strong>
                                                    <span>17:23</span>
                                                    <p>He, is anybody there...</p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="seperator"><span>11/17/12</span></div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-1.jpg" alt="" />
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Steven:</strong>
                                                    <span>14:24</span>
                                                    <p>It's going to be a long post, so I will split it into 2 parts...
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-1.jpg" alt="" />
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Steven:</strong>
                                                    <span>13:44</span>
                                                    <p>How long must the blog post be....</p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-5.jpg" alt="" />
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Martin:</strong>
                                                    <span>13:31</span>
                                                    <p>Great, I will wait, dont forget to add some photo's <a
                                                            href="#">here</a>...</p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-1.jpg" alt="" />
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Steven:</strong>
                                                    <span>13:28</span>
                                                    <p>Sure no problem, I am typing the blog as we speak...</p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-5.jpg" alt="" />
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Martin:</strong>
                                                    <span>13:23</span>
                                                    <p>He, can you write a new blog post, I want update the blog...</p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-1.jpg" alt="" />
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Steven:</strong>
                                                    <span>13:28</span>
                                                    <p>Sure no problem, I am typing the blog as we speak...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ext-dropdown-chat-editor">
                                            <textarea name="" class="form-control" placeholder="Type your message here..."></textarea>
                                        </div>
                                        <div class="ext-dropdown-chat-info">
                                            <h5>Welcome to the chat</h5>
                                            <p>
                                                Vivamus nisl lectus, venenatis eu sagittis id, dignissim quis justo.
                                                Etiam viverra vestibulum libero,
                                                vel vulputate risus pulvinar sit amet. Aenean a sollicitudin ante. Nam
                                                nec nisl eu nisl.
                                            </p>
                                            <div class="spacer-15"></div>
                                            <p>
                                                Maecenas in diam tempus velit viverra ultrices non eu urna. Maecenas
                                                nibh ante, consectetur non faucibus at,
                                                suscipit non est. Integer lobortis imperdiet mattis curabitur cursust.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .dropup -->
                            <a href="#" class="btn" id="toggle-footer">
                                <i class="fa fa-chevron-down"></i>
                            </a>
                        </div>
                    </div><!-- End .footer-main-inner -->
                </footer><!-- End #footer-main -->
            </div><!-- End #content -->
        </div><!-- End #main -->
    </div><!-- End #container -->

    <!-- Lockscreen -->
    <div class="lockscreen" id="lockscreen-button">
        <div class="lockscreen-overlay"></div>
        <div class="lockscreen-modal">
            <img src="images/users/user-1.jpg" alt="" class="lockscreen-avatar" />
            <div class="lockscreen-placeholder"></div>
        </div>
    </div>
</body>

</html>
