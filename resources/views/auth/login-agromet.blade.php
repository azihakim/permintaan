<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>APODIO - Aplikasi Pencatatan Online Data Iklim dan Observasi</title>
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
            <div id="container-login" class="clearfix">
                <div id="login-box">
                    <div class="login-box-inner clearfix">
                        <header id="login-header">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="login-avatar">
                                                <img src="../../style/images/gallery/logo/logo-BMKG.png" class=""
                                                    alt="" id="logo-BMKG" />
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h1 class="bold">&nbsp;&nbsp;&nbsp;APODIO</h1>
                                            <p>&nbsp;&nbsp;&nbsp;STAKLIM-SUMSEL &nbsp;&nbsp;&nbsp;Aplikasi Pencatatan
                                                &nbsp;&nbsp;&nbsp;Online Data Iklim &nbsp;&nbsp;&nbsp;dan Observasi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="spacer-50"></div>
                        <div class="spacer-30"></div>
                        <form id="form-login" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="fc-id-1">Email:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input id="email"
                                        class="form-control input-lg  @error('email') is-invalid @enderror"
                                        type="email" name="email" :value="old('email')" required autofocus
                                        placeholder="Email"id="fc-id-1" tabindex="1" />
                                </div>
                            </div>
                            <div class="spacer-10"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="fc-id-2">Password:</label>
                                    <a href="#" id="showpassword-trigger" class="underline">Show password</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input id="fc-id-2" type="password" name="password" placeholder="Kata Sandi"
                                        required autocomplete="current-password" class="form-control input-lg"
                                        tabindex="2" />
                                    @error('email')
                                        <div class="spacer-5"></div>
                                        <span class="invalid-feedback" role="alert">
                                            <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <i class="fa fa-warning"></i>Email/password salah
                                            </div>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="spacer-10"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pull-right">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                href="{{ route('password.request') }}">
                                                {{ __('Lupa kata sandi?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-15"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- just for the demo....replace this with an form element -->
                                    <button class="btn btn-default form-control" tabindex="4">Masuk</button>
                                </div>
                            </div>
                            {{-- <div class="spacer-40"></div>
                            <div class="or-line"><span>OR</span></div>
                            <div class="spacer-40"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="{{ url('register') }}" class="btn btn-block btn-success"
                                        tabindex="6">Daftar akun baru</a>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
        </section>
    </div><!-- End #container -->

</body>

</html>
