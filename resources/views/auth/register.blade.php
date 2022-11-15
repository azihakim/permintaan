{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input class="block mt-1 w-full" id="name" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layout.user')
@section('content')
    <div id="container-signup" class="clearfix">
        <div id="login-box">
            <div class="login-box-inner clearfix">
                <header id="login-header">
                    <h1 class="bold">Daftar Akun</h1>
                </header>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="spacer-20"></div>
                    {{-- Nama --}}
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-1">Nama</label>
                        </div>
                        <div class="col-lg-8">

                            <input class="form-control required" id="name" type="text" name="name" placeholder="Nama lengkap" :value="old('name')" required autofocus>
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="spacer-15"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Asal instansi</label>
                        </div>
                        <div class="col-lg-8">
                            <input aria-required="true" required class="form-control required" type="text"
                                placeholder="Asal instansi" name="instansi" :value="old('instansi')">
                        </div>
                    </div>
                    <div class="spacer-15"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="fcid-2">Kategori</label>
                        </div>
                        <div class="col-lg-8">
                            <select name= "kategori" required class="form-control" onchange="toggle(this.value)">
                                <option value="">Pilih kategori</option>
                                <option value="Umum">Umum</option>
                                <option value="Swasta">Swasta</option>
                                <option value="Pemerintahan Daerah">Pemerintahan Daerah</option>
                                <option value="Akademisi">Akademisi</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Peneliti">Peneliti</option>
                                <option value="Instansi Vertikal">Instansi Vertikal</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div id="desk"></div>
                    <div class="spacer-15"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>No. Whatsapp</label>
                        </div>
                        <div class="col-lg-8">
                            <input aria-required="true" required class="form-control required" type="number"
                                placeholder="Nomor whatsapp" name="no_wa">
                        </div>
                    </div>
                    <div class="spacer-15"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Email</label>
                        </div>
                        <div class="col-lg-8">
                            <input class="form-control" id="email" type="email" placeholder="Email" name="email" :value="old('email')" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    <div class="spacer-15"></div>
                    {{-- Password --}}
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Kata sandi</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="showpassword-wrap"><input class="form-control" type="password"
                                    placeholder="Kata sandi" id="fc-id-2" tabindex="2" name="password"><input
                                    class="form-control showpassword-hint" type="text">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>
                    <div class="spacer-15"></div>
                    {{-- Password konfirmasi--}}
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Konfirmasi</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="showpassword-wrap"><input class="form-control" type="password"
                                    placeholder="Ulangi kata sandi" id="fc-id-3" tabindex="2" name="password_confirmation"><input
                                    class="form-control showpassword-hint" type="text">
                            </div>
                            <a href="#" id="showpassword-trigger" class="underline">Tampilkan</a>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                    <div class="spacer-15"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>KTP</label>
                        </div>
                        <div class="col-lg-8">
                            <input name="ktp" type="file" accept="image/png, image/jpeg">
                            <div class="helper-text-box">
                                <div class="form-helper-header">Format
                                    file:<code>.png, .jpeg</code>
                                </div>
                                <div class="helper-text-box">
                                    <div class="form-helper">disarankan sensor bagian NIK</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-default btn-lg pull-left" href="{{ route('login') }}">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <button type="submit" class="btn btn-default btn-lg pull-right">Daftar</button>
                </form>
            </div>
        </div>
    </div>
<script>
    // toggle deskripsi kategori
    const div_desk = document.getElementById("desk");
    function toggle(value) {
        if(value == "Instansi Vertikal" || value == "Lainnya"){
            $('#field_deskripsi').remove();
            var newField = document.createElement("div");
            newField.setAttribute("id", "field_deskripsi");
            newField.innerHTML = '<div class="spacer-15"></div>\
                        <div class="row">\
                            <div class="col-lg-4">\
                                <label for="fcid-1">Deskripsi</label>\
                            </div>\
                            <div class="col-lg-8">\
                                <input aria-required="true" required class="form-control" type="text"\
                                    placeholder="Deskripsi Kategori" id="desk_kategori" name="desk_kategori">\
                            </div>\
                        </div>';
                        div_desk.append(newField);   
        }else {
            $('#field_deskripsi').remove();
        }
    }
</script>
@endsection