@extends('layout.user')
@section('content')
    <div id="container-login" class="clearfix">
        <div id="login-box">
            <div class="login-box-inner clearfix">
                <header id="login-header">
                    <h1>Ganti kata sandi</h1>
                </header>
                <form id="form-reset">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="fc-id-1">Kata sandi lama:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input class="form-control" type="password" placeholder="Your old password" id="fc-id-1"
                                tabindex="1">
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="fc-id-2-a">Kata sandi baru:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input class="form-control password" type="password" placeholder="Minium of 6 characters"
                                id="fc-id-2-a" tabindex="2" data-indicator="pwindicator">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="pwindicator">
                                <div class="pwbar"></div>
                                <div class="pwlabel"></div>
                            </div>
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="fc-id-3">Konfirmasi:</label>
                            <a href="#" id="showpassword-trigger" class="underline">Show password</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="showpassword-wrap"><input class="form-control" type="password"
                                    placeholder="Lets match" id="fc-id-3" tabindex="3"><input
                                    class="form-control showpassword-hint" type="text"></div>
                        </div>
                    </div>
                    <div class="spacer-20"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- just for the demo....replace this with an form element -->
                            <a href="index.html" class="btn btn-default form-control" id="fake-submit" tabindex="4">Ganti
                                kata sandi</a>
                        </div>
                    </div>
                    <div class="spacer-40"></div>
                    <div class="or-line"><span>OR</span></div>
                    <div class="spacer-40"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="login.html" class="btn btn-block btn-danger" tabindex="6">Batalkan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
