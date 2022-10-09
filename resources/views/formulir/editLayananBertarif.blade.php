@extends('layout.master')
@section('menu-title', 'Formulir Permintaan')

@section('content')
<div class="inner-padding">
    <div class="row">
        <div class="col-sm-12">
            <div class="tab-content">
                <div id="content-tab-3-a" class="tab-pane active">
                    <div class="subheading">
                        <h2>Formulir Permintaan</h2>
                            <div class="spacer-5"></div>
                        <h3>
                            <span class="text-muted">Layanan Bertarif PNBP sesuai dengan PP No.47 Tahun 2018</span>
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('bertarif.store') }}" method="POST">
                                @csrf
                                    {{-- Start data permintaan  --}}
                                    
                                    @foreach ($datapermintaan as $item)
                                    @if($item->jenis_data == "data hari hujan")
                                       <h4 class="bold">Data hari hujan</h4>
                                    @elseif($item->jenis_data == "data curah hujan rata-rata")
                                        <h4 class="bold">Data curah hujan rata-rata</h4>
                                    @endif
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Lokasi</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="lokasi" class="form-control" value="{{ $item->lokasi }}">
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Tanggal</label>
                                        </div>
                                        <div>
                                            <div class="col-sm-2">
                                                <input class="form-control" size="16" type="date"
                                                name="tgl_dari_petir[0]" required="" value="{{ $item->tgl_dari }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-1"><label>Sampai</label></div>
                                        <div>
                                            <div class="col-sm-2">
                                                <input class="form-control" size="16" type="date"
                                                name="tgl_dari_petir[0]" required="" value="{{ $item->tgl_sampai  }}">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="spacer-20"></div>
                                    @endforeach
                                    {{-- End data permintaan --}}
                                    <div class="spacer-40"></div>
                                    <hr>
                                    <div class="spacer-20"></div>
                                    {{-- Start syarat permohonan data --}}
                                    @foreach ($formulir as $item)
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="bold">Syarat permohonan data</h4>
                                            </div>
                                        </div>
                                        <div class="spacer-10"></div>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Surat pengantar</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a download href="{{ $item->surat_pengantar }}">fileee</a>
                                                    <div class="helper-text-box">
                                                        {{-- <a value="{{ $item->surat_pengantar }}">file</a> --}}
                                                        {{-- <input type="text" name="surat_pengantar" id="" value="{{ $item->jenis_permintaan }}"> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Upload surat pengantar baru</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="file" accept="application/pdf" name="surat_pengantar">
                                                    <div class="helper-text-box">
                                                        <div class="form-helper-header">Format
                                                            file:<code>.pdf</code>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- End syarat permohonan data --}}
                                    @endforeach
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
                                            <textarea name="deskripsi" value="{{ old('deskripsi') }}" class="form-control" style="height: 150px;"></textarea>
                                            <div class="helper-text-box">
                                                <div class="form-helper">Silahkan masukkan deskripsi jika tidak ada
                                                    pilihan di formulir</div>
                                            </div><!-- End .helper-text-box -->
                                        </div>
                                    </div>

                                    {{-- End deskripsi permintaan data --}}


                                    {{-- End data dan informasi yang dibutuhkan --}}

                                    <div class="spacer-40"></div>
                                    <hr>
                                    <div class="spacer-20"></div>
                                    <div class="row">
                                        {{-- <div class="col-sm-3"><label><input type="checkbox" name="html"
                                                    required=""><span></span>
                                                Accept our <a href="#" class="boldunderline">terms</a>?</label>
                                        </div> --}}
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-default pull-right">Kirim</button>
                                        </div>
                                    </div>
                                <div class="spacer-40"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection