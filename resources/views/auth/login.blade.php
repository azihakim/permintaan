
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layout.user')
@section('content')
    {{-- <div id="container-loginmin" class="clearfix">
        <div id="login-box">
            <div class="login-box-inner clearfix">
                <header id="login-header">
                    <h1 class="bold">SIPEDAL</h1>
                </header>
                <p>Stasiun Klimatologi Palembang</p>
                <div class="spacer-10"></div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf     
                    <div class="login-avatar">
                        <img src="../../style/images/gallery/logo/logo-BMKG.png" alt="" id="logo-BMKG" />
                    </div>
                    <div class="login-fields-wrapper">
                    <!-- Email Address -->
                    <div class="row">
                        <div class="col-lg-12">
                            <x-text-input id="email" class="form-control input-lg" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
            
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    <!-- Password -->
                    <div class="mt-4">
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        placeholder="Kata Sandi"
                                        required autocomplete="current-password" class="form-control input-lg"/>
        
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <!-- Remember Me -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pull-right">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span></span> Remember me
                            </label>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Lupa kata sandi') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <x-primary-button class="btn btn-default btn-lg">
                                {{ __('Log in') }}
                            </x-primary-button>
                            
                            <a href="{{ url('signup') }}" class="text-primary underline">Daftar akun</a>
                        </div>
                    </div>
                    <div class="spacer-10"></div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pull-left">
                            </div>    
                        </div>
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
    </div> --}}
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
                    		<input id="email" class="form-control input-lg" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"id="fc-id-1" tabindex="1" />
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
                    		<input id="fc-id-2"
                            type="password"
                            name="password"
                            placeholder="Kata Sandi"
                            required autocomplete="current-password" class="form-control input-lg" tabindex="2" />
                        </div>
					</div>	
                    <div class="spacer-10"></div>	
                    <div class="row">
                    	<div class="col-lg-12">
                            <div class="pull-left">
                                <label><input type="checkbox" tabindex="3"/><span></span> Remember?</label>
                            </div>
                            <div class="pull-right">
                                <a href="forgot.html" class="underline">Forgot password</a>
                            </div>
                        </div>
                    </div>                    
                    <div class="spacer-15"></div>
                    <div class="row">
						<div class="col-lg-12">
                        	<!-- just for the demo....replace this with an form element -->
                        	<button class="btn btn-default form-control" tabindex="4">Sign in here</button>
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
    						<a href="signup.html" class="btn btn-block btn-success" tabindex="6">Sign up for an account, it's FREE!</a>
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
    </div>
@endsection
