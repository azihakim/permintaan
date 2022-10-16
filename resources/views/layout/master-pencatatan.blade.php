
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8 no-js">      <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9 no-js">           <![endif]-->
<!--[if gt IE 9]>  <html class="no-js">                       <![endif]-->
<!--[if !IE]><!--> <html class="no-js">                       <!--<![endif]-->
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

    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"
          href="/images/mobile/apple-touch-startup-image-1536x2008.png"/>
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)"
          href="/images/mobile/apple-touch-startup-image-1496x2048.png"/>
 	<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)"
          href="/images/mobile/apple-touch-startup-image-768x1004.png"/>
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)"
          href="/images/mobile/apple-touch-startup-image-748x1024.png"/>
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"
          href="/images/mobile/apple-touch-startup-image-640x1096.png"/>
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"
          href="/images/mobile/apple-touch-startup-image-640x920.png"/>
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)"
          href="/images/mobile/apple-touch-startup-image-320x460.png"/>

    <!-- // Windows 8 tile // -->

    <meta name="application-name" content="Karma Webapp">
    <meta name="msapplication-TileColor" content="#333333" />
	<meta name="msapplication-TileImage" content="images/mobile/windows8-icon.png" />

    <!-- // Handheld devices misc // -->

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- // Stylesheets // -->

    <link rel="stylesheet" href="bootstrap/core/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap/select2/select2.css"/>
    <link rel="stylesheet" href="bootstrap/datepicker/css/datepicker.css"/>
    <link rel="stylesheet" href="bootstrap/fileupload/bootstrap-fileupload.min.css"/>
    <link rel="stylesheet" href="bootstrap/typeahead/typeahead.min.css"/>
    <link rel="stylesheet" href="bootstrap/colorpicker/css/colorpicker.css"/>
    <link rel="stylesheet" href="bootstrap/timepicker/css/bootstrap-timepicker.min.css"/>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-custom.css"/>
    <link rel="stylesheet" href="css/bootstrap-extended.css"/>
    <link rel="stylesheet" href="css/animate.min.css"/>
    <link rel="stylesheet" href="css/helpers.css"/>
    <link rel="stylesheet" href="css/base.css"/>
    <link rel="stylesheet" href="css/dark-theme.css"/>
    <link rel="stylesheet" href="css/mediaqueries.css"/>

    <!-- // Helpers // -->

    <script src="js/plugins/modernizr.min.js"></script>
    <script src="js/plugins/mobiledevices.js"></script>

    <!-- // jQuery core // -->

    <script src="js/libs/jquery-1.11.0.min.js"></script>
    <script src="js/libs/jquery-ui-1.10.4.min.js"></script>

    <!-- // Bootstrap // -->

    <script src="bootstrap/core/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap/select2/select2.min.js"></script>
	<script src="bootstrap/bootboxjs/bootboxjs.min.js"></script>
    <script src="bootstrap/holder/holder.min.js"></script>
    <script src="bootstrap/typeahead/typeahead.min.js"></script>
	<script src="bootstrap/datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="bootstrap/fileupload/bootstrap-fileupload.min.js"></script>
	<script src="bootstrap/inputmask/bootstrap-inputmask.min.js"></script>
    <script src="bootstrap/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="bootstrap/timepicker/js/bootstrap-timepicker.min.js"></script>

    <!-- // Custom/premium plugins // -->

    <script src="js/plugins/responsivetables.1.0.min.js"></script>
    <script src="js/plugins/responsivehelper.1.0.min.js"></script>
    <script src="js/plugins/mainmenu.1.0.min.js"></script>
    <script src="js/plugins/easyfiletree.1.0.min.js"></script>
  	<script src="js/plugins/autosaveforms.1.0.min.js"></script>
    <script src="js/plugins/chainedinputs.1.0.min.js"></script>
	<script src="js/plugins/checkboxtoggle.1.0.min.js"></script>
    <script src="js/plugins/bootstraptabsextend.1.0.min.js"></script>
    <script src="js/plugins/lockscreen.1.0.min.js"></script>
    <script src="js/plugins/autoexpand.1.0.min.js"></script>
    <script src="js/plugins/notify.1.0.min.js"></script>
 	<script src="js/plugins/nanogress.1.0.min.js"></script>
    <script src="js/plugins/powerwizard.1.0.min.js"></script>
    <script src="js/plugins/simpleselect.1.0.min.js"></script>
    <script src="js/plugins/tinycontextmenu.1.0.min.js"></script>

    <!-- // Third-party plugins // -->

    <script src="js/plugins/tinyscrollbar.min.js"></script>
    <script src="js/plugins/jquery.knob.js"></script>
    <script src="js/plugins/prism.min.js"></script>
    <script src="js/plugins/h5f.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/plugins/gmap3.min.js"></script>
    <script src="js/plugins/jquery.tablesorter.min.js"></script>
    <script src="js/plugins/jquery.tablesorter.widgets.min.js"></script>
    <script src="js/plugins/jquery.tablesorter.pager.min.js"></script>
    <script src="js/plugins/fullcalendar.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="js/plugins/hogan-2.0.0.js"></script>
    <script src="js/plugins/jquery.nouislider.min.js"></script>
    <script src="js/plugins/jquery.autosize-min.js"></script>
    <script src="js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins/jquery.pwstrength.min.js"></script>
    <script src="js/plugins/jquery.mixitup.min.js"></script>
    <script src="js/plugins/jquery.vticker.min.js"></script>
    <script src="js/flot/jquery.flot.min.js"></script>
    <script src="js/flot/jquery.flot.resize.min.js"></script>
    <script src="js/flot/excanvas.min.js"></script>
    <script src="js/plugins/layout.min.js"></script>
    <script src="js/plugins/masonry.pkgd.min.js"></script>
    <script src="js/plugins/json2.js"></script>

    <!-- // Custom //-->

    <script src="js/plugins/plugins.js"></script>
    <script src="js/plugins/demo.js"></script>
    <script src="js/plugins/main.js"></script>

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
            	<a href="index.html" id="logo-big"><h1>karma</h1><h2>/webapp</h2></a>
            </div><!-- End .sidebar-logo -->

            <!-- ********** -->
            <!-- NEW MODULE -->
            <!-- ********** -->

            <div class="sidebar-module">
                <div class="sidebar-profile">
                    <img src="images/users/user-1.jpg" alt="" class="avatar"/>
                    <span class="indicator-dot">2</span>
                    <ul class="sidebar-profile-list">
                        <li><h3>Hi, Steven Watson</h3></li>
                        <li><a href="#">Profile</a>  | <a href="#">Mail</a> | <a href="#">Logout</a></li>
                    </ul>
                </div><!-- End .sidebar-profile -->
            </div><!-- End .sidebar-module -->

            <div class="sidebar-line"><!-- A seperator line --></div>

            <!-- * Tabs can be removed, if so dont forget * -->
            <!-- * to remove the .tab-pane divs(wrapper). * -->

            <ul class="ext-tabs-sidebar">
                <li class="active">
                    <a href="#sidebar-tab-1"><i class="fa fa-bars"></i> Navigation</a>
                </li>
                <li>
                    <a href="#sidebar-tab-2"><i class="fa fa-folder"></i> Folders</a>
                </li>
            </ul><!-- End .ext-tabs-sidebar -->
            <div class="tab-content">
                <div id="sidebar-tab-1" class="tab-pane active clearfix">

                    <!-- ********** -->
                    <!-- NEW MODULE -->
                    <!-- ********** -->

                    <div class="sidebar-module">
                        <nav class="sidebar-nav-v2">
                            <ul>
                                <li class="page-arrow active-page">
                                    <a href="index.html"><i class="fa fa-dashboard"></i> Dashboard <span class="indicator-pill">32</span></a>
                                </li>
                                <li>
                                    <a href="statistics.html"><i class="fa fa-sun-o"></i> Statistics<span class="indicator-dot">2</span></a>
                                </li>
                                <li>
                                    <a href="charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a>
                                </li>
                                <li>
                                    <a href="calendar.html"><i class="fa fa-calendar-o"></i> Calendar</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope-o"></i> Form Elements <i class="fa fa-caret-left pull-right"></i></a>

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
                                    <a href="#"><i class="fa fa-file-o"></i> Pages <i class="fa fa-caret-left pull-right"></i></a>

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
                                    <a href="#"><i class="fa fa-star-o"></i> UI Elements<i class="fa fa-caret-left pull-right"></i></a>

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
                                <li class="seperator"><!-- * seperator line * --></li>
                                <li>
                                    <a href="media.html"><i class="fa fa-picture-o"></i> Media</a>
                                </li>
                                <li>
                                    <a href="modules.html"><i class="fa fa-wrench"></i> Modules</a>
                                </li>
                                <li>
                                    <a href="tables.html"><i class="fa fa-table"></i> Tables</a>
                                </li>
                                <li>
                                    <a href="pagelayout.html"><i class="fa fa-th"></i> Page Layout</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-warning"></i> Error Pages <i class="fa fa-caret-left pull-right"></i></a>

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
                            	<li class="menu-label">
                               		<div class="spacer-20"></div>
                                	Some group label
                                    <div class="spacer-10"></div>
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
                        <ul class="easyfiletree">
                            <li class="eft-open"><i class="fa fa-folder-open"></i>Folder 1
                                <ul>
                                    <li><i class="fa fa-file-text"></i>Item 1.1</li>
                                    <li><i class="fa fa-file"></i>Item 1.2</li>
                                    <li><i class="fa fa-link"></i><a href="#">Item 1.3 (link)</a></li>
                                </ul>
                            </li>
                            <li class="eft-open"><i class="fa fa-folder-open"></i>Folder 2
                                <ul>
                                    <li class="eft-open"><i class="fa fa-folder-open"></i>Subfolder 2.1
                                        <ul>
                                            <li><i class="fa fa-file"></i>File 2.1.1</li>
                                            <li><i class="fa fa-picture-o"></i>File 2.1.2</li>
                                        </ul>
                                    </li>
                                    <li><i class="fa fa-file"></i>File 2.2</li>
                                </ul>
                            </li>
                            <li class="eft-closed"><i class="fa fa-folder"></i>Folder 3 (closed)
                                <ul>
                                    <li><i class="fa fa-file"></i>File 3.1</li>
                                </ul>
                            </li>
                            <li><i class="fa fa-link"></i><a href="#">File 4 (link)</a></li>
                            <li><i class="fa fa-file-text"></i>File 5</li>
                            <li><i class="fa fa-file"></i>File 6</li>
                        </ul>
                    </div><!-- End .sidebar-module -->
                </div>
            </div><!-- End .tab-content -->

            <div class="sidebar-line"><!-- A seperator line --></div>

            <div class="sidebar-heading" data-module-toggle="false">
                <h3>
                	Milestones  <small class="text-muted">/module</small>
                    <a href="#" class="pull-right"><i class="fa fa-gear"></i></a>
                </h3>
            </div>

            <!-- ********** -->
            <!-- NEW MODULE -->
            <!-- ********** -->

            <div class="sidebar-module">
                <div class="progress-project">
                    <div class="progress-project-header">
                        <h5>Project Alpha</h5><span>44<span class="text-muted">/55</span></span>
                    </div>
                    <div class="progress bar-small">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="sr-only">90% Complete</span>
                        </div>
                    </div>
                </div><!-- End .progress-project -->
                <div class="spacer-20"></div>
                <div class="progress-project">
                    <div class="progress-project-header">
                        <h5>Project Beta</h5><span>4<span class="text-muted">/10</span></span>
                    </div>
                    <div class="progress bar-small">
                        <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                            <span class="sr-only">20% Complete</span>
                        </div>
                    </div>
                </div><!-- End .progress-project -->
                <div class="spacer-20"></div>
                <div class="progress-project">
                    <div class="progress-project-header">
                        <h5>Project Zeta</h5><span>54<span class="text-muted">/88</span></span>
                    </div>
                    <div class="progress bar-small">
                        <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                            <span class="sr-only">78% Complete</span>
                        </div>
                    </div>
                </div><!-- End .progress-project -->
                <div class="spacer-20"></div>
                <div class="progress-project">
                    <div class="progress-project-header">
                        <h5>Project Tango</h5><span>4<span class="text-muted">/16</span></span>
                    </div>
                    <div class="progress bar-small">
                        <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;">
                            <span class="sr-only">28% Complete</span>
                        </div>
                    </div>
                </div><!-- End .progress-project -->
                <div class="spacer-20"></div>
                <div class="progress-project">
                    <div class="progress-project-header">
                        <h5>Project Charlie</h5><span>50<span class="text-muted">/88</span></span>
                    </div>
                    <div class="progress bar-small">
                        <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                            <span class="sr-only">66% Complete</span>
                        </div>
                    </div>
                </div><!-- End .progress-project -->
            </div><!-- End .sidebar-module -->

            <div class="sidebar-line"><!-- A seperator line --></div>

            <div class="sidebar-heading">
                <h3>
                	Calendar <small class="text-muted">/module</small>
                </h3>
            </div>

            <!-- ********** -->
            <!-- NEW MODULE -->
            <!-- ********** -->

            <div class="sidebar-module">
                <div class="csscalendar-mini">
                    <table>
                        <caption>January 2012</caption>
                        <thead>
                            <tr>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                                <th>Sun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="off"><a href="">26</a></td>
                                <td class="off"><a href="#">27</a></td>
                                <td class="off"><a href="#">28</a></td>
                                <td class="off"><a href="#">29</a></td>
                                <td class="off"><a href="#">30</a></td>
                                <td class="off"><a href="#">31</a></td>
                                <td><a href="#">1</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">2</a></td>
                                <td><a href="#">3</a></td>
                                <td class="cal-app"><a href="#" class="tooltip-top" title="12:05 - Client X">4</a></td>
                                <td><a href="#">5</a></td>
                                <td><a href="#">6</a></td>
                                <td><a href="#">7</a></td>
                                <td><a href="#">8</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">9</a></td>
                                <td><a href="#">10</a></td>
                                <td><a href="#">11</a></td>
                                <td><a href="#">12</a></td>
                                <td><a href="#">13</a></td>
                                <td><a href="#">14</a></td>
                                <td><a href="#">15</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">16</a></td>
                                <td><a href="#">17</a></td>
                                <td><a href="#">18</a></td>
                                <td><a href="#">19</a></td>
                                <td class="cal-app"><a href="#" class="tooltip-top" title="16:15 - Launch website">20</a></td>
                                <td><a href="#">21</a></td>
                                <td><a href="#">22</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">23</a></td>
                                <td><a href="#">24</a></td>
                                <td><a href="#">25</a></td>
                                <td><a href="#">26</a></td>
                                <td><a href="#">27</a></td>
                                <td class="active"><a href="#">28</a></td>
                                <td><a href="#">29</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">30</a></td>
                                <td><a href="#">31</a></td>
                                <td class="off"><a href="#">1</a></td>
                                <td class="off"><a href="#">2</a></td>
                                <td class="off"><a href="#">3</a></td>
                                <td class="off"><a href="#">4</a></td>
                                <td class="off"><a href="#">5</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- End .csscalendar-mini -->
            	<div class="spacer-40"></div>
            	<h3>CSStip <small class="text-muted">/inside heading</small></h3>
                <div class="spacer-40"></div>
				<div class="example-box">
                    <div class="example-box-header">
                        <div class="example-label">CSStip</div>
                    </div>
                    <div class="inner-padding">
                    <span class="csstip bold underline text-center block" title="This is an default csstip">Tooltip default</span>
                    <div class="spacer-10"></div>
                    <span class="csstip tip-danger bold underline text-center block" title="This is an danger csstip">Tooltip danger</span>
                    <div class="spacer-10"></div>
                    <span class="csstip tip-warning bold underline text-center block" title="This is an warning csstip">Tooltip warning</span>
                    <div class="spacer-10"></div>
                    <span class="csstip tip-primary bold underline text-center block" title="This is an primary csstip">Tooltip primary</span>
                    <div class="spacer-50"></div>
                    <span class="csstip tip-warning csstip-visible bold underline text-center block" title="I am always visible">Tooltip always visible</span>
                    </div>
                </div>
            </div><!-- End .sidebar-module -->
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

                    	<a href="index.html" id="logo-small"><h4>karma</h4><h5>/webapp</h5></a>
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
                	<div class="inner-padding">
                        <div class="pull-left">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="pull-right">
                            <div class="dropdown">
                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-comments"></i>
                                    <span class="indicator-dot">3</span>
                                </a>
                                <div role="menu" class="dropdown-menu pull-center ext-dropdown-comments">
                                    <div class="ext-dropdown-header">
                                        <i class="fa fa-comments"></i>
                                        <h5>Comments</h5>
                                        <a href="#" class="btn btn-default btn-sm delete-master"><i class="fa fa-trash-o"></i></a>
                                        <span class="indicator-dot">3</span>
                                    </div>
                                    <div class="ext-dropdown-comments-content">
                                        <div>
                                            <img src="images/users/user-1.jpg" alt="" class="avatar"/>
                                            <a href="#">Karma, a good thing</a>
                                            <ul>
                                                <li><span>Posted by:</span> <a href="#">Steven</a></li>
                                                <li><span>Date:</span> Dec 11, 2012</li>
                                                <li>
                                                    <span>Actions:</span>
                                                    <a href="#">Read</a> -
                                                    <a href="#" class="delete">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <img src="images/users/user-4.jpg" alt="" class="avatar"/>
                                            <a href="#">A simple, fast way to reduce stress</a>
                                            <ul>
                                                <li><span>Posted by:</span> <a href="#">Linda</a></li>
                                                <li><span>Date:</span> Dec 3, 2012</li>
                                                <li>
                                                    <span>Actions:</span>
                                                    <a href="#">Read</a> -
                                                    <a href="#" class="delete">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <img src="images/users/user-6.jpg" alt="" class="avatar"/>
                                            <a href="#">Blog: karma and revenge</a>
                                            <ul>
                                                <li><span>Posted by:</span> <a href="#">Debra Hopper</a></li>
                                                <li><span>Date:</span> Nov 18, 2012</li>
                                                <li>
                                                    <span>Actions:</span>
                                                    <a href="#">Read</a> -
                                                    <a href="#" class="delete">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span>No new comments</span>
                                    </div>
                                    <div class="ext-dropdown-footer">
                                        <p>Updated: 11/12/2012 - 14:12</p>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- End .dropdown -->
                            <div class="btn-group">
                                <a class="btn btn-default" href="#">
                                    <i class="fa fa-star"></i>
                                </a>
                                <a class="btn btn-default" href="#" id="modal-update-trigger">
                                Modal
                                </a>
                                <a class="btn btn-default" href="#">
                                    <i class="fa fa-cog"></i>
                                </a>
                            </div><!-- End .btn-group -->
                            <div class="dropdown">
                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-inbox"></i>
                                    <span class="indicator-dot">3</span>
                                </a>
                                <div role="menu" class="dropdown-menu pull-right ext-dropdown-inbox">
                                    <div class="ext-dropdown-header">
                                        <h5>Inbox</h5>
                                        <a href="#" class="btn btn-default btn-sm delete-master"><i class="fa fa-trash-o"></i></a>
                                        <span class="indicator-dot">3</span>
                                    </div>
                                    <div class="ext-dropdown-inbox-content">
                                        <div>
                                            <a href="#">He did you get my new blog post?</a>
                                            <ul class="nav">
                                                <li><span>Send by:</span> <a href="#">Debra Hopper</a></li>
                                                <li><span>Date:</span> Dec 12, 2012 - 14:03:09</li>
                                                <li>
                                                    <span>Actions:</span>
                                                    <a href="#">Reply</a> -
                                                    <a href="#">Read</a> -
                                                    <a href="#">Spam</a> -
                                                    <a href="#" class="delete">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="#">I really love your karma theme</a>
                                            <ul class="nav">
                                                <li><span>Send by:</span> <a href="#">Nathan Rupertson</a></li>
                                                <li><span>Date:</span> Dec 3, 2012 - 22:44:12</li>
                                                <li>
                                                    <span>Actions:</span>
                                                    <a href="#">Reply</a> -
                                                    <a href="#">Read</a> -
                                                    <a href="#">Spam</a> -
                                                    <a href="#" class="delete">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="#">Feedback of a happy customer</a>
                                            <ul class="nav">
                                                <li><span>Send by:</span> <a href="#">Steven Watson</a></li>
                                                <li><span>Date:</span> Dec 11, 2012 - 10:53:59</li>
                                                <li>
                                                    <span>Actions:</span>
                                                    <a href="#">Reply</a> -
                                                    <a href="#">Read</a> -
                                                    <a href="#">Spam</a> -
                                                    <a href="#" class="delete">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span>No new emails</span>
                                    </div>
                                    <div class="ext-dropdown-footer">
                                        <div class="progress bar-small">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <p>60%</p>
                                        <a href="#" class="btn btn-default btn-sm"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- End .dropdown -->
                         </div>
                    </div><!-- End .inner-padding -->
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
                            <a href="#" id="lockscreen-slider-trigger" class="btn">
                                <i class="fa fa-lock"></i>&nbsp;  Lock screen
                            </a>
                            <div class="dropdown">
                                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                                    <img src="images/icons/flags/shiny/16/United-Kingdom.png" alt=""/>
                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul role="menu" class="dropdown-menu ext-flags">
                                    <li>
                                        <a href="#">English <img src="images/icons/flags/shiny/16/United-Kingdom.png" alt=""/></a>
                                    </li>
                                    <li>
                                        <a href="#">German <img src="images/icons/flags/shiny/16/Germany.png" alt=""/></a>
                                    </li>
                                    <li>
                                        <a href="#">French <img src="images/icons/flags/shiny/16/France.png" alt=""/></a>
                                    </li>
                                    <li>
                                        <a href="#">Chinees <img src="images/icons/flags/shiny/16/China.png" alt=""/></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pull-right">
                            <p>Some text here</p>
                        </div>
                    </div><!-- End .actionbar-->
                    <div class="row ext-raster">
                    	<div class="col-sm-8">
                            <div class="row ext-raster">
                                <div class="col-sm-6">
                                    <div class="inner-padding">
                                        <div class="progress-project">
                                            <div class="progress-project-header">
                                                <h5>The goal</h5><span>90%</span>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div><!-- End .progress-project -->
                                    </div><!-- End .inner-padding -->
                                </div>
                                <span class="breakpoint-sm ext-raster-line-6"></span>
                                <div class="col-sm-6">
                                    <div class="grouped raster-3-blocks">
                                        <div class="duo-val-block">
                                            <span class="font-big">1778</span>
                                            <span class="font-small">Clicks</span>
                                        </div><!-- End .duo-val-block -->
                                        <div class="duo-val-block">
                                            <span class="font-big">7545</span>
                                            <span class="font-small">Views</span>
                                        </div><!-- End .duo-val-block -->
                                        <div class="duo-val-block">
                                            <span class="font-big">4459</span>
                                            <span class="font-small">Sales</span>
                                        </div><!-- End .duo-val-block -->
                                    </div>
                                </div>
                                <span class="ext-raster-line-bottom"></span>
                            </div><!-- End .row -->
                            <div class="row">
                            	<div class="col-sm-12">
                                    <div class="alert alert-block alert-inline-top alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <h4>Hello...</h4>
                                        Build simple or complex layouts with Bootstrap(default + extended) gird.
                                    </div>
                                    <div class="inner-padding">
										<div class="spacer-20"></div>
                                    	<div id="chart-mixed-1" style="width:100%; height:240px"></div>
                                        <div class="spacer-20"></div>
                                        <div class="subheading">
                                            <h3>Widgets</h3>
                                            <p>A couple of widgets with different content inside.</p>
                                        </div>
         								<div class="row">

                                            <!-- Start grid -->

                                            <section class="col-sm-12">

                                                <!-- New widget -->

                                                <div class="widget">
                                                    <header>
                                                        <h2>Tabels &amp; Scrollbar</h2>
                                                    </header>
                                                    <div>
                                                    <div class="scrollbar-y">
        												<table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="th-square"><label><input type="checkbox" class="checkbox-master"/><span></span></label></th>
                                                                    <th scope="col">Contact</th>
                                                                    <th scope="col">Company</th>
                                                                    <th scope="col">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><label><input type="checkbox"/><span></span></label></td>
                                                                    <td>James Winters</td>
                                                                    <td>CreativeMilk</td>
                                                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label><input type="checkbox"/><span></span></label></td>
                                                                    <td>Jim Jonnes</td>
                                                                    <td>Envato</td>
                                                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label><input type="checkbox" class="ddd"/><span></span></label></td>
                                                                    <td>Xander Jacksons</td>
                                                                    <td>Google</td>
                                                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label><input type="checkbox"/><span></span></label></td>
                                                                    <td>Wim Monster</td>
                                                                    <td>Microsoft</td>
                                                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label><input type="checkbox"/><span></span></label></td>
                                                                    <td>Jamie Peppler</td>
                                                                    <td>Apple</td>
                                                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label><input type="checkbox"/><span></span></label></td>
                                                                    <td>Jim Jones</td>
                                                                    <td>Google</td>
                                                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label><input type="checkbox"/><span></span></label></td>
                                                                    <td>Wim Saunders</td>
                                                                    <td>CreativeMilk</td>
                                                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label><input type="checkbox"/><span></span></label></td>
                                                                    <td>John Peppler</td>
                                                                    <td>Apple</td>
                                                                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        </div>
                                                    </div>
                                                </div><!-- End .widget -->

												<!-- New widget -->

                                                <div class="widget">
                                                    <header>
                                                        <h2>Raster</h2>
                                                    </header>
                                                    <div>
                                                       <div class="row ext-raster">
                                                            <div class="col-sm-6">
                                                                <div class="inner-padding">
                                                                Nullam vel diam et nulla iaculis varius vitae ac velit. Aliquam ac massa adipiscing, ultricies purus eu, vehicula tortor.
                                                                Ut ornare malesuada magna a aliquam. Quisque et tellus eget augue tincidunt lobortis in id est. Donec hendrerit, urna non
                                                                vulputate aliquam, erat lectus faucibus justo, at interdum velit mauris vel tellus. Nullam aliquet vestibulum nibh, at imperdiet
                                                                mauris feugiat sed. Maecenas tincidunt enim neque, quis ultrices felis ullamcorper in. Suspendisse potenti.
                                                                </div>
                                                            </div>
                                                            <span class="breakpoint-sm ext-raster-line-6"></span>
                                                            <div class="col-sm-6">
                                                                <div class="inner-padding">
                                                                Nullam vel diam et nulla iaculis varius vitae ac velit. Aliquam ac massa adipiscing, ultricies purus eu, vehicula tortor.
                                                                Ut ornare malesuada magna a aliquam. Quisque et tellus eget augue tincidunt lobortis in id est. Donec hendrerit, urna non
                                                                vulputate aliquam, erat lectus faucibus justo, at interdum velit mauris vel tellus. Nullam aliquet vestibulum nibh, at imperdiet
                                                                mauris feugiat sed. Maecenas tincidunt enim neque, quis ultrices felis ullamcorper in. Suspendisse potenti.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ext-raster">
                                                            <span class="breakpoint-sm ext-raster-line-top"></span>
                                                            <div class="col-sm-12">
                                                                <div class="inner-padding">
                                                                Morbi laoreet elementum urna. Suspendisse tincidunt eleifend mauris, congue tempor turpis. Donec felis mauris, molestie et iaculis eget,
                                                                eleifend in sem. Integer eget imperdiet nisl. Curabitur interdum accumsan lectus, ut feugiat libero fringilla ac. Ut ut venenatis libero. Aliquam erat volutpat. Nunc ultricies velit ut libero cursus, ac tincidunt sem tristique.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- End .widget -->

                                                <!-- New widget -->

                                                <div class="widget">
                                                    <header>
                                                        <h2>Maps</h2>
                                                    </header>
                                                    <div>
                                                        <div class="alert alert-danger alert-inline-top">
                                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                            <i class="fa fa-warning"></i>Put me inside a widget...
                                                        </div>
                                                        <div class="gmap3-flex" id="gmap3-1"></div>
                                                    </div>
                                                </div><!-- End .widget -->
                                            </section>
                                        </div>
                                        <div class="spacer-20"></div>
                                        <div class="hr-totop"><span>Top</span></div>
                                        <div class="spacer-40"></div>
                                        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/120185136&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=false"></iframe>
                                    </div><!-- End .inner-padding -->
                                </div>
                            </div><!-- End .row -->
                        </div>
                        <span class="breakpoint-sm ext-raster-line-8"></span>
                        <div class="col-sm-4">
                            <ul class="ext-tabs tabs-negative-position">
                                <li class="active">
                                    <a href="#content-tab-10">Tab 1</a>
                                </li>
                                <li>
                                    <a href="#content-tab-11">Tab 2</a>
                                </li>
                            </ul><!-- End .ext-tabs -->
                            <div class="tab-content">
                                <div id="content-tab-10" class="tab-pane active">
                                    <div class="inner-padding">
                                        <div class="subheading">
                                            <h3>Recent Activity</h3>
                                            <div class="btn-group pull-right">
                                                <a href="#" class="btn btn-default btn-sm tooltip-top" title="Show less" id="as-min-trigger">
                                                    <i class="fa fa-th-large"></i>
                                                </a>
                                                <a href="#" class="btn btn-default btn-sm active tooltip-top" title="Show more" id="as-plus-trigger">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="activity-stream">
                                            <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <i class="fa fa-exclamation-triangle"></i>Alert of some kind.
                                            </div>
                                            <div class="activity-stream-item" id="as-item-2">
                                                <img src="images/users/user-5.jpg" alt="" class="avatar"/>
                                                <div class="activity-stream-content">
                                                    <div class="activity-stream-user">
                                                        <a href="#" class="bold">Martin Gardenar</a> <span class="busy-dot"></span> <small class="text-muted pull-right">1 min ago</small>
                                                    </div>
                                                    <div class="activity-stream-title">
                                                        Posted a message on the wall.
                                                    </div>
                                                    <div class="activity-stream-sub">
                                                    <i>Aenean diam enim, luctus congue egestas eu, euismod at erat. Mauris volutpat, massa eu fringilla laoreet,
                                                    sapien arcu fermentum ante, eu gravida eros sem ac est. Aenean lectus purus, gravida sagittis imperdiet et,
                                                    interdum non libero. Proin nunc felis, adipiscing ut diam nec, vulputate consequat...</i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activity-stream-item" id="as-item-1">
                                                <img src="images/users/user-1.jpg" alt="" class="avatar"/>
                                                <div class="activity-stream-content">
                                                    <div class="activity-stream-user">
                                                        <a href="#" class="bold">Steven Watson</a> <span class="online-dot"></span> <small class="text-muted pull-right">21 mins ago</small>
                                                    </div>
                                                    <div class="activity-stream-title">
                                                        Has accepted your friend request.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activity-stream-item">
                                                <img src="images/users/user-4.jpg" alt="" class="avatar"/>
                                                <div class="activity-stream-content">
                                                    <div class="activity-stream-user">
                                                        <a href="#" class="bold">Elly Martel</a> <span class="label label-warning">Comment</span> <small class="text-muted pull-right">27 mins ago</small>
                                                    </div>
                                                    <div class="activity-stream-title">
                                                        Posted a comment in the <a href="#" class="highlight-link">forums</a>.
                                                    </div>
                                                    <div class="activity-stream-sub">
                                                        <p class="text-muted">
                                                        Phasellus ac aliquam justo. Vestibulum non lectus ultrices purus mollis mollis.
                                                        Sed eget ullamcorper lectus. Integer condimentum eleifend quam, adipiscing viverra arcu.
                                                        Praesent fermentum ligula non lorem accumsan.
                                                        </p>
                                                        <div class="spacer-20"></div>
                                                        <textarea class="auto-expand form-control noresizing" name="" placeholder="Type comment here..." data-autoexpand-size="100"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activity-stream-item">
                                                <img src="images/users/user-2.jpg" alt="" class="avatar"/>
                                                <div class="activity-stream-content">
                                                    <div class="activity-stream-user">
                                                        <a href="#" class="bold">Maris Bradley</a> <small class="text-muted pull-right">44 mins ago</small>
                                                    </div>
                                                    <div class="activity-stream-title">
                                                        Has send you an message [<a href="#" class="underline">read message</a>]
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activity-stream-item">
                                                <img src="images/users/user-3.jpg" alt="" class="avatar"/>
                                                <div class="activity-stream-content">
                                                    <div class="activity-stream-user">
                                                        <a href="#" class="bold">Wyatt Brooke</a> <small class="text-muted pull-right">21 mins ago</small>
                                                    </div>
                                                    <div class="activity-stream-title">
                                                        Has posted a new video.
                                                    </div>
                                                    <div class="activity-stream-sub">
                                                        <div class="video-container">
                                                            <iframe src="http://player.vimeo.com/video/17047198" width="300" height="150" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                                            <p><a href="http://vimeo.com/17047198">Theodore & Rosemary's Orchard</a>.</p>
                                                        </div><!-- End .video-container -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activity-stream-item">
                                                <img class="media-object avatar" src="holder.js/40x40/karma-grey" alt=""/>
                                                <div class="activity-stream-content">
                                                    <div class="activity-stream-user">
                                                        <a href="#" class="bold">Martin Gardenar</a> <small class="text-muted pull-right">1 day ago</small>
                                                    </div>
                                                    <div class="activity-stream-title">
                                                        Deleted his profile picture.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activity-stream-item">
                                                <img src="images/users/user-6.jpg" alt="" class="avatar"/>
                                                <div class="activity-stream-content">
                                                    <div class="activity-stream-user">
                                                        <a href="#" class="bold">Debra Hopper</a> <span class="offline-dot"></span> <small class="text-muted pull-right">10 days ago</small>
                                                    </div>
                                                    <div class="activity-stream-title">
                                                        Posted a quote.
                                                    </div>
                                                    <div class="activity-stream-sub">
                                                        <blockquote class="pull-right">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activity-stream-item">
                                                <img src="images/users/user-7.jpg" alt="" class="avatar"/>
                                                <div class="activity-stream-content">
                                                    <div class="activity-stream-user">
                                                        <a href="#" class="bold">Nathan Rupertson</a> <small class="text-muted pull-right">11 mins ago</small>
                                                    </div>
                                                    <div class="activity-stream-title">
                                                        Posted a comment in the <a href="#" class="highlight-link">forums</a>.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activity-stream-item">
                                                <img src="images/users/user-8.jpg" alt="" class="avatar"/>
                                                <div class="activity-stream-content">
                                                    <div class="activity-stream-user">
                                                        <a href="#" class="bold">Jeana Tucker</a> <small class="text-muted pull-right">23 day ago</small>
                                                    </div>
                                                    <div class="activity-stream-title">
                                                        Changed her account information.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="activity-stream-item">
                                                <img src="images/users/user-9.jpg" alt="" class="avatar"/>
                                                <div class="activity-stream-content">
                                                    <div class="activity-stream-user">
                                                        <a href="#" class="bold">Jayson Horton</a> <small class="text-muted pull-right">1 month ago</small>
                                                    </div>
                                                    <div class="activity-stream-title">
                                                        Added <u>5 new</u> images to media.
                                                    </div>
                                                    <div class="activity-stream-sub">
                                                        <div class="thumbs-list thumbs-small">
                                                            <ul>
                                                                <li>
                                                                    <img src="images/gallery/60x60/img-1.jpg" alt=""/>
                                                                </li>
                                                                <li>
                                                                    <img src="images/gallery/60x60/img-2.jpg" alt=""/>
                                                                </li>
                                                                <li>
                                                                    <img src="images/gallery/60x60/img-3.jpg" alt=""/>
                                                                </li>
                                                                <li>
                                                                    <img src="images/gallery/60x60/img-4.jpg" alt=""/>
                                                                </li>
                                                                <li>
                                                                    <img src="images/gallery/60x60/img-5.jpg" alt=""/>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End .activity-stream -->
                                    </div><!-- End .inner-padding -->

                                    <!-- Lockscreen -->
                                    <div class="lockscreen" id="lockscreen-target">
                                        <div class="lockscreen-overlay"></div>
                                        <div class="lockscreen-modal">
                                            <div class="lockscreen-placeholder"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="content-tab-11" class="tab-pane">
                                    <div class="inner-padding">
                                        <div class="subheading">
                                            <h3>Form Elements</h3>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="ff-0">Full name: <span class="asterisk">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Basic text input" id="ff-0"/>
                                                </div>
                                            </div>
                                            <div class="spacer-20"></div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="ff-1">Username:</label>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" placeholder="Input group" id="ff-1"/>
                                                        <span class="input-group-addon">.site.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="spacer-20"></div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="ff-2">Email:</label>
                                                    <input type="text" class="form-control input-lg" placeholder="Large input" id="ff-2"/>
                                                    <div class="helper-text-box">
                                                        <p>
                                                        The input field above is a large field. Dont worry this is not the default size.
                                                        </p>
                                                    </div><!-- End .helper-text-box -->
                                                </div>
                                            </div>
                                            <div class="spacer-10"></div>
                                            <fieldset>
                                            	<legend>Checkbox</legend>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="stacked-labels">
                                                            <label><input type="checkbox" name="tags" value="html5"/><span></span> HTML5</label>
                                                            <label><input type="checkbox" name="tags" value="css3"/><span></span> CSS3</label>
                                                            <label><input type="checkbox" name="tags" value="css3"/><span></span> Javascript</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="stacked-labels">
                                                            <label><input type="checkbox" name="tags" value="html5"/><span></span> Database</label>
                                                            <label><input type="checkbox" name="tags" value="css3"/><span></span> Search</label>
                                                            <label><input type="checkbox" name="tags" value="css3"/><span></span> Projects</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="spacer-20"></div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="ff-2">First time here:</label>
                                                    <select name="client" required class="form-control simpleselect">
                                                        <option value="">-- Select option --</option>
                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="spacer-20"></div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="ff-2">Gender:</label>
                                                    <div class="inline-labels">
                                                        <label><input type="radio" name="gender" value="male" checked/><span></span> Male</label>
                                                        <label><input type="radio" name="gender" value="female"/><span></span> Female</label>
                                                        <label><input type="radio" name="gender" value="et"/><span></span> ET</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="spacer-20"></div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="ff-2">Message:</label>
                                                    <textarea class="form-control" placeholder="Basic  textarea"></textarea>
                                                </div>
                                            </div>
                                            <div class="spacer-20"></div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                	<label><input type="checkbox"/><span></span> Accept terms?</label>
                                                   <button class="btn btn-default pull-right" type="submit">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- End .inner-padding -->
                            	</div>
                            </div>
                            <hr/>
                            <div class="inner-padding">
                            	<img src="images/gallery/img-4.jpg" class="img-responsive" alt="Responsive image">
                            </div><!-- End .inner-padding -->
                        </div>
                        <span class="ext-raster-line-bottom"></span>
                    </div>
      				<div class="inner-padding">
                        <div class="row">
                            <div class="col-sm-12">
                            	<div class="project-block">
                                	<header>
                                        <h3>Project Beta</h3>
                                        <p class="text-muted">A simple project title</p>
                                    </header>
                                    <ul>
                                    	<li>
                                            <div class="pull-left">
                                            Progress:
                                            </div>
                                            <div class="pull-right">
                                            29%
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            End date:
                                            </div>
                                            <div class="pull-right">
                                            31 Feb
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Developer:
                                            </div>
                                            <div class="pull-right">
                                            Steven
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Design by:
                                            </div>
                                            <div class="pull-right">
                                            CreativeMilk
                                            </div>
                                        </li>
                                    </ul>
                                    <footer>
                                        <div class="pull-left">
                                        Status:
                                        </div>
                                        <div class="pull-right">
                                        	<span class="label label-primary">Finished</span>
                                        </div>
                                    </footer>
                                </div><!-- End .project-block -->
                            	<div class="project-block">
                                	<header>
                                        <h3>Website Zeta</h3>
                                        <p class="text-muted">A simple project title</p>
                                    </header>
                                    <ul>
                                    	<li>
                                            <div class="pull-left">
                                            Progress:
                                            </div>
                                            <div class="pull-right">
                                            66%
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            End date:
                                            </div>
                                            <div class="pull-right">
                                            11 Jan
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Developer:
                                            </div>
                                            <div class="pull-right">
                                            Wyatt
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Design by:
                                            </div>
                                            <div class="pull-right">
                                            Apple
                                            </div>
                                        </li>
                                    </ul>
                                    <footer>
                                        <div class="pull-left">
                                        Status:
                                        </div>
                                        <div class="pull-right">
                                       		<span class="label label-danger">Canceled</span>
                                        </div>
                                    </footer>
                                </div><!-- End .project-block -->
                            	<div class="project-block">
                                	<header>
                                        <h3>Client Charlie</h3>
                                        <p class="text-muted">A simple project title</p>
                                    </header>
                                    <ul>
                                    	<li>
                                            <div class="pull-left">
                                            Progress:
                                            </div>
                                            <div class="pull-right">
                                            60%
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            End date:
                                            </div>
                                            <div class="pull-right">
                                            21 Sep
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Developer:
                                            </div>
                                            <div class="pull-right">
                                            Linda
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Design by:
                                            </div>
                                            <div class="pull-right">
                                            Envato
                                            </div>
                                        </li>
                                    </ul>
                                    <footer>
                                        <div class="pull-left">
                                        Status:
                                        </div>
                                        <div class="pull-right">
                                        	<span class="label label-success">Active</span>
                                        </div>
                                    </footer>
                                </div><!-- End .project-block -->
                            	<div class="project-block">
                                	<header>
                                        <h3>Document Alpha</h3>
                                        <p class="text-muted">A simple project title</p>
                                    </header>
                                    <ul>
                                    	<li>
                                            <div class="pull-left">
                                            Progress:
                                            </div>
                                            <div class="pull-right">
                                            5%
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            End date:
                                            </div>
                                            <div class="pull-right">
                                            10 Dec
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Developer:
                                            </div>
                                            <div class="pull-right">
                                            Linda
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Design by:
                                            </div>
                                            <div class="pull-right">
                                            CreativeMilk
                                            </div>
                                        </li>
                                    </ul>
                                    <footer>
                                        <div class="pull-left">
                                        Status:
                                        </div>
                                        <div class="pull-right">
                                        	<span class="label label-default">Pending</span>
                                        </div>
                                    </footer>
                                </div><!-- End .project-block -->
                            	<div class="project-block">
                                	<header>
                                        <h3>File Tango</h3>
                                        <p class="text-muted">A simple project title</p>
                                    </header>
                                    <ul>
                                    	<li>
                                            <div class="pull-left">
                                            Progress:
                                            </div>
                                            <div class="pull-right">
                                            100%
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            End date:
                                            </div>
                                            <div class="pull-right">
                                            03 Feb
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Developer:
                                            </div>
                                            <div class="pull-right">
                                            Jessica
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Design by:
                                            </div>
                                            <div class="pull-right">
                                            CreativeMilk
                                            </div>
                                        </li>
                                    </ul>
                                    <footer>
                                        <div class="pull-left">
                                        Status:
                                        </div>
                                        <div class="pull-right">
                                        	<span class="label label-warning">Reviewd</span>
                                        </div>
                                    </footer>
                                </div><!-- End .project-block -->
                            	<div class="project-block">
                                	<header>
                                        <h3>Progressbar</h3>
                                        <p class="text-muted">A simple project title</p>
                                    </header>
                                    <ul>
                                    	<li>
                                            <div class="pull-left">
                                            Progress:
                                            </div>
                                            <div class="pull-right">
                                            45%
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            End date:
                                            </div>
                                            <div class="pull-right">
                                            1 Feb
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Developer:
                                            </div>
                                            <div class="pull-right">
                                            Linda
                                            </div>
                                        </li>
                                        <li>
                                            <div class="pull-left">
                                            Design by:
                                            </div>
                                            <div class="pull-right">
                                            Apple
                                            </div>
                                        </li>
                                    </ul>
                                    <footer>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>
                               		</footer>
                                </div><!-- End .project-block -->
                            </div>
                        </div>
                    </div>
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
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-cogs"></i>
                            </a>
                            <div class="dropup" id="ext-dropdown-chat">
                                <a class="btn dropdown-toggle ext-dropdown-chat-btn" data-toggle="dropdown" href="#">
                                    <span class="online-dot"></span>
                                    Steven Watson
                                    <i class="fa fa-comments chat-blink-icon"></i>
                                </a>
                                <div class="ext-dropdown-chat dropdown-menu pull-right">
                                    <div class="ext-dropdown-chat-inner">
                                        <div class="ext-dropdown-header">
                                            <i class="fa fa-comments"></i>
                                            <h5>Live chat</h5>
                                            <a href="#" class="btn btn-default btn-sm ext-dropdown-chat-info-toggle">
                                                <i class="fa fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="ext-dropdown-chat-window scrollbar-y">
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="seperator"><span>11/15/12</span></div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-5.jpg" alt=""/>
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
                                                    <img src="images/users/user-1.jpg" alt=""/>
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Steven:</strong>
                                                    <span>14:24</span>
                                                    <p>It's going to be a long post, so I will split it into 2 parts...</p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-1.jpg" alt=""/>
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Steven:</strong>
                                                    <span>13:44</span>
                                                    <p>How long must the blog post be....</p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-5.jpg" alt=""/>
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Martin:</strong>
                                                    <span>13:31</span>
                                                    <p>Great, I will wait, dont forget to add some photo's  <a href="#">here</a>...</p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-1.jpg" alt=""/>
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Steven:</strong>
                                                    <span>13:28</span>
                                                    <p>Sure no problem, I am typing the blog as we speak...</p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-5.jpg" alt=""/>
                                                </div>
                                                <div class="ext-dropdown-chat-user">
                                                    <strong>Martin:</strong>
                                                    <span>13:23</span>
                                                    <p>He, can you write a new blog post, I want update the blog...</p>
                                                </div>
                                            </div>
                                            <div class="ext-dropdown-chat-msg">
                                                <div class="ext-dropdown-chat-avatar">
                                                    <img src="images/users/user-1.jpg" alt=""/>
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
                                            Vivamus nisl lectus, venenatis eu sagittis id, dignissim quis justo. Etiam viverra vestibulum libero,
                                            vel vulputate risus pulvinar sit amet. Aenean a sollicitudin ante. Nam nec nisl eu nisl.
                                            </p>
                                            <div class="spacer-15"></div>
                                            <p>
                                            Maecenas in diam tempus velit viverra ultrices non eu urna. Maecenas nibh ante, consectetur non faucibus at,
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

    <!--Modal -->
    <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Update 13.2.1 available</h4>
    		    </div>
				<div class="modal-body">
                    <div class="row" style="margin-bottom:-20px">
                        <div class="col-xs-3">
                            <i class="fa fa-download" style="font-size:120px;color:#ccc"></i>
                        </div>
                        <div class="col-xs-9">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet molestie justo at pulvinar.
                            In hac habitasse platea dictumst. Proin accumsan, tellus quis varius molestie, mi dolor facilisis risus,
                            quis tristique neque augue eget nunc. Curabitur turpis sapien, lacinia in lacinia nec,
                            </p>
                            <div class="spacer-20"></div>
                            <h4>Whats new in version 13.2.1</h4>
                            <div class="spacer-20"></div>
                            <ul>
                                <li>Suspendisse laoreet molestie justo at pulvinar.</li>
                                <li>Proin accumsan, tellus quis varius molestie, mi dolor facilisis risus.</li>
                                <li>In hac habitasse platea dictumst. Proin accumsan, tellus quis varius molestie dolum ipkut. Curabitur turpis sapien lorem.</li>
                                <li>Curabitur turpis sapien, lacinia in lacinia necr.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet molestie justo.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary pull-right">Get it now</button>
                </div>
			</div>
		</div>
	 </div>

	 <!-- Lockscreen -->
     <div class="lockscreen" id="lockscreen-slider">
     	<div class="lockscreen-overlay"></div>
        <div class="lockscreen-modal">
        	<img src="images/users/user-1.jpg" alt="" class="lockscreen-avatar"/>
			<div class="lockscreen-placeholder"></div>
        </div>
     </div>
</body>
</html>
