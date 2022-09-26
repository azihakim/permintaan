@extends('layout.formulir')
@section('form-title', 'Kegiatan Pemerintahan Pusat atau Daerah')

@section('datadiri')
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
            <input type="text" aria-required="true" name="instansi" required="" class="form-control">
        </div>
    </div>
    <div class="spacer-10"></div>
    <div class="row">
        <div class="col-sm-3">
            <label>Nomor telepon</label>
        </div>
        <div class="col-sm-9">
            <input type="telepon" name="telepon" class="form-control">
        </div>
    </div>
    <div class="spacer-10"></div>
    <div class="row">
        <div class="col-sm-3">
            <label>Email</label>
        </div>
        <div class="col-sm-9">
            <input type="email" name="email" class="form-control">
        </div>
    </div>
@endsection

@section('syarat')
    <div class="row">
        <div class="col-sm-12">
            <h4 class="bold">Syarat permohonan data</h4>
        </div>
    </div>
    <div class="spacer-10"></div>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                <label>Surat perjanjian kerjasama dengan BMKG tentang kebutuhan
                    informasi MKKuG</label>
            </div>
            <div class="col-sm-6">
                <input type="file">
            </div>
        </div>

        <div class="spacer-10"></div>

        <div class="row">
            <div class="col-sm-6">
                <label>Surat pengantar</label>
            </div>
            <div class="col-sm-6">
                <input type="file">
            </div>
        </div>

    </div>
@endsection
