@extends('layout.formulir-show')
@section('menu-title', 'Formulir Permintaan')
@section('form-title', 'Kegiatan Pertahanan dan Keamanan')

@section('form')
    {{-- Start syarat permohonan data --}}
        <div class="row">
            <div class="col-sm-12">
                <h4 class="bold">Syarat permohonan data</h4>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <label>Surat Perintah dari pimpinan Instansi yang membidangi pertahanan/keamanan</label>
                </div>
                <div class="col-sm-6">
                    <div class="file-bar">
                        <a href="{{ asset('storage/dokumen/' . $formulir->surat_perintah) }}" target="_blank">
                            <div class="file-bar-icon"> 
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="file-bar-info">
                                <h5>Unduh file</h5>
                                <span class="label label-default">.pdf</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- End syarat permohonan data --}}
        
        <div class="spacer-40"></div>
        <hr>
        <div class="spacer-20"></div>

        {{-- Start deskripsi permintaan data --}}
        <div class="row">
            <div class="col-sm-12">
                <h4 class="bold">Deskripsi permintaan data</h4>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row col-sm-12">
            <div class="col-sm-12">
                <textarea disabled name="deskripsi" class="form-control" style="height: 150px;">{{ $formulir->deskripsi }}</textarea>
                <div class="helper-text-box">
                    <div class="form-helper">Silahkan masukkan deskripsi jika tidak ada
                        pilihan di formulir</div>
                </div><!-- End .helper-text-box -->
            </div>
        </div>
    {{-- End deskripsi permintaan data --}}
@endsection