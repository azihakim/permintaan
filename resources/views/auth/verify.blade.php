{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layout.user')
@section('content')
    <div id="container-login" class="clearfix">
        <div id="login-box">  
       		<div class="login-box-inner clearfix">
                <header id="login-header">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-avatar">
                                <img src="../../style/images/gallery/logo/logo-BMKG.png" class="" alt="" id="logo-BMKG" />
                            </div>
                            <div>
                                <h1 class="bold">&nbsp;SIPACAK</h1>
                                <p>&nbsp;&nbsp;STAKLIM-SUMSEL &nbsp;&nbsp;Sistem Pelayanan &nbsp;&nbsp;Cepat dan Akurat</p>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="spacer-50"></div>	
                <div class="spacer-30"></div>
                <div class="alert alert-warning">
                    <i class="fa fa-info-circle"></i><p class="text-center">Silahkan cek email anda untuk melakukan verifikasi melalui link yang sudah dikirimkan.</p>
                </div>
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-default form-control">{{ __('Kirim ulang verifikasi') }}</button>
                </form>
        </div>
    </div>
@endsection