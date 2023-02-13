{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
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

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
                                <p>&nbsp;&nbsp;STAKLIM-SUMSEL &nbsp;&nbsp;Sistem Pelayanan &nbsp;&nbsp;Cepat dan Akurat</p>
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
                        	<label for="fc-id-1">Email</label>
                        </div>
					</div>                                          
                	<div class="row">  
                        <div class="col-lg-12">	
                    		<input id="email" class="form-control input-lg  @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"id="fc-id-1" tabindex="1" />
                        </div>
					</div>
                    <div class="spacer-10"></div>
                	<div class="row">  
                        <div class="col-lg-12">	
                        	<label for="fc-id-2">Kata sandi</label>
                            <a href="#" id="showpassword-trigger" class="underline">Tampilkan sandi</a>
                        </div>
					</div>	
                	<div class="row">  
                        <div class="col-lg-12">	
                    		<input id="fc-id-2" type="password" name="password" placeholder="Kata Sandi"
                            required autocomplete="current-password" class="form-control input-lg" tabindex="2" />
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
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
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
                            {{-- <x-primary-button class="btn btn-default form-control">
                                {{ __('Log in') }}
                            </x-primary-button> --}}
                        </div>
                    </div>
                    <div class="spacer-40"></div>                    
                    <div class="or-line"><span>OR</span></div>                  
					<div class="spacer-40"></div>                    
                    <div class="row">
						<div class="col-lg-12">
    						<a href="{{ url('register') }}" class="btn btn-block btn-success" tabindex="6">Daftar akun baru</a>
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


