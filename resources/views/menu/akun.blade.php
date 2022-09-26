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
                <label>Nama</label>
            </div>
            <div class="col-sm-9">
                <input type="text" aria-required="true" name="nama" required="" class="form-control">
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-3">
                <label>Asal instansi</label>
            </div>
            <div class="col-sm-9">
                <input type="text" aria-required="true" name="instansi" required="" class="form-control">
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-3">
                <label>Nomor telepon</label>
            </div>
            <div class="col-sm-9">
                <input type="text" aria-required="true" name="telepon" required="" class="form-control">
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-lg-3">
                <label for="fcid-4">KTP</label>
            </div>
            <div class="col-lg-9">
                <img class="media-object" src="../../style/images/dummy-ktp.png"
                    style="float: left; margin: 0px 10px 10px 0px; width: 400px; height: 200px;">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-9">
                <input type="file" class="required">
                <div class="helper-text-box">
                    <div class="form-helper">disarankan sensor bagian NIK</div>
                </div>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <button type="submit" class="btn btn-default pull-left">Edit</button>
            </div>
        </div>
    </div>
@endsection
