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
                                        @if(session('status'))
                                            <div class="alert alert-success">
                                            {{ session('status') }}
                                            </div>
                                        @endif
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
                                                <input type="text" aria-required="true" name="nama" required="" value="{{ old('nama') }}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="spacer-10"></div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>Nomor telepon</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="telepon" name="telepon" class="form-control" value="{{ old('telepon') }}">
                                            </div>
                                        </div>
                                        <div class="spacer-10"></div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="email" name="email" class="form-control" name="email" value="{{ old('email') }}">
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
                                            <div class="col-sm-4">
                                                <div class="stacked-labels">
                                                    <label><input type="checkbox" id="cb_datapetir" name="tags" onclick="toggle_datapetir()"><span></span>Data petir</label>
                                                    <label><input type="checkbox" id="cb_dataharihujan" name="tags" onclick="toggle_dataharihujan()"><span></span>Data hari hujan</label>
                                                    <label><input type="checkbox" id="cb_datacurahhujanratarata" name="tags" onclick="toggle_datacurahhujanratarata()"><span></span>Data curah hujan rata-rata</label>
                                                    <label><input type="checkbox" id="cb_datacurahhujanmaksimum" name="tags" onclick="toggle_datacurahhujanmaksimum()"><span></span>Data curah hujan maksimum</label>
                                                    <label><input type="checkbox" id="cb_datacurahhujanbulanan" name="tags" onclick="toggle_datacurahhujanbulanan()"><span></span>Data curah hujan bulanan</label>
                                                    <label><input type="checkbox" id="cb_datasuhuudararatarata" name="tags" onclick="toggle_datasuhuudararatarata()"><span></span>Data suhu udara rata-rata</label>
                                                </div>
                                                <div class="spacer-10"></div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="stacked-labels">
                                                    <label><input type="checkbox" id="cb_datasuhuudaramaksimum" name="tags" onclick="toggle_datasuhuudaramaksimum()"><span></span>Data suhu udara maksimum</label>
                                                    <label><input type="checkbox" id="cb_datasuhuudaraminimum" name="tags" onclick="toggle_datasuhuudaraminimum()"><span></span>Data suhu udara minimum</label>
                                                    <label><input type="checkbox" id="cb_datakelembapanudararatarata" name="tags" onclick="toggle_datakelembapanudararatarata()"><span></span>Data kelembapan udara rata-rata</label>
                                                    <label><input type="checkbox" id="cb_datakelembapanudaramaksimum" name="tags" onclick="toggle_datakelembapanudaramaksimum()"><span></span>Data kelembapan udara maksimum</label>
                                                    <label><input type="checkbox" id="cb_datakelembapanudaraminimum" name="tags" onclick="toggle_datakelembapanudaraminimum()"><span></span>Data kelembapan udara minimum</label>
                                                    <label><input type="checkbox" id="cb_datakecepatandanarahangin" name="tags" onclick="toggle_datakecepatandanarahangin()"><span></span>Data kecepatan dan arah angin</label>
                                                </div>
                                                <div class="spacer-10"></div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="stacked-labels">
                                                    <label><input type="checkbox" id="cb_datakecepatananginmaksimum" name="tags" onclick="toggle_datakecepatananginmaksimum()"><span></span>Data kecepatan angin maksimum</label>
                                                    <label><input type="checkbox" id="cb_datalamapenyinaranmatahari" name="tags" onclick="toggle_datalamapenyinaranmatahari()"><span></span>Data lama penyinaran matahari</label>
                                                    <label><input type="checkbox" id="cb_dataprakiraanmusim" name="tags" onclick="toggle_dataprakiraanmusim()"><span></span>Data prakiraan musim</label>
                                                    <label><input type="checkbox" id="cb_dataklasifikasiiklim" name="tags" onclick="toggle_dataklasifikasiiklim()"><span></span>Data klasifikasi iklim</label>
                                                    <label><input type="checkbox" id="cb_dataradiasimatahari" name="tags" onclick="toggle_dataradiasimatahari()"><span></span>Data radiasi matahari</label>
                                                    <label><input type="checkbox" id="cb_unsurcuacalainnya" name="tags" onclick="toggle_unsurcuacalainnya()"><span></span>Unsur cuaca lainnya</label>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End jenis data --}}

                                        <div class="spacer-40"></div>
                                        <hr>
                                        <div class="spacer-20"></div>

                                        {{-- Start lokasi dan tanggal data --}}
                                        {{-- Data petir --}}
                                        <div id="container_datapetir" name="datapetir" ></div>
                                        <div class="row col-sm-12" id="btn_datapetir" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datapetir" type="button"><i class="fa fa-plus"></i></button>
                                                    <button class="btn btn-danger" id="hapus_datapetir" type="button"><i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data hari hujan --}}
                                        <div id="container_dataharihujan"></div>
                                        <div class="row col-sm-12" id="btn_dataharihujan" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_dataharihujan" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_dataharihujan" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>
                                        
                                        {{-- Data hari hujan rata-rata --}}
                                        <div id="container_datacurahhujanratarata"></div>
                                        <div class="row col-sm-12" id="btn_datacurahhujanratarata" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datacurahhujanratarata" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datacurahhujanratarata" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data hari hujan maksimum --}}
                                        <div id="container_datacurahhujanmaksimum"></div>
                                        <div class="row col-sm-12" id="btn_datacurahhujanmaksimum" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datacurahhujanmaksimum" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datacurahhujanmaksimum" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data hari hujan bulanan --}}
                                        <div id="container_datacurahhujanbulanan"></div>
                                        <div class="row col-sm-12" id="btn_datacurahhujanbulanan" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datacurahhujanbulanan" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datacurahhujanbulanan" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data suhu udara rata-rata --}}
                                        <div id="container_datasuhuudararatarata"></div>
                                        <div class="row col-sm-12" id="btn_datasuhuudararatarata" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datasuhuudararatarata" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datasuhuudararatarata" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data suhu udara maksimum --}}
                                        <div id="container_datasuhuudaramaksimum"></div>
                                        <div class="row col-sm-12" id="btn_datasuhuudaramaksimum" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datasuhuudaramaksimum" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datasuhuudaramaksimum" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data suhu udara minimum --}}
                                        <div id="container_datasuhuudaraminimum"></div>
                                        <div class="row col-sm-12" id="btn_datasuhuudaraminimum" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datasuhuudaraminimum" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datasuhuudaraminimum" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data kelembapan udara rata-rata --}}
                                        <div id="container_datakelembapanudararatarata"></div>
                                        <div class="row col-sm-12" id="btn_datakelembapanudararatarata" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datakelembapanudararatarata" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datakelembapanudararatarata" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data kelembapan udara maksimum --}}
                                        <div id="container_datakelembapanudaramaksimum"></div>
                                        <div class="row col-sm-12" id="btn_datakelembapanudaramaksimum" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datakelembapanudaramaksimum" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datakelembapanudaramaksimum" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data kelembapan udara minimum --}}
                                        <div id="container_datakelembapanudaraminimum"></div>
                                        <div class="row col-sm-12" id="btn_datakelembapanudaraminimum" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datakelembapanudaraminimum" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datakelembapanudaraminimum" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data kecepatan dan arah angin --}}
                                        <div id="container_datakecepatandanarahangin"></div>
                                        <div class="row col-sm-12" id="btn_datakecepatandanarahangin" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datakecepatandanarahangin" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datakecepatandanarahangin" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data kecepatan angin maksimum --}}
                                        <div id="container_datakecepatananginmaksimum"></div>
                                        <div class="row col-sm-12" id="btn_datakecepatananginmaksimum" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datakecepatananginmaksimum" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datakecepatananginmaksimum" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data lama penyinaran matahari --}}
                                        <div id="container_datalamapenyinaranmatahari"></div>
                                        <div class="row col-sm-12" id="btn_datalamapenyinaranmatahari" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_datalamapenyinaranmatahari" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_datalamapenyinaranmatahari" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data prakiraan musim --}}
                                        <div id="container_dataprakiraanmusim"></div>
                                        <div class="row col-sm-12" id="btn_dataprakiraanmusim" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_dataprakiraanmusim" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_dataprakiraanmusim" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data klasifikasi iklim --}}
                                        <div id="container_dataklasifikasiiklim"></div>
                                        <div class="row col-sm-12" id="btn_dataklasifikasiiklim" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_dataklasifikasiiklim" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_dataklasifikasiiklim" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Data radiasi matahari --}}
                                        <div id="container_dataradiasimatahari"></div>
                                        <div class="row col-sm-12" id="btn_dataradiasimatahari" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_dataradiasimatahari" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_dataradiasimatahari" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
                                        </div>

                                        {{-- Unsur cuaca lainnya --}}
                                        <div id="container_unsurcuacalainnya"></div>
                                        <div class="row col-sm-12" id="btn_unsurcuacalainnya" style="display:none">
                                            <div class="col-sm-12">
                                                    <div class="spacer-10"></div>
                                                    <button class="btn btn-default" id="tambah_unsurcuacalainnya" type="button">
                                                            <i class="fa fa-plus"></i>
                                                            </button>
                                                    <button class="btn btn-danger" id="hapus_unsurcuacalainnya" type="button">
                                                                <i class="fa fa-minus"></i></button>
                                            </div>
                                            <div class="spacer-20"></div>
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
                                                    <label>Surat pengantar</label>
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

    {{-- Toggle hide/show element input --}}
    <script>
        function showhide(toggleID) {
            var toggleDiv = document.getElementById(toggleID);
            if (toggleDiv.style.display != "none") {
                toggleDiv.style.display = 'none';
            } else {
                toggleDiv.style.display = 'block';
            }
        }
    </script>


    {{-- Add row input --}}
    <script>
        // data petir
        const Div_datapetir = document.getElementById('container_datapetir');
        function toggle_datapetir() {
                    if (document.getElementById("cb_datapetir").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datapetir");
                        newField.innerHTML = '<div class="row col-sm-12" id="datapetir">\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data petir</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                            </div>\
                                            <div class="spacer-10"></div>\
                                            <div id="input_datapetir">\
                                                <div class="row group col-sm-12 " id="add_datapetir[]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_petir[0]" value="{{ old('lokasi_petir') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <div>\
                                                            <strong>Latitude</strong>\
                                                            <input type="number" aria-required="true" name="latitude_petir[]" value="{{ old('latitude_petir') }}"\
                                                                class="form-control">\
                                                                <div class="spacer-10"></div>\
                                                        </div>\
                                                        <div>\
                                                            <strong>Longitude</strong>\
                                                            <input type="number" aria-required="true"\
                                                                name="longitude_petir[]" value="{{ old('longitude_petir') }}" class="form-control">\
                                                        </div>\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_dari_petir[]" value="{{ old('tgl_dari_petir') }}">\
                                                        <div class="spacer-10"></div>\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_sampai_petir[]" value="{{ old('tgl_sampai_petir') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datapetir.append(newField);
                    } else {
                        $('#field_datapetir').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datapetir");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }

        $(document).ready(function () {
            var id = 0;
            $('#tambah_datapetir').click(function() {
                id++;
                $('#input_datapetir').append('<div class="row group col-sm-12 " id="add_datapetir'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_petir['+id+']" value="{{ old('lokasi_petir') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <div>\
                                                            <strong>Latitude</strong>\
                                                            <input type="number" aria-required="true" name="latitude_petir['+id+']" value="{{ old('latitude_petir') }}"\
                                                                required="" class="form-control">\
                                                                <div class="spacer-10"></div>\
                                                        </div>\
                                                        <div>\
                                                            <strong>Longitude</strong>\
                                                            <input type="number" aria-required="true" value="{{ old('longitude_petir') }}"\
                                                                name="longitude_petir['+id+']" required="" class="form-control">\
                                                        </div>\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date" value="{{ old('tgl_dari_petir') }}"\
                                                                required="" name="tgl_dari_petir['+id+']">\
                                                        <div class="spacer-10"></div>\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date" value="{{ old('tgl_sampai_petir') }}\
                                                                required="" name="tgl_sampai_petir['+id+']">\
                                                    </div>\
                                                </div>')
            });
            $('#hapus_datapetir').click(function(){
                $('#add_datapetir'+id).remove();
                id--;
            });
        })
    

        //  data hari hujan
        const Div_dataharihujan = document.getElementById('container_dataharihujan');
        function toggle_dataharihujan() {
                    if (document.getElementById("cb_dataharihujan").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_dataharihujan");
                        newField.innerHTML = '<div class="row col-sm-12" id="dataharihujan">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data hari hujan</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_dataharihujan">\
                                                <div class="row group col-sm-12" id="add_dataharihujan[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_harihujan[0]" value="{{ old('lokasi_harihujan') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_harihujan[0]" value="{{ old('tgl_dari_harihujan') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_harihujan[0]" value="{{ old('tgl_sampai_harihujan') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_dataharihujan.append(newField);
                    } else {
                        $('#field_dataharihujan').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_dataharihujan");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_dataharihujan').click(function() {
                id++;
                $('#input_dataharihujan').append('<div class="row group col-sm-12" id="add_dataharihujan'+id+'">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_harihujan['+id+']" value="{{ old('lokasi_harihujan') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_harihujan['+id+']" value="{{ old('tgl_dari_harihujan') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_harihujan['+id+']" value="{{ old('tgl_sampai_harihujan') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_dataharihujan').click(function(){
                $('#add_dataharihujan'+id).remove();
                id--;
            });
        })

        //  data curah hujan rata-rata
        const Div_datacurahhujanratarata = document.getElementById('container_datacurahhujanratarata');
        function toggle_datacurahhujanratarata() {
                    if (document.getElementById("cb_datacurahhujanratarata").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datacurahhujanratarata");
                        newField.innerHTML = '<div class="row col-sm-12" id="datacurahhujanratarata">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data curah hujan rata-rata</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datacurahhujanratarata">\
                                                <div class="row group col-sm-12" id="add_datacurahhujanratarata[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanratarata[0]" value="{{ old('lokasi_curahhujanratarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_curahhujanratarata[0]" value="{{ old('tgl_dari_curahhujanratarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_curahhujanratarata[0]" value="{{ old('tgl_sampai_curahhujanratarata') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datacurahhujanratarata.append(newField);
                    } else {
                        $('#field_datacurahhujanratarata').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datacurahhujanratarata");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datacurahhujanratarata').click(function() {
                id++;
                $('#input_datacurahhujanratarata').append('<div class="row group col-sm-12" id="add_datacurahhujanratarata'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanratarata['+id+']" value="{{ old('lokasi_curahhujanratarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_curahhujanratarata['+id+']" value="{{ old('tgl_dari_curahhujanratarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_curahhujanratarata['+id+']" value="{{ old('tgl_sampai_curahhujanratarata') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datacurahhujanratarata').click(function(){
                $('#add_datacurahhujanratarata'+id).remove();
                id--;
            });
        })

        //  data curah hujan maksimum
        const Div_datacurahhujanmaksimum = document.getElementById('container_datacurahhujanmaksimum');
        function toggle_datacurahhujanmaksimum() {
                    if (document.getElementById("cb_datacurahhujanmaksimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datacurahhujanmaksimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datacurahhujanmaksimum">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data hari hujan maksimum</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datacurahhujanmaksimum">\
                                                <div class="row group col-sm-12" id="add_datacurahhujanmaksimum[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanmaksimum[0]" value="{{ old('lokasi_curahhujanmaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_curahhujanmaksimum[0]" value="{{ old('tgl_dari_curahhujanmaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_curahhujanmaksimum[0]" value="{{ old('tgl_sampai_curahhujanmaksimum') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datacurahhujanmaksimum.append(newField);
                    } else {
                        $('#field_datacurahhujanmaksimum').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datacurahhujanmaksimum");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datacurahhujanmaksimum').click(function() {
                id++;
                $('#input_datacurahhujanmaksimum').append('<div class="row group col-sm-12" id="add_datacurahhujanmaksimum'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanmaksimum['+id+']" value="{{ old('lokasi_curahhujanmaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_curahhujanmaksimum['+id+']" value="{{ old('tgl_dari_curahhujanmaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_curahhujanmaksimum['+id+']" value="{{ old('tgl_sampai_curahhujanmaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datacurahhujanmaksimum').click(function(){
                $('#add_datacurahhujanmaksimum'+id).remove();
                id--;
            });
        })

        //  data curah hujan bulanan
        const Div_datacurahhujanbulanan = document.getElementById('container_datacurahhujanbulanan');
        function toggle_datacurahhujanbulanan() {
                    if (document.getElementById("cb_datacurahhujanbulanan").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datacurahhujanbulanan");
                        newField.innerHTML = '<div class="row col-sm-12" id="datacurahhujanbulanan">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data curah hujan bulanan</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datacurahhujanbulanan">\
                                                <div class="row group col-sm-12" id="add_datacurahhujanbulanan[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanbulanan[0]" value="{{ old('lokasi_curahhujanbulanan') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_curahhujanbulanan[0]" value="{{ old('tgl_dari_curahhujanbulanan') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_curahhujanbulanan[0]" value="{{ old('tgl_sampai_curahhujanbulanan') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datacurahhujanbulanan.append(newField);
                    } else {
                        $('#field_datacurahhujanbulanan').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datacurahhujanbulanan");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datacurahhujanbulanan').click(function() {
                id++;
                $('#input_datacurahhujanbulanan').append('<div class="row group col-sm-12" id="add_datacurahhujanbulanan'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanbulanan['+id+']" value="{{ old('lokasi_curahhujanbulanan') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_curahhujanbulanan['+id+']" value="{{ old('tgl_dari_curahhujanbulanan') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_curahhujanbulanan['+id+']" value="{{ old('tgl_sampai_curahhujanbulanan') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datacurahhujanbulanan').click(function(){
                $('#add_datacurahhujanbulanan'+id).remove();
                id--;
            });
        })

        // data suhu udara rata-rata
        const Div_datasuhuudararatarata = document.getElementById('container_datasuhuudararatarata');
        function toggle_datasuhuudararatarata() {
                    if (document.getElementById("cb_datasuhuudararatarata").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datasuhuudararatarata");
                        newField.innerHTML = '<div class="row col-sm-12" id="datasuhuudararatarata">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data suhu udara rata-rata</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datasuhuudararatarata">\
                                                <div class="row group col-sm-12" id="add_datasuhuudararatarata[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suhuudararatarata[0]" value="{{ old('lokasi_suhuudararatarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_suhuudararatarata[0]" value="{{ old('tgl_dari_suhuudararatarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_suhuudararatarata[0]" value="{{ old('tgl_sampai_suhuudararatarata') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datasuhuudararatarata.append(newField);
                    } else {
                        $('#field_datasuhuudararatarata').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datasuhuudararatarata");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datasuhuudararatarata').click(function() {
                id++;
                $('#input_datasuhuudararatarata').append('<div class="row group col-sm-12" id="add_datasuhuudararatarata'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suhuudararatarata['+id+']" value="{{ old('lokasi_suhuudararatarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_suhuudararatarata['+id+']" value="{{ old('tgl_dari_suhuudararatarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_suhuudararatarata['+id+']" value="{{ old('tgl_sampai_suhuudararatarata') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datasuhuudararatarata').click(function(){
                $('#add_datasuhuudararatarata'+id).remove();
                id--;
            });
        })
        
        // data suhu udara maksimum
        const Div_datasuhuudaramaksimum = document.getElementById('container_datasuhuudaramaksimum');
        function toggle_datasuhuudaramaksimum() {
                    if (document.getElementById("cb_datasuhuudaramaksimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datasuhuudaramaksimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datasuhuudaramaksimum">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data suhu udara maksimum</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datasuhuudaramaksimum">\
                                                <div class="row group col-sm-12" id="add_datasuhuudaramaksimum[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suhuudaramaksimum[0]" value="{{ old('lokasi_suhuudaramaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_suhuudaramaksimum[0]" value="{{ old('tgl_dari_suhuudaramaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_suhuudaramaksimum[0]" value="{{ old('tgl_sampai_suhuudaramaksimum') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datasuhuudaramaksimum.append(newField);
                    } else {
                        $('#field_datasuhuudaramaksimum').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datasuhuudaramaksimum");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datasuhuudaramaksimum').click(function() {
                id++;
                $('#input_datasuhuudaramaksimum').append('<div class="row group col-sm-12" id="add_datasuhuudaramaksimum'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suhuudaramaksimum['+id+']" value="{{ old('lokasi_suhuudaramaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_suhuudaramaksimum['+id+']" value="{{ old('tgl_dari_suhuudaramaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_suhuudaramaksimum['+id+']" value="{{ old('tgl_sampai_suhuudaramaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datasuhuudaramaksimum').click(function(){
                $('#add_datasuhuudaramaksimum'+id).remove();
                id--;
            });
        })

        // data suhu udara minimum
        const Div_datasuhuudaraminimum = document.getElementById('container_datasuhuudaraminimum');
        function toggle_datasuhuudaraminimum() {
                    if (document.getElementById("cb_datasuhuudaraminimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datasuhuudaraminimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datasuDiv_datasuhuudaraminimum">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data suhu udara minimum</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datasuhuudaraminimum">\
                                                <div class="row group col-sm-12" id="add_datasuhuudaraminimum[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suDiv_datasuhuudaraminimum[0]" value="{{ old('lokasi_suDiv_datasuhuudaraminimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_suDiv_datasuhuudaraminimum[0]" value="{{ old('tgl_dari_suDiv_datasuhuudaraminimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_suDiv_datasuhuudaraminimum[0]" value="{{ old('tgl_sampai_suDiv_datasuhuudaraminimum') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datasuhuudaraminimum.append(newField);
                    } else {
                        $('#field_datasuhuudaraminimum').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datasuhuudaraminimum");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datasuhuudaraminimum').click(function() {
                id++;
                $('#input_datasuhuudaraminimum').append('<div class="row group col-sm-12" id="add_datasuhuudaraminimum'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suDiv_datasuhuudaraminimum['+id+']" value="{{ old('lokasi_suDiv_datasuhuudaraminimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_suDiv_datasuhuudaraminimum['+id+']" value="{{ old('tgl_dari_suDiv_datasuhuudaraminimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_suDiv_datasuhuudaraminimum['+id+']" value="{{ old('tgl_sampai_suDiv_datasuhuudaraminimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datasuhuudaraminimum').click(function(){
                $('#add_datasuhuudaraminimum'+id).remove();
                id--;
            });
        })

        // data kelembapan udara rata-rata
        const Div_datakelembapanudararatarata = document.getElementById('container_datakelembapanudararatarata');
        function toggle_datakelembapanudararatarata() {
                    if (document.getElementById("cb_datakelembapanudararatarata").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datakelembapanudararatarata");
                        newField.innerHTML = '<div class="row col-sm-12" id="datakelembapanudararatarata">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data kelembapan udara rata-rata</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datakelembapanudararatarata">\
                                                <div class="row group col-sm-12" id="add_datakelembapanudararatarata[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelembapanudararatarata[0]" value="{{ old('lokasi_kelembapanudararatarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_kelembapanudararatarata[0]" value="{{ old('tgl_dari_kelembapanudararatarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_kelembapanudararatarata[0]" value="{{ old('tgl_sampai_kelembapanudararatarata') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datakelembapanudararatarata.append(newField);
                    } else {
                        $('#field_datakelembapanudararatarata').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datakelembapanudararatarata");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datakelembapanudararatarata').click(function() {
                id++;
                $('#input_datakelembapanudararatarata').append('<div class="row group col-sm-12" id="add_datakelembapanudararatarata'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelembapanudararatarata['+id+']" value="{{ old('lokasi_kelembapanudararatarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_kelembapanudararatarata['+id+']" value="{{ old('tgl_dari_kelembapanudararatarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_kelembapanudararatarata['+id+']" value="{{ old('tgl_sampai_kelembapanudararatarata') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datakelembapanudararatarata').click(function(){
                $('#add_datakelembapanudararatarata'+id).remove();
                id--;
            });
        })
        
        // data kelembapan udara maksimum
        const Div_datakelembapanudaramaksimum = document.getElementById('container_datakelembapanudaramaksimum');
        function toggle_datakelembapanudaramaksimum() {
                    if (document.getElementById("cb_datakelembapanudaramaksimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datakelembapanudaramaksimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datakelemDiv_datakelembapanudaramaksimum">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data kelembapan udara maksimum</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datakelembapanudaramaksimum">\
                                                <div class="row group col-sm-12" id="add_datakelembapanudaramaksimum[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelemDiv_datakelembapanudaramaksimum[0]" value="{{ old('lokasi_kelemDiv_datakelembapanudaramaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_kelemDiv_datakelembapanudaramaksimum[0]" value="{{ old('tgl_dari_kelemDiv_datakelembapanudaramaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_kelemDiv_datakelembapanudaramaksimum[0]" value="{{ old('tgl_sampai_kelemDiv_datakelembapanudaramaksimum') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datakelembapanudaramaksimum.append(newField);
                    } else {
                        $('#field_datakelembapanudaramaksimum').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datakelembapanudaramaksimum");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datakelembapanudaramaksimum').click(function() {
                id++;
                $('#input_datakelembapanudaramaksimum').append('<div class="row group col-sm-12" id="add_datakelembapanudaramaksimum'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelemDiv_datakelembapanudaramaksimum['+id+']" value="{{ old('lokasi_kelemDiv_datakelembapanudaramaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_kelemDiv_datakelembapanudaramaksimum['+id+']" value="{{ old('tgl_dari_kelemDiv_datakelembapanudaramaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_kelemDiv_datakelembapanudaramaksimum['+id+']" value="{{ old('tgl_sampai_kelemDiv_datakelembapanudaramaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datakelembapanudaramaksimum').click(function(){
                $('#add_datakelembapanudaramaksimum'+id).remove();
                id--;
            });
        })
        
        // data kelembapan udara minimum
        const Div_datakelembapanudaraminimum = document.getElementById('container_datakelembapanudaraminimum');
        function toggle_datakelembapanudaraminimum() {
                    if (document.getElementById("cb_datakelembapanudaraminimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datakelembapanudaraminimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datakelemDiv_datakelembapanudaraminimum">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data kelembapan udara minimum</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datakelembapanudaraminimum">\
                                                <div class="row group col-sm-12" id="add_datakelembapanudaraminimum[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelemDiv_datakelembapanudaraminimum[0]" value="{{ old('lokasi_kelemDiv_datakelembapanudaraminimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_kelemDiv_datakelembapanudaraminimum[0]" value="{{ old('tgl_dari_kelemDiv_datakelembapanudaraminimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_kelemDiv_datakelembapanudaraminimum[0]" value="{{ old('tgl_sampai_kelemDiv_datakelembapanudaraminimum') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datakelembapanudaraminimum.append(newField);
                    } else {
                        $('#field_datakelembapanudaraminimum').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datakelembapanudaraminimum");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datakelembapanudaraminimum').click(function() {
                id++;
                $('#input_datakelembapanudaraminimum').append('<div class="row group col-sm-12" id="add_datakelembapanudaraminimum'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelemDiv_datakelembapanudaraminimum['+id+']" value="{{ old('lokasi_kelemDiv_datakelembapanudaraminimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_kelemDiv_datakelembapanudaraminimum['+id+']" value="{{ old('tgl_dari_kelemDiv_datakelembapanudaraminimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_kelemDiv_datakelembapanudaraminimum['+id+']" value="{{ old('tgl_sampai_kelemDiv_datakelembapanudaraminimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datakelembapanudaraminimum').click(function(){
                $('#add_datakelembapanudaraminimum'+id).remove();
                id--;
            });
        })
        
        // data kecepatan dan arah angin
        const Div_datakecepatandanarahangin = document.getElementById('container_datakecepatandanarahangin');
        function toggle_datakecepatandanarahangin() {
                    if (document.getElementById("cb_datakecepatandanarahangin").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datakecepatandanarahangin");
                        newField.innerHTML = '<div class="row col-sm-12" id="datakecepatandanarahangin">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data kecepatan dan arah angin</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datakecepatandanarahangin">\
                                                <div class="row group col-sm-12" id="add_datakecepatandanarahangin[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kecepatandanarahangin[0]" value="{{ old('lokasi_kecepatandanarahangin') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_kecepatandanarahangin[0]" value="{{ old('tgl_dari_kecepatandanarahangin') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_kecepatandanarahangin[0]" value="{{ old('tgl_sampai_kecepatandanarahangin') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datakecepatandanarahangin.append(newField);
                    } else {
                        $('#field_datakecepatandanarahangin').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datakecepatandanarahangin");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datakecepatandanarahangin').click(function() {
                id++;
                $('#input_datakecepatandanarahangin').append('<div class="row group col-sm-12" id="add_datakecepatandanarahangin'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kecepatandanarahangin['+id+']" value="{{ old('lokasi_kecepatandanarahangin') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_kecepatandanarahangin['+id+']" value="{{ old('tgl_dari_kecepatandanarahangin') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_kecepatandanarahangin['+id+']" value="{{ old('tgl_sampai_kecepatandanarahangin') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datakecepatandanarahangin').click(function(){
                $('#add_datakecepatandanarahangin'+id).remove();
                id--;
            });
        })
        
        // data kecepatan angin maksimum
        const Div_datakecepatananginmaksimum = document.getElementById('container_datakecepatananginmaksimum');
        function toggle_datakecepatananginmaksimum() {
                    if (document.getElementById("cb_datakecepatananginmaksimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datakecepatananginmaksimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datakeceDiv_datakecepatananginmaksimum">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data kecepatan angin maksimum</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datakecepatananginmaksimum">\
                                                <div class="row group col-sm-12" id="add_datakecepatananginmaksimum[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_keceDiv_datakecepatananginmaksimum[0]" value="{{ old('lokasi_keceDiv_datakecepatananginmaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_keceDiv_datakecepatananginmaksimum[0]" value="{{ old('tgl_dari_keceDiv_datakecepatananginmaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_keceDiv_datakecepatananginmaksimum[0]" value="{{ old('tgl_sampai_keceDiv_datakecepatananginmaksimum') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datakecepatananginmaksimum.append(newField);
                    } else {
                        $('#field_datakecepatananginmaksimum').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datakecepatananginmaksimum");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datakecepatananginmaksimum').click(function() {
                id++;
                $('#input_datakecepatananginmaksimum').append('<div class="row group col-sm-12" id="add_datakecepatananginmaksimum'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_keceDiv_datakecepatananginmaksimum['+id+']" value="{{ old('lokasi_keceDiv_datakecepatananginmaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_keceDiv_datakecepatananginmaksimum['+id+']" value="{{ old('tgl_dari_keceDiv_datakecepatananginmaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_keceDiv_datakecepatananginmaksimum['+id+']" value="{{ old('tgl_sampai_keceDiv_datakecepatananginmaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datakecepatananginmaksimum').click(function(){
                $('#add_datakecepatananginmaksimum'+id).remove();
                id--;
            });
        })
        
        // data lama penyinaran matahari
        const Div_datalamapenyinaranmatahari = document.getElementById('container_datalamapenyinaranmatahari');
        function toggle_datalamapenyinaranmatahari() {
                    if (document.getElementById("cb_datalamapenyinaranmatahari").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datalamapenyinaranmatahari");
                        newField.innerHTML = '<div class="row col-sm-12" id="datalamapenyinaranmatahari">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data lama penyinaran matahari</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_datalamapenyinaranmatahari">\
                                                <div class="row group col-sm-12" id="add_datalamapenyinaranmatahari[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_lamapenyinaranmatahari[0]" value="{{ old('lokasi_lamapenyinaranmatahari') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_lamapenyinaranmatahari[0]" value="{{ old('tgl_dari_lamapenyinaranmatahari') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_lamapenyinaranmatahari[0]" value="{{ old('tgl_sampai_lamapenyinaranmatahari') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_datalamapenyinaranmatahari.append(newField);
                    } else {
                        $('#field_datalamapenyinaranmatahari').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_datalamapenyinaranmatahari");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_datalamapenyinaranmatahari').click(function() {
                id++;
                $('#input_datalamapenyinaranmatahari').append('<div class="row group col-sm-12" id="add_datalamapenyinaranmatahari'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_lamapenyinaranmatahari['+id+']" value="{{ old('lokasi_lamapenyinaranmatahari') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_lamapenyinaranmatahari['+id+']" value="{{ old('tgl_dari_lamapenyinaranmatahari') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_lamapenyinaranmatahari['+id+']" value="{{ old('tgl_sampai_lamapenyinaranmatahari') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_datalamapenyinaranmatahari').click(function(){
                $('#add_datalamapenyinaranmatahari'+id).remove();
                id--;
            });
        })
        
        // data prakiraan musim
        const Div_dataprakiraanmusim = document.getElementById('container_dataprakiraanmusim');
        function toggle_dataprakiraanmusim() {
                    if (document.getElementById("cb_dataprakiraanmusim").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_dataprakiraanmusim");
                        newField.innerHTML = '<div class="row col-sm-12" id="dataprakiraanmusim">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data prakiraan musim</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_dataprakiraanmusim">\
                                                <div class="row group col-sm-12" id="add_dataprakiraanmusim[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_prakiraanmusim[0]" value="{{ old('lokasi_prakiraanmusim') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_prakiraanmusim[0]" value="{{ old('tgl_dari_prakiraanmusim') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_prakiraanmusim[0]" value="{{ old('tgl_sampai_prakiraanmusim') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_dataprakiraanmusim.append(newField);
                    } else {
                        $('#field_dataprakiraanmusim').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_dataprakiraanmusim");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_dataprakiraanmusim').click(function() {
                id++;
                $('#input_dataprakiraanmusim').append('<div class="row group col-sm-12" id="add_dataprakiraanmusim'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_prakiraanmusim['+id+']" value="{{ old('lokasi_prakiraanmusim') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_prakiraanmusim['+id+']" value="{{ old('tgl_dari_prakiraanmusim') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_prakiraanmusim['+id+']" value="{{ old('tgl_sampai_prakiraanmusim') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_dataprakiraanmusim').click(function(){
                $('#add_dataprakiraanmusim'+id).remove();
                id--;
            });
        })
        
        // data klasifikasi iklim
        const Div_dataklasifikasiiklim = document.getElementById('container_dataklasifikasiiklim');
        function toggle_dataklasifikasiiklim() {
                    if (document.getElementById("cb_dataklasifikasiiklim").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_dataklasifikasiiklim");
                        newField.innerHTML = '<div class="row col-sm-12" id="dataklasifikasiiklim">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data klasifikasi iklim</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_dataklasifikasiiklim">\
                                                <div class="row group col-sm-12" id="add_dataklasifikasiiklim[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_klasifikasiiklim[0]" value="{{ old('lokasi_klasifikasiiklim') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_klasifikasiiklim[0]" value="{{ old('tgl_dari_klasifikasiiklim') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_klasifikasiiklim[0]" value="{{ old('tgl_sampai_klasifikasiiklim') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_dataklasifikasiiklim.append(newField);
                    } else {
                        $('#field_dataklasifikasiiklim').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_dataklasifikasiiklim");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_dataklasifikasiiklim').click(function() {
                id++;
                $('#input_dataklasifikasiiklim').append('<div class="row group col-sm-12" id="add_dataklasifikasiiklim'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_klasifikasiiklim['+id+']" value="{{ old('lokasi_klasifikasiiklim') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_klasifikasiiklim['+id+']" value="{{ old('tgl_dari_klasifikasiiklim') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_klasifikasiiklim['+id+']" value="{{ old('tgl_sampai_klasifikasiiklim') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_dataklasifikasiiklim').click(function(){
                $('#add_dataklasifikasiiklim'+id).remove();
                id--;
            });
        })
        
        // data radiasi matahari
        const Div_dataradiasimatahari = document.getElementById('container_dataradiasimatahari');
        function toggle_dataradiasimatahari() {
                    if (document.getElementById("cb_dataradiasimatahari").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_dataradiasimatahari");
                        newField.innerHTML = '<div class="row col-sm-12" id="dataradiasimatahari">\
                                            <div class="spacer-10"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data radiasi matahari</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div id="input_dataradiasimatahari">\
                                                <div class="row group col-sm-12" id="add_dataradiasimatahari[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_radiasimatahari[0]" value="{{ old('lokasi_radiasimatahari') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_radiasimatahari[0]" value="{{ old('tgl_dari_radiasimatahari') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_radiasimatahari[0]" value="{{ old('tgl_sampai_radiasimatahari') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        Div_dataradiasimatahari.append(newField);
                    } else {
                        $('#field_dataradiasimatahari').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_dataradiasimatahari");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_dataradiasimatahari').click(function() {
                id++;
                $('#input_dataradiasimatahari').append('<div class="row group col-sm-12" id="add_dataradiasimatahari'+id+'">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_radiasimatahari['+id+']" value="{{ old('lokasi_radiasimatahari') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_dari_radiasimatahari['+id+']" value="{{ old('tgl_dari_radiasimatahari') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                required="" name="tgl_sampai_radiasimatahari['+id+']" value="{{ old('tgl_sampai_radiasimatahari') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>')
                                                    
            });
            $('#hapus_dataradiasimatahari').click(function(){
                $('#add_dataradiasimatahari'+id).remove();
                id--;
            });
        })
        
        // unsur cuara lainnya
        const Div_unsurcuacalainnya = document.getElementById('container_unsurcuacalainnya');
        function toggle_unsurcuacalainnya() {
                    if (document.getElementById("cb_unsurcuacalainnya").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_unsurcuacalainnya");
                        newField.innerHTML = '<div class="row col-sm-12" id="unsurcuacalainnya">\
                                            <div class="col-sm-12">\
                                                <h4>Unsur cuaca lainnya</h4>\
                                                <div class="spacer-10"></div>\
                                            </div>\
                                            <div class="row col-sm-12">\
                                                <div class="col-sm-12">\
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"\
                                                        placeholder="Deskripsi unsur cuaca" name="deskripsi_unsurcuaca"></textarea>\
                                                    <div class="spacer-10"></div>\
                                                </div>\
                                                <div id="input_unsurcuacalainnya">\
                                                    <div class="row">\
                                                        <div class="col-sm-12">\
                                                            <div class="spacer-10"></div>\
                                                            <div class="col-sm-6">\
                                                                <strong>Lokasi</strong>\
                                                                <textarea required="" class="form-control" style="width: 100% ; height: 90px"\
                                                                name="lokasi_unsurcuacalainnya[0]" value="{{ old('lokasi_unsurcuacalainnya') }}"></textarea>\
                                                            </div>\
                                                            <div class="col-sm-6">\
                                                                <div class="spacer-5"></div>\
                                                                <div>\
                                                                    <strong>Dari</strong>\
                                                                    <input class="form-control" size="16" type="date" required=""name="dari_unsurcuacalainnya[0]" value="{{ old('dari_unsurcuacalainnya') }}">\
                                                                </div>\
                                                                        <div class="spacer-5"></div>\
                                                                        <strong>Sampai</strong>\
                                                                        <input class="form-control" size="16" type="date"\
                                                                                required="" name="sampai_unsurcuacalainnya[0]" value="{{ old('sampai_unsurcuacalainnya') }}">\
                                                            </div>\
                                                        </div>\
                                                    </div>\
                                                </div>\
                                            </div>';
                                        Div_unsurcuacalainnya.append(newField);
                    } else {
                        $('#field_unsurcuacalainnya').remove();
                    } 
                    var toggleDiv = document.getElementById("btn_unsurcuacalainnya");
                    if (toggleDiv.style.display != "none") {
                        toggleDiv.style.display = 'none';
                    } else {
                        toggleDiv.style.display = 'block';
                    }
                }
        $(document).ready(function () {
            var id = 0;
            $('#tambah_unsurcuacalainnya').click(function() {
                id++;
                $('#input_unsurcuacalainnya').append('<div id="add_unsurcuacalainnya'+id+'">\
                                                      <div class="spacer-10"></div>\
                                                      <div id="add_unsurcuacalainnya['+id+']">\
                                                        <div class="col-sm-12">\
                                                          <div class="row">\
                                                            <div class="spacer-10"></div>\
                                                            <div class="col-sm-6">\
                                                              <strong>Lokasi</strong>\
                                                              <textarea\
                                                                required=""\
                                                                class="form-control"\
                                                                style="width: 100%; height: 90px"\
                                                                name="lokasi_unsurcuacalainnya['+id+']"\
                                                                value="" ></textarea>\
                                                            </div>\
                                                            <div class="col-sm-6">\
                                                              <div class="spacer-5"></div>\
                                                              <div>\
                                                                <strong>Dari</strong>\
                                                                <input\
                                                                  class="form-control"\
                                                                  size="16"\
                                                                  type="date"\
                                                                  required=""\
                                                                  name="dari_unsurcuacalainnya['+id+']"\
                                                                  value="" />\
                                                              </div>\
                                                              <div class="spacer-5"></div>\
                                                              <div>\
                                                                <strong>Sampai</strong>\
                                                                <input\
                                                                  class="form-control"\
                                                                  size="16"\
                                                                  type="date"\
                                                                  required=""\
                                                                  name="sampai_unsurcuacalainnya['+id+']"\
                                                                  value="" />\
                                                              </div>\
                                                            </div>\
                                                          </div>\
                                                        </div>\
                                                      </div>\
                                                    </div>')
                                                    
            });
            $('#hapus_unsurcuacalainnya').click(function(){
                $('#add_unsurcuacalainnya'+id).remove();
                id--;
            });
        })   
          
    </script>
    


@endsection
