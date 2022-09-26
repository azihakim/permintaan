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

    <title>SIPEDAL - Sistem Pelayanan Data Online Stasiun Klimatologi Palembang</title>

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
        <aside id="sidebar-main" class="sidebar">
            <div class="sidebar-logo">
                <a href="{{ url('dashboard') }}">
                    <img src="../../style/images/gallery/logo/BMKG-80x80.png" alt="" id="logo-big" />
                    &nbsp;
                         <h3>&nbsp;<strong>SIPEDAL</strong></h3>
                    <h6>&nbsp;Stasiun Klimatologi<br>&nbsp;Palembang</h6>
                </a>
            </div><!-- End .sidebar-logo -->

            <!-- ********** -->
            <!-- NEW MODULE -->
            <!-- ********** -->

            <div class="sidebar-line">
                <!-- A seperator line -->
            </div>

            <div class="tab-content">
                <div id="sidebar-tab-1" class="tab-pane active clearfix">

                    <!-- ********** -->
                    <!-- NEW MODULE -->
                    <!-- ********** -->

                    
                    <div class="sidebar-module">
                        <nav class="sidebar-nav-v1">
                            <ul>
                                <li class="@yield('dashboard')">
                                    <a href="{{ url('dashboard') }}">Dashboard<i class="fa fa-dashboard"></i></a>
                                </li>
                                <li class="@yield('formulir')">
                                    <a href="{{ url('formulir') }}">Formulir Permintaan<i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                                <li class="@yield('akun')">
                                    <a href="{{ url('akun') }}">Akun<i class="fa fa-user"></i> </a>
                                </li>
                                <li>
                                    <a href="#">Keluar<i class="fa fa-sign-out"></i> </a>
                                </li>
                                <li class="seperator"></li> <!-- A seperator line -->
                                <li>
                                    <strong>Hotline:</strong>
                                    <br> 0811-78-96223
                                    <br>
                                    <strong>Jadwal Pelayanan:</strong>
                                    <br>Senin - Jumat
                                    <br>08.00 - 15.00
                                </li>
                            </ul>
                        </nav><!-- End .sidebar-nav-v1 -->
                    </div><!-- End .sidebar-module -->
                </div>
            </div><!-- End .tab-content -->

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
                            <h4>SIPEDAL</h4>
                            <h5>Stasiun Klimatologi Palembang</h5>
                        </a>
                    </div>
                    <div class="pull-right">

                        <!-- * This is the trigger that will show/hide the menu * -->
                        <!-- * if the layout is in responsive mode              * -->

                        <a href="#" id="responsive-menu-trigger">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="header-main-bottom clearfix">
                    <div class="pull-left">
                        <ul class="breadcrumb">
                            <li class="active">@yield('menu-title')</li>
                        </ul><!-- End .breadcrumb -->
                    </div>
                </div><!-- End #header-main-bottom -->
            </header><!-- End #header-main -->

            <div id="content" class="clearfix">
                <div class="window">
                    <section class="content">
                        @yield('content') {{-- content --}}

                    </section>
                </div><!-- End .content -->

                <footer id="footer-main" class="footer-sticky">
                    <div class="footer-main-inner">
                        <div class="pull-left">
                            <p>Copyright © 2013 CreativeMilk</p>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn totop">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div><!-- End .footer-main-inner -->
                </footer><!-- End #footer-main -->
            </div><!-- End #content -->
        </div><!-- End #main -->
    </div><!-- End #container -->
</body>

</html>
