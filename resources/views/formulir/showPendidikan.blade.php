@extends('layout.formulir-show')
@section('menu-title', 'Formulir Permintaan')
@section('form-title', 'Kegiatan Pendidikan dan Penelitian non Komersial')

@section('form')
    {{-- Start syarat permohonan data --}}
        <div class="row">
            <div class="col-sm-12">
                <h4 class="bold">Syarat permohonan data</h4>
            </div>
        </div>
        <div class="spacer-10"></div>
        {{-- Surat proposal --}}
            <div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Surat proposal</label>
                        </div>
                        <div class="col-sm-6">
                            <div class="file-bar">
                                <a href="{{ asset('storage/dokumen/' . $formulir->surat_proposal) }}" target="_blank">
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
            </div>

        <div class="spacer-10"></div>
        {{-- Surat pengantar --}}
            <div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Surat pengantar</label>
                        </div>
                        <div class="col-sm-6">
                            <div class="file-bar">
                                <a href="{{ asset('storage/dokumen/' . $formulir->surat_pengantar) }}" target="_blank">
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
            </div>
        
        <div class="spacer-10"></div>
        {{-- Surat pernyataan --}}
            <div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Surat pernyataan</label>
                        </div>
                        <div class="col-sm-6">
                            <div class="file-bar">
                                <a href="{{ asset('storage/dokumen/' . $formulir->surat_pernyataan) }}" target="_blank">
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
            </div>
    {{-- End syarat permohonan data --}}
@endsection