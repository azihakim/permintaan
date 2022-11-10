@extends('layout.user')
@section('content')
    <div id="container-loginmin" class="clearfix">
        <div id="login-box">
            <div class="login-box-inner clearfix">
                <header id="login-header">
                    <h1 class="bold">SIPEDAL</h1>
                </header>
                <p>Stasiun Klimatologi Palembang</p>
                <div class="spacer-10"></div>
                <form id="form-login">
                    <div class="login-avatar">
                        <img src="../../style/images/gallery/logo/logo-BMKG.png" alt="" id="logo-BMKG" />
                    </div>
                    <div class="login-fields-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <input class="form-control input-lg" type="text" placeholder="Email" tabindex="1" />
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="showpassword-wrap">
                                    <input class="form-control input-lg" type="password" placeholder="Password"
                                        tabindex="2" />
                                    <a id="showpassword-trigger" class="underline">Tampilkan sandi</a>
                                </div>
                            </div>
                        </div>
                        {{-- Daftar akun --}}
                        <div class="spacer-20"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- this needs to be a button/input element -->
                                <a href="index.html" class="btn btn-default btn-lg" type="submit">Login</a>
                            </div>
                        </div>
                        <div class="row">
                            <a href="{{ url('signup') }}" class="text-primary underline">Daftar akun</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer id="login-footer">
            <strong>Copyright © 2013 creativemilk.net</strong>
            <div class="spacer-5"></div>
            <small>Lorem ipsum dolor sit amet, islum consectetur adipiscing elit. All rights reserved.</small>
        </footer>
    </div><!-- End #container -->
@endsection
