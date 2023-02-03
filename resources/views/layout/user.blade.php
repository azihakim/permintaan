<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>SIPACAK-STAKLIM SUMSEL Sistem Pelayanan Cepat dan Akurat</title>
    <link rel="icon" type="image/x-icon" href="../../style/images/gallery/logo/BMKG-80x80.png" />
    

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
        <section class="content">
            @yield('content') {{-- content --}}

        </section>
    </div><!-- End #container -->

</body>

</html>
