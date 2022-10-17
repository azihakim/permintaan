@extends('layout.master')
@section('form-title', 'Layanan Bertarif PNBP sesuai dengan PP No.47 Tahun 2018aaa')

@section('content')
    <div class="inner-padding">
        <form>
            @csrf
            <div class="row">
                <div class="col-sm-3">
                    <label>Status formulir</label>
                </div>
                <div class="col-sm-9">
                    {{-- <input type="hidden" value="{{ $formulir->id }}" name="id_form"> --}}

                    <div class="simpelselect-container" style="width: 250px">
                        <div class="simpelselect-inner">
                            <div class="simpleselect-btn"><i class="fa fa-caret-down"></i></div>
                        </div>
                        <select class="form-control simpleselect" onchange="toggle(this.value)">
                            @if ($formulir->status_form == '1'){
                                <option value="1" class="bold">Permintaan baru</option>
                            }
                            @elseif ($formulir->status_form == '2'){
                                <option value="2" class="bold text-danger">Di terima</option>
                            }
                            @endif

                            <option value="1">Permintaan baru</option>
                            <option value="2">Di terima</option>
                            <option value="3">Di batalkan</option>
                            <option value="4">Menunggu pembayaran</option>
                            <option value="5">Pembayaran ulang </option>
                            <option value="6">Selesai</option>
                        </select>
                        
                    </div>
                </div>
            </div>
            <div id="data" style="display:none;">
                <div class="spacer-15"></div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Data permintaan</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="file" required>
                    </div>
                </div>
            </div>
            <div id="bill" style="display:none;">
                <div class="spacer-15"></div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Bill pembayaran</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="file" required>
                    </div>
                </div>
            </div>
            <div id="deskripsi" style="display:none;">
                <div class="spacer-15"></div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Deskripsi</label>
                    </div>
                    <div class="col-sm-7">
                        <textarea class="form-control" required></textarea>
                    </div>
                </div>
            </div>
            <div class="spacer-15"></div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-default pull-left">Kirim</button>
                </div>
            </div>
            <div class="spacer-20"></div>
            <hr>
            <div class="spacer-15"></div>
            <div class="row">
                <div class="col-sm-3">
                    <label>Bill pembayaran permintaan</label>
                </div>
                <div class="col-sm-9">
                    <a href="" class="underline text-primary">Billpembayaran.pdf</a>
                </div>
            </div>

            <div class="spacer-20"></div>
            <hr>
        </form>
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
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" aria-required="true" name="nama" disabled value="{{ $formulir->nama }}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="spacer-10"></div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>Nomor telepon</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="telepon" name="telepon" disabled class="form-control" value="{{ $formulir->telepon }}">
                                            </div>
                                        </div>
                                        <div class="spacer-10"></div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" disabled class="form-control" name="email" value="{{ $formulir->email }}">
                                            </div>
                                        </div> 
                                        {{-- End data diri --}}
    
                                        <div class="spacer-40"></div>
                                        <hr>
                                        <div class="spacer-20"></div>
                                        {{-- Start data permintaan  --}}
                                        @foreach ($datapermintaan as $item)
                                        <div class="spacer-10"></div>
                                        <input type="hidden" disabled name="id_df_{{ $item->jenis_data }}[]" value={{ "$item->id" }}>
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
                                                                <textarea disabled class="form-control autosize" style="width: 100% ; height: 90px"
                                                                name="lokasi_{{ $item->jenis_data }}[]">{{ $item->lokasi }}</textarea>
                                                                <div class="spacer-10"></div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div>
                                                                    <strong>Latitude</strong>
                                                                    <input disabled type="text" aria-required="true" name="latitude_{{ $item->jenis_data }}[]" value="{{ $item->latitude }}"
                                                                        class="form-control">
                                                                        <div class="spacer-10"></div>
                                                                </div>
                                                                <div>
                                                                    <strong>Longitude</strong>
                                                                    <input disabled type="text"
                                                                        name="longitude_{{ $item->jenis_data }}[]" value="{{ $item->longitude }}" class="form-control">
                                                                </div>
                                                                <div class="spacer-10"></div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <strong>Dari</strong>
                                                                <input disabled class="form-control" size="16" type="date" name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}">
                                                                <div class="spacer-10"></div>
                                                                <strong>Sampai</strong>
                                                                <input disabled class="form-control" size="16" type="date"
                                                                name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}">
                                                            </div>
                                                        @elseif($item->jenis_data == 'unsurcuacalainnya')
                                                        <div class="row col-sm-12">
                                                            <div class="spacer-10"></div>
                                                            <div class="row col-sm-12">
                                                                <div class="col-sm-12">
                                                                    <textarea disabled class="form-control autosize" style="width: 48% ; height: 28px"
                                                                        name="deskripsi_{{ $item->jenis_data }}[]">{{ $item->unsurcuacalain }}</textarea>
                                                                </div>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="spacer-5"></div>
                                                                            <div class="col-sm-6">
                                                                <strong>Lokasi</strong>
                                                                <textarea class="form-control autosize" style="width: 100% ; height: 28px"
                                                                name="lokasi_{{ $item->jenis_data }}[]" disabled>{{ $item->lokasi }}</textarea>
                                                                    <div class="spacer-10"></div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <strong>Dari</strong>
                                                                <input class="form-control" size="16" type="date"
                                                                        disabled name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}">
                                                                <div class="spacer-10"></div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <strong>Sampai</strong>
                                                                <input class="form-control" size="16" type="date"
                                                                        disabled name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}">
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
                                                                name="lokasi_{{ $item->jenis_data }}[]" disabled>{{ $item->lokasi }}</textarea>
                                                                    <div class="spacer-10"></div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <strong>Dari</strong>
                                                                <input class="form-control" size="16" type="date"
                                                                        disabled name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}">
                                                                <div class="spacer-10"></div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <strong>Sampai</strong>
                                                                <input class="form-control" size="16" type="date"
                                                                        disabled name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}">
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
                                                    <div class="col-sm-3">
                                                        <label>Surat pengantar</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <embed src="dokumen/{{ $formulir->surat_pengantar }}" style="width: 100%">
                                                            <a href="{{ asset('storage/dokumen/' . $formulir->surat_pengantar) }}">download</a>
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
    
    
                                        {{-- End data dan informasi yang dibutuhkan --}}
    
                                        <div class="spacer-40"></div>
                                        <hr>
                                        <div class="spacer-20"></div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a onclick="history.back()" class="btn btn-default btn-lg"><i class="fa fa-arrow-left"></i></a>
                                            </div>
                                        </div>
                                    <div class="spacer-40"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                <form data-asf-time="10" data-asf-expireafter="1" id="autosavethisform">
                                    @csrf
                                    <fieldset>
                                        <legend>Formulir</legend>
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
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" aria-required="true" name="instansi" required=""
                                                    class="form-control">
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
                                        {{-- End data diri --}}

                                        <div class="spacer-40"></div>
                                        <hr>
                                        <div class="spacer-20"></div>

                                        {{-- Start data dan informasi yang dibutuhkan --}}
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="bold">Data dan informasi yang di butuhkan</h4>
                                            </div>
                                        </div>
                                        <div class="spacer-10"></div>
                                        {{-- Start jenis data --}}
                                        <div class="row col-sm-12">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Jenis data</h4>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="stacked-labels">
                                                    <label><input type="checkbox" name="tags" value="html5"
                                                            onclick="showhide('datapetir')"><span></span>
                                                        Data petir</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('dataharihujan')"
                                                            value="css3"><span></span>
                                                        Data hari hujan</label>
                                                    <label><input type="checkbox" name="tags" value="css3"
                                                            onclick="showhide('datacurahhujanratarata')"><span></span>
                                                        Data curah hujan rata-rata</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datacurahhujanmaksimum')"
                                                            value="css3"><span></span>
                                                        Data curah hujan maksimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datacurahhujanbulanan')"
                                                            value="css3"><span></span>
                                                        Data curah hujan bulanan</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datasuhuudararatarata')"
                                                            value="css3"><span></span>
                                                        Data suhu udara rata-rata</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datasuhuudaramaksimum')"
                                                            value="css3"><span></span>
                                                        Data suhu udara maksimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datasuhuudaraminimum')"
                                                            value="css3"><span></span>
                                                        Data suhu udara minimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datakelembapanudararatarata')"
                                                            value="html5"><span></span>
                                                        Data kelembapan udara rata-rata</label>
                                                </div>
                                                <div class="spacer-10"></div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="stacked-labels">
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datakelembapanudaramaksimum')"
                                                            value="css3"><span></span>
                                                        Data kelembapan udara maksimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datakelembapanudaraminimum')"
                                                            value="css3"><span></span>
                                                        Data kelembapan udara minimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datakecepatandanarahangin')"
                                                            value="css3"><span></span>
                                                        Data kecepatan dan arah angin</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datakecepatananginmaksimum')"
                                                            value="html5"><span></span>
                                                        Data kecepatan angin maksimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('datasuhuudaraminimum')"
                                                            value="css3"><span></span>
                                                        Data lama penyinaran matahari</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('dataprakiraanmusim')"
                                                            value="css3"><span></span>
                                                        Data prakiraan musim</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('dataklasifikasiiklim')"
                                                            value="css3"><span></span>
                                                        Data klasifikasi iklim</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('dataradiasimatahari')"
                                                            value="css3"><span></span>
                                                        Data radiasi matahari</label>
                                                    <label><input type="checkbox" name="tags"
                                                            onclick="showhide('unsurcuacalainnya')"
                                                            value="css3"><span></span>
                                                        Unsur cuaca lainnya</label>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End jenis data --}}

                                        <div class="spacer-40"></div>
                                        <hr>
                                        <div class="spacer-20"></div>

                                        {{-- Start lokasi dan tanggal data --}}
                                        <div class="row col-sm-12">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data petir</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>

                                            <div class="row group col-sm-12 ">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100% ; height: 10px"
                                                        placeholder="Lokasi"></textarea>
                                                    <div class="spacer-10"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="input-group date" id="datepicker-form-2"
                                                        style="width:100%">
                                                        <input class="form-control" size="16" type="text"
                                                            required="" placeholder="Dari">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-calendar-o"></i></span>
                                                    </div>
                                                    <div class="spacer-5"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="input-group date" id="datepicker-form-2"
                                                        style="width:100%">
                                                        <input class="form-control" size="16" type="text"
                                                            required="" placeholder="Sampai">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-calendar-o"></i></span>
                                                    </div>
                                                </div>
                                                <div class="spacer-25"></div>
                                            </div>
                                            <div class="row col-sm-12">
                                                <div class="col-sm-12">
                                                    <div class="center">
                                                        <button class="btn btn-default btn-tambah">
                                                            <i class="fa fa-plus-square"></i>
                                                            Tambah</button>
                                                        <div class="center">
                                                            <button class="btn btn-danger btn-hapus" style="display:;"
                                                                onclick="delete_input()">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End lokasi dan tanggal data --}}

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
                                                    <label>Identitas (KTP)</label>
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
                                                <textarea name="" class="form-control" style="height: 150px;"></textarea>
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
                                            <div class="col-sm-3"><label><input type="checkbox" name="html"
                                                        required=""><span></span>
                                                    Accept our <a href="#" class="boldunderline">terms</a>?</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-default pull-right">Send</button>
                                            </div>
                                        </div>


                                    </fieldset>
                                    <div class="spacer-40"></div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Toggle show element input --}}
    <script>
        function toggle(value) {
            var terima = document.getElementById("deskripsi");
            var batal = document.getElementById("deskripsi");
            var selesai = document.getElementById("data");
            var pembayaran = document.getElementById("bill");
            var pembayaranulang = document.getElementById("bill");

            if (value == "diterima") {
                terima.style.display = "block";
            } else if (value == "dibatalkan") {
                batal.style.display = "block";
            } else {
                batal.style.display = "none";
            }
            if (value == "selesai") {
                selesai.style.display = "block";
            } else {
                selesai.style.display = "none";
            }
            if (value == "pembayaran") {
                pembayaran.style.display = "block";
            } else if (value == "pembayaranulang") {
                pembayaranulang.style.display = "block";
            } else {
                pembayaranulang.style.display = "none";
            }
        }
    </script>
@endsection
