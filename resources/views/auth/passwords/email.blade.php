{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
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
                                <p>&nbsp;&nbsp;<strong>STAKLIM SUMSEL</strong> &nbsp;&nbsp;Pelayanan Cepat &nbsp;&nbsp;dan Akurat</p>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="spacer-50"></div>	
                <div class="spacer-30"></div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        Permintaan berhasil dikirim, silahkan cek email anda.
                    </div>
                @endif
            	<form method="POST" action="{{ route('password.email') }}">  
                    @csrf
                	<div class="row">
                        <div class="col-lg-12">	
                        	<label for="fc-id-1">Email:</label>
                        </div>
					</div>                                          
                	<div class="row">  
                        <div class="col-lg-12">	
                    		<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
					</div>                  
                    <div class="spacer-15"></div>
                    <div class="row">
						<div class="col-lg-12">
                        	<button class="btn btn-default form-control" tabindex="4">Kirim</button>
                        </div>
                    </div>
                    <div class="spacer-40"></div>                    
                    <div class="or-line"><span>OR</span></div>                  
					<div class="spacer-40"></div>                    
                    <div class="row">
						<div class="col-lg-12">
    						<a href="{{ url('login') }}" class="btn btn-block btn-success" tabindex="6">Login</a>
                        </div>
                    </div>                     
                </form>
            </div>
        {{-- </div>
        <footer id="login-footer">
            <strong>Copyright © 2013 creativemilk.net</strong>
            <div class="spacer-5"></div>
            <small>Lorem ipsum dolor sit amet, islum consectetur adipiscing elit. All rights reserved.</small>
        </footer> --}}
    </div>
@endsection
