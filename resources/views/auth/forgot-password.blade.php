{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

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
                                <h1 class="bold">&nbsp;SIPEDAL</h1>
                                <p>&nbsp;&nbsp;Stasiun Klimatologi &nbsp;&nbsp;Palembang</p>
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
                    		<input id="email" class="form-control input-lg  @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"id="fc-id-1" tabindex="1" />
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
                                {{-- <a href="forgot.html" class="underline">Forgot password</a> --}}
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