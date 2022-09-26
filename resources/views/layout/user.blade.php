<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>SIPEDAL - Sistem Pelayanan Data Online Stasiun Klimatologi Palembang</title>

    <!-- // IOS webapp icons // -->

    <meta name="apple-mobile-web-app-title" content="Karma Webapp">
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="{{ asset('style/images/mobile/apple-touch-icon-152x152.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('style/images/mobile/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="{{ asset('style/images/mobile/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('style/images/mobile/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
        href="{{ asset('style/images/mobile/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('style/images/mobile/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('style/images/mobile/apple-touch-icon.png') }}" />
    <link rel="shortcut icon" href="{{ asset('style/images/favicons/favicon.ico') }}" />

    <!-- // IOS webapp splash screens // -->

    <link rel="apple-touch-startup-image"
        media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"
        href="{{ asset('style//images/mobile/apple-touch-startup-image-1536x2008.png') }}" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)"
        href="{{ asset('style//images/mobile/apple-touch-startup-image-1496x2048.png') }}" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)"
        href="{{ asset('style//images/mobile/apple-touch-startup-image-768x1004.png') }}" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)"
        href="{{ asset('style//images/mobile/apple-touch-startup-image-748x1024.png') }}" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"
        href="{{ asset('style//images/mobile/apple-touch-startup-image-640x1096.png') }}" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"
        href="{{ asset('style//images/mobile/apple-touch-startup-image-640x920.png') }}" />
    <link rel="apple-touch-startup-image"
        media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)"
        href="{{ asset('style//images/mobile/apple-touch-startup-image-320x460.png') }}" />

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
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap-custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap-extended.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/dark-theme.css') }}" />

    <!-- // Helpers // -->

    <script src="{{ asset('style/js/plugins/modernizr.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/mobiledevices.js') }}"></script>

    <!-- // jQuery core // -->

    <script src="{{ asset('style/js/libs/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('style/js/libs/jquery-ui-1.10.4.min.js') }}"></script>

    <!-- // Bootstrap // -->

    <script src="{{ asset('style/bootstrap/core/dist/js/bootstrap.min.js') }}"></script>

    <!-- // Custom/premium plugins // -->

    <script src="{{ asset('style/js/plugins/showpassword.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/nanogress.1.0.min.js') }}"></script>
    <script src="{{ asset('style/js/plugins/powerwizard.1.0.min.js') }}"></script>

    <!-- // Third-party plugins // -->

    <script src="{{ asset('style/js/plugins/jquery.pwstrength.min.js') }}"></script>

    <!-- // Custom //-->

    <script src="{{ asset('style/js/plugins/login.js') }}"></script>

</head>

<body>
    <div class="clearfix">
        <div class="spacer-50"></div>
        <div class="spacer-50"></div>
        <section class="content">
            @yield('content') {{-- content --}}

        </section>
    </div><!-- End #container -->

</body>

</html>
