@extends('layout.master')
@section('menu-title', 'Akun')
@section('akun', 'page-arrow active-page')
@section('content')
    <div class="inner-padding">
        <div class="row">
            <div class="col-sm-3">
                <h4 class="bold">Data diri</h4>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-3">
                <p>Nama</p>
            </div>
            <div class="col-sm-4">
                <label>{{ Auth::user()->name }}</label>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-3">
                <p>Asal instansi</p>
            </div>
            <div class="col-sm-4">
                <label>{{ Auth::user()->instansi }}</label>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-3">
                <p>Kategori</p>
            </div>
            <div class="col-sm-4">
                <label>{{ Auth::user()->kategori }}</label>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-3">
                <p>Deskripsi kategori</p>
            </div>
            <div class="col-sm-4">
                <label>{{ Auth::user()->desk_kategori }}</label>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-3">
                <p>Nomor whatsapp</p>
            </div>
            <div class="col-sm-4">
                <label>{{ Auth::user()->no_wa }}</label>
            </div>
        </div>
        <div class="spacer-10"></div>
        {{-- @foreach ($user as $item) --}}
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <a class="btn btn-default pull-left" data-target="#exampleModal" data-toggle="modal" href="#exampleModal">
                    Perbarui akun</i></a>
                @include('modal.edit-user')
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
@endsection
