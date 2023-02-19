@extends('layout.formulir')
@section('menu-title', 'Formulir Permintaan')
@section('form-title', 'Layanan Bertarif PNBP Sesuai dengan PP No.47 Tahun 2018')

@section('form')
        {{-- Start data permintaan  --}}
            @foreach ($datapermintaan as $item)
                <input type="hidden" required="" name="id_df_{{ $item->jenis_data }}[]" value={{ "$item->id" }}>
                <div>
                    @if($item->jenis_data == "dataharihujan")
                    <h4 class="bold">Data hari hujan</h4>
                    @elseif($item->jenis_data == "datacurahhujanratarata")
                    <h4 class="bold">Data curah hujan rata-rata</h4>
                    @elseif($item->jenis_data == "datacurahhujanmaksimum")
                    <h4 class="bold">Data curah hujan maksimum</h4>
                    @elseif($item->jenis_data == "datacurahhujanbulanan")
                    <h4 class="bold">Data curah hujan bulanan</h4>
                    @elseif($item->jenis_data == "datasuhuudararatarata")
                    <h4 class="bold">Data suhu udara rata-rata</h4>
                    @elseif($item->jenis_data == "datasuhuudaramaksimum")
                    <h4 class="bold">Data suhu udara maksimum</h4>
                    @elseif($item->jenis_data == "datasuhuudaraminimum")
                    <h4 class="bold">Data suhu udara minimum</h4>
                    @elseif($item->jenis_data == "datakelembapanudararatarata")
                    <h4 class="bold">Data kelembapan udara rata-rata</h4>
                    @elseif($item->jenis_data == "datakelembapanudaramaksimum")
                    <h4 class="bold">Data kelembapan udara maksimum</h4>
                    @elseif($item->jenis_data == "datakelembapanudaraminimum")
                    <h4 class="bold">Data kelembapan udara minimum</h4>
                    @elseif($item->jenis_data == "datakelembapanudararatarata")
                    <h4 class="bold">Data kelembapan udara rata-rata</h4>
                    @elseif($item->jenis_data == "datakelembapanudaramaksimum")
                    <h4 class="bold">Data kelembapan udara maksimum</h4>
                    @elseif($item->jenis_data == "datakelembapanudaraminimum")
                    <h4 class="bold">Data kelembapan udara minimum</h4>
                    @elseif($item->jenis_data == "datakecepatandanarahangin")
                    <h4 class="bold">Data kecepatan dan arah angin</h4>
                    @elseif($item->jenis_data == "datakecepatananginmaksimum")
                    <h4 class="bold">Data kecepatan angin maksimum</h4>
                    @elseif($item->jenis_data == "datalamapenyinaranmatahari")
                    <h4 class="bold">Data lama penyinaran matahari</h4>
                    @elseif($item->jenis_data == "dataprakiraanmusim")
                    <h4 class="bold">Data prakiraan musim</h4>
                    @elseif($item->jenis_data == "dataklasifikasiiklim")
                    <h4 class="bold">Data klasifikasi iklim</h4>
                    @elseif($item->jenis_data == "dataradiasimatahari")
                    <h4 class="bold">Data radiasi matahari</h4>
                    @endif
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        @if($item->jenis_data != "datapetir" and $item->jenis_data != "unsurcuacalainnya")
                            <div class="col-sm-6">
                                <div class="spacer-5"></div>
                                <strong>Lokasi</strong>
                                <textarea disabled class="form-control autosize" style="width: 100%; height: 28px" 
                                name="lokasi_{{ $item->jenis_data }}[]" required="">{{ $item->lokasi }}</textarea>
                                <div class="spacer-10"></div>
                            </div>
                            <div class="col-sm-3">
                                <strong>Dari</strong>
                                <input disabled class="form-control" size="16" type="date" required=""
                                name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}"/>
                                <div class="spacer-10"></div>
                            </div>
                            <div class="col-sm-3">
                                <strong>Sampai</strong>
                                <input disabled class="form-control" size="16" type="date" required=""
                                name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}"/>
                            </div>
                        <div class="spacer-15"></div>
                        @endif
                    </div>
                </div>
            @endforeach

            @foreach($datapermintaan as $item)
                @if($item->jenis_data == 'datapetir')
                <h4 class="bold">Data petir</h4>
                <div class="col-sm-12">
                    <div class="spacer-5"></div>
                    <strong>Deskripsi</strong>
                    <textarea required="" disabled class="form-control autosize" style="width: 48% ; height: 28px"
                        name="deskripsi_{{ $item->jenis_data }}">{{ $item->desk_petir }}</textarea>
                </div>
                        @foreach ($datapermintaan->where('jenis_data','datapetir') as $item)
                        <input type="hidden" required="" name="id_df_{{ $item->jenis_data }}[]" value={{ "$item->id" }}>
                        <div class="row">
                            <div class="col-sm-12">
                                    <div class="spacer-5"></div>
                                    <div class="col-sm-6">
                                        <strong>Lokasi</strong>
                                        <textarea disabled class="form-control autosize" style="width: 100% ; height: 28px"
                                        name="lokasi_{{ $item->jenis_data }}[]" required="">{{ $item->lokasi }}</textarea>
                                        <div class="spacer-10"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <strong>Dari</strong>
                                        <input disabled class="form-control" size="16" type="date"
                                                required="" name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}">
                                        <div class="spacer-10"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <strong>Sampai</strong>
                                        <input disabled class="form-control" size="16" type="date"
                                                required="" name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}">
                                    </div>
                            </div>
                        </div>
                        @endforeach
                        @break
                </div>
                @endif
            @endforeach

            @foreach($datapermintaan as $item)
                @if($item->jenis_data == 'unsurcuacalainnya')
                <div class="spacer-15"></div>
                <h4 class="bold">Unsur cuaca lainnya</h4>
                <div class="col-sm-12">
                    <div class="spacer-5"></div>
                    <strong>Deskripsi</strong>
                    <textarea required="" disabled class="form-control autosize" style="width: 48% ; height: 28px"
                        name="deskripsi_{{ $item->jenis_data }}">{{ $item->unsurcuacalain }}</textarea>
                </div>
                        @foreach ($datapermintaan->where('jenis_data','unsurcuacalainnya') as $item)
                        <input type="hidden" required="" name="id_df_{{ $item->jenis_data }}[]" value={{ "$item->id" }}>
                        <div class="row">
                            <div class="col-sm-12">
                                    <div class="spacer-5"></div>
                                    <div class="col-sm-6">
                                        <strong>Lokasi</strong>
                                        <textarea disabled class="form-control autosize" style="width: 100% ; height: 28px"
                                        name="lokasi_{{ $item->jenis_data }}[]" required="">{{ $item->lokasi }}</textarea>
                                        <div class="spacer-10"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <strong>Dari</strong>
                                        <input disabled class="form-control" size="16" type="date"
                                                required="" name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}">
                                        <div class="spacer-10"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <strong>Sampai</strong>
                                        <input disabled class="form-control" size="16" type="date"
                                                required="" name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}">
                                    </div>
                            </div>
                        </div>
                        @endforeach
                        @break
                </div>
                @endif
            @endforeach
            {{-- End data permintaan --}}
        {{-- End data permintaan --}}
        <div class="spacer-40"></div>
        <hr>
        <div class="spacer-20"></div>
        {{-- Start syarat permohonan data --}}
            {{-- <div class="row">
                <div class="col-sm-12">
                    <h4 class="bold">Syarat permohonan data</h4>
                </div>
            </div>
            <div class="spacer-10"></div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Surat pengantar</label>
                    </div>
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
            </div> --}}
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
                    <textarea disabled name="deskripsi" disabled class="form-control" style="height: 150px;">{{ $formulir->deskripsi }}</textarea>
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
            <div class="col-sm-6">
                <a onclick="history.back()" class="btn btn-default btn-lg"><i class="fa fa-arrow-left"></i></a>
            </div>
        </div>
    
@endsection