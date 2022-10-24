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
                            <span class="text-muted">Kegiatan Pendidikan dan Penelitian non Komersial</span>
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ url('pendidikan/' . $formulir->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <div class="spacer-10"></div>
                                    {{-- Start data diri --}}
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4 class="bold">Data diri</h4>
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Nama kegiatan</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" aria-required="true" name="nama_kegiatan" value="{{ $formulir->nama_kegiatan }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Nomor telepon</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input disabled type="telepon" name="telepon" class="form-control" value="{{ $formulir->telepon }}">
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input disabled type="email" name="email" class="form-control" name="email" value="{{ $formulir->email }}">
                                        </div>
                                    </div> 
                                    {{-- End data diri --}}

                                    <div class="spacer-40"></div>
                                    <hr>
                                    <div class="spacer-20"></div>
                                    {{-- Start data permintaan  --}}
                                    @foreach ($datapermintaan as $item)
                                    <div class="spacer-10"></div>
                                    <input type="hidden" name="id_df_{{ $item->jenis_data }}[]" value={{ "$item->id" }}>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            @if($item->jenis_data == "datapetir")
                                                <h4 class="bold">Data petir</h4>
                                            @elseif($item->jenis_data == "dataharihujan")
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
                                            @elseif($item->jenis_data == "unsurcuacalainnya")
                                                <h4 class="bold">Unsur cuaca lainnya</h4>
                                            @endif
                                        </div>
                                        <div>
                                            <div class="row group col-sm-12 ">
                                                    @if($item->jenis_data == "datapetir")
                                                        <div class="col-sm-6">
                                                            <strong>Lokasi</strong>
                                                            <textarea class="form-control autosize" style="width: 100% ; height: 90px"
                                                            name="lokasi_{{ $item->jenis_data }}[]">{{ $item->lokasi }}</textarea>
                                                            <div class="spacer-10"></div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div>
                                                                <strong>Latitude</strong>
                                                                <input type="text" aria-required="true" name="latitude_{{ $item->jenis_data }}[]" value="{{ $item->latitude }}"
                                                                    class="form-control">
                                                                    <div class="spacer-10"></div>
                                                            </div>
                                                            <div>
                                                                <strong>Longitude</strong>
                                                                <input type="text"
                                                                    name="longitude_{{ $item->jenis_data }}[]" value="{{ $item->longitude }}" class="form-control">
                                                            </div>
                                                            <div class="spacer-10"></div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <strong>Dari</strong>
                                                            <input class="form-control" size="16" type="date" name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}">
                                                            <div class="spacer-10"></div>
                                                            <strong>Sampai</strong>
                                                            <input class="form-control" size="16" type="date"
                                                            name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}">
                                                        </div>
                                                    @elseif($item->jenis_data == 'unsurcuacalainnya')
                                                    <div class="row col-sm-12">
                                                        <div class="spacer-10"></div>
                                                        <div class="row col-sm-12">
                                                            <div class="col-sm-12">
                                                                <textarea class="form-control autosize" style="width: 48% ; height: 28px"
                                                                    name="deskripsi_{{ $item->jenis_data }}[]">{{ $item->unsurcuacalain }}</textarea>
                                                            </div>
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="spacer-5"></div>
                                                                        <div class="col-sm-6">
                                                            <strong>Lokasi</strong>
                                                            <textarea class="form-control autosize" style="width: 100% ; height: 28px"
                                                            name="lokasi_{{ $item->jenis_data }}[]">{{ $item->lokasi }}</textarea>
                                                                <div class="spacer-10"></div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <strong>Dari</strong>
                                                            <input class="form-control" size="16" type="date"
                                                                 name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}">
                                                            <div class="spacer-10"></div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <strong>Sampai</strong>
                                                            <input class="form-control" size="16" type="date"
                                                                 name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}">
                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="spacer-10"></div>
                                                    </div>
                                                    @else
                                                        <div class="col-sm-6">
                                                            <strong>Lokasi</strong>
                                                            <textarea class="form-control autosize" style="width: 100% ; height: 28px"
                                                            name="lokasi_{{ $item->jenis_data }}[]">{{ $item->lokasi }}</textarea>
                                                                <div class="spacer-10"></div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <strong>Dari</strong>
                                                            <input class="form-control" size="16" type="date"
                                                                 name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}">
                                                            <div class="spacer-10"></div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <strong>Sampai</strong>
                                                            <input class="form-control" size="16" type="date"
                                                                 name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}">
                                                        </div>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    @endforeach
                                    {{-- End data permintaan --}}
                                    <div class="spacer-40"></div>
                                    <hr>
                                    <div class="spacer-20"></div>
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
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Upload surat pernyataan baru</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="hidden" name="old_file" value="{{ $formulir->surat_pernyataan }}">
                                                    <input type="file" accept="application/pdf" name="surat_pernyataan">
                                                    <div class="helper-text-box">
                                                        <div class="form-helper-header">Format
                                                            file:<code>.pdf</code>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="spacer-10"></div>
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
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Upload surat pernyataan baru</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="hidden" name="old_file" value="{{ $formulir->surat_pernyataan }}">
                                                    <input type="file" accept="application/pdf" name="surat_pernyataan">
                                                    <div class="helper-text-box">
                                                        <div class="form-helper-header">Format
                                                            file:<code>.pdf</code>
                                                        </div>
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
                                                <textarea name="deskripsi" class="form-control" style="height: 150px;">{{ $formulir->deskripsi }}</textarea>
                                                <div class="helper-text-box">
                                                    <div class="form-helper">Silahkan masukkan deskripsi jika tidak ada
                                                        pilihan di formulir</div>
                                                </div><!-- End .helper-text-box -->
                                            </div>
                                        </div>
                                        {{-- End deskripsi permintaan data --}}
                                        <div class="spacer-40"></div>
                                        <hr>
                                        <div class="spacer-20"></div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a onclick="history.back()" class="btn btn-default btn-lg"><i class="fa fa-arrow-left"></i></a>
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-default btn-lg pull-right">Perbarui</button>
                                            </div>
                                        </div>
                                    <div class="spacer-40"></div>
                                     </form>
                                    {{-- End data dan informasi yang dibutuhkan --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection