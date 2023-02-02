{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
                                    placeholder="Kata sandi" id="fc-id-2" tabindex="2" name="password" required><input
                                    class="form-control showpassword-hint" type="text">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>
                    <div class="spacer-15"></div>
                    {{-- Password konfirmasi--}}
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Ulangi kata sandi</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="showpassword-wrap"><input required class="form-control" type="password"
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
                            <input required name="ktp" type="file" accept="image/png, image/jpeg">
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
                    <div id="div_ktm"></div>
                    <a class="btn btn-default btn-lg pull-left" href="{{ route('login') }}">
                        LogIn
                    </a>
                    <button type="submit" class="btn btn-default btn-lg pull-right">Daftar</button>
                </form>
            </div>
        </div>
    </div>
<script>
    // toggle deskripsi kategori
    const div_desk = document.getElementById("desk");
    const div_ktm = document.getElementById("div_ktm");
    function toggle(value) {
        if(value == "Instansi Vertikal" || value == "Lainnya"){
            $('#field_deskripsi').remove();
            $('#field_ktm').remove();
            var newField = document.createElement("div");
            newField.setAttribute("id", "field_deskripsi");
            newField.innerHTML = '<div class="spacer-15"></div>\
                        <div class="row">\
                            <div class="col-lg-4">\
                                <label for="fcid-1">Deskripsi</label>\
                            </div>\
                            <div class="col-lg-8">\
                                <input aria-required="true" class="form-control" type="text"\
                                    placeholder="Deskripsi Kategori" id="desk_kategori" name="desk_kategori">\
                            </div>\
                        </div>';
                        div_desk.append(newField);   
        }else if(value == "Mahasiswa"){
            $('#field_ktm').remove();
            $('#field_deskripsi').remove();
            var newField = document.createElement("div");
            newField.setAttribute("id", "field_ktm");
            newField.innerHTML = '<div class="spacer-15"></div>\
                        <div class="row">\
                            <div class="col-lg-4">\
                                <label>KTM</label>\
                            </div>\
                            <div class="col-lg-8">\
                                <input required name="ktm" type="file" accept="image/png, image/jpeg">\
                                <div class="helper-text-box">\
                                    <div class="form-helper-header">Format\
                                        file:<code>.png, .jpeg</code>\
                                    </div>\
                                    <div class="helper-text-box">\
                                        <div class="form-helper">Kartu Tanda Mahasiswa</div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>';
                    div_ktm.append(newField); 
        }
        
        else {
            $('#field_deskripsi').remove();
            $('#field_ktm').remove();
        }
    }
</script>
@endsection