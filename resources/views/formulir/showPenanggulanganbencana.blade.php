@extends('layout.formulir-show')
@section('menu-title', 'Formulir Permintaan')
@section('form-title', 'Kegiatan Penanggulangan Bencana')

@section('form')
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