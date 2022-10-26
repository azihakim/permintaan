@extends('layout.formulir')
@section('form-title', 'Kegiatan Pertahanan dan Keamanan')


@section('form')
<form action="{{ route('pertahanankeamanan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="spacer-10"></div>
        {{-- Start data diri --}}
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
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
            <input type="text" aria-required="true" name="nama_kegiatan" required="" class="form-control">
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
            <div class="col-sm-4">
                <div class="stacked-labels">
                    <label><input type="checkbox" id="cb_datapetir" name="cb_datapetirs" onclick="toggle_datapetir()"><span></span>Data petir</label>
                    <label><input type="checkbox" id="cb_dataharihujan" name="cb_dataharihujans" onclick="toggle_dataharihujan()"><span></span>Data hari hujan</label>
                    <label><input type="checkbox" id="cb_datacurahhujanratarata" name="cb_datacurahhujanrataratas" onclick="toggle_datacurahhujanratarata()"><span></span>Data curah hujan rata-rata</label>
                    <label><input type="checkbox" id="cb_datacurahhujanmaksimum" name="cb_datacurahhujanmaksimums" onclick="toggle_datacurahhujanmaksimum()"><span></span>Data curah hujan maksimum</label>
                    <label><input type="checkbox" id="cb_datacurahhujanbulanan" name="cb_datacurahhujanbulanans" onclick="toggle_datacurahhujanbulanan()"><span></span>Data curah hujan bulanan</label>
                    <label><input type="checkbox" id="cb_datasuhuudararatarata" name="cb_datasuhuudararataratas" onclick="toggle_datasuhuudararatarata()"><span></span>Data suhu udara rata-rata</label>
                </div>
                <div class="spacer-10"></div>
            </div>

            <div class="col-sm-4">
                <div class="stacked-labels">
                    <label><input type="checkbox" id="cb_datasuhuudaramaksimum" name="cb_datasuhuudaramaksimums" onclick="toggle_datasuhuudaramaksimum()"><span></span>Data suhu udara maksimum</label>
                    <label><input type="checkbox" id="cb_datasuhuudaraminimum" name="cb_datasuhuudaraminimums" onclick="toggle_datasuhuudaraminimum()"><span></span>Data suhu udara minimum</label>
                    <label><input type="checkbox" id="cb_datakelembapanudararatarata" name="cb_datakelembapanudararataratas" onclick="toggle_datakelembapanudararatarata()"><span></span>Data kelembapan udara rata-rata</label>
                    <label><input type="checkbox" id="cb_datakelembapanudaramaksimum" name="cb_datakelembapanudaramaksimums" onclick="toggle_datakelembapanudaramaksimum()"><span></span>Data kelembapan udara maksimum</label>
                    <label><input type="checkbox" id="cb_datakelembapanudaraminimum" name="cb_datakelembapanudaraminimums" onclick="toggle_datakelembapanudaraminimum()"><span></span>Data kelembapan udara minimum</label>
                    <label><input type="checkbox" id="cb_datakecepatandanarahangin" name="cb_datakecepatandanarahangins" onclick="toggle_datakecepatandanarahangin()"><span></span>Data kecepatan dan arah angin</label>
                </div>
                <div class="spacer-10"></div>
            </div>

            <div class="col-sm-4">
                <div class="stacked-labels">
                    <label><input type="checkbox" id="cb_datakecepatananginmaksimum" name="cb_datakecepatananginmaksimums" onclick="toggle_datakecepatananginmaksimum()"><span></span>Data kecepatan angin maksimum</label>
                    <label><input type="checkbox" id="cb_datalamapenyinaranmatahari" name="cb_datalamapenyinaranmataharis" onclick="toggle_datalamapenyinaranmatahari()"><span></span>Data lama penyinaran matahari</label>
                    <label><input type="checkbox" id="cb_dataprakiraanmusim" name="cb_dataprakiraanmusims" onclick="toggle_dataprakiraanmusim()"><span></span>Data prakiraan musim</label>
                    <label><input type="checkbox" id="cb_dataklasifikasiiklim" name="cb_dataklasifikasiiklims" onclick="toggle_dataklasifikasiiklim()"><span></span>Data klasifikasi iklim</label>
                    <label><input type="checkbox" id="cb_dataradiasimatahari" name="cb_dataradiasimataharis" onclick="toggle_dataradiasimatahari()"><span></span>Data radiasi matahari</label>
                    <label><input type="checkbox" id="cb_unsurcuacalainnya" name="cb_unsurcuacalainnyas" onclick="toggle_unsurcuacalainnya()"><span></span>Unsur cuaca lainnya</label>
                </div>
            </div>
        </div>
        {{-- End jenis data --}}

        <div class="spacer-40"></div>   
        
        {{-- Start lokasi dan tanggal data --}}
        {{-- Data petir --}}
        <div id="container_datapetir"></div>
        
        {{-- Data hari hujan --}}
        <div id="container_dataharihujan"></div>
        
        {{-- Data hari hujan rata-rata --}}
        <div id="container_datacurahhujanratarata"></div>
        
        {{-- Data hari hujan maksimum --}}
        <div id="container_datacurahhujanmaksimum"></div>
        
        {{-- Data hari hujan bulanan --}}
        <div id="container_datacurahhujanbulanan"></div>

        {{-- Data suhu udara rata-rata --}}
        <div id="container_datasuhuudararatarata"></div>
        
        {{-- Data suhu udara maksimum --}}
        <div id="container_datasuhuudaramaksimum"></div>
        
        {{-- Data suhu udara minimum --}}
        <div id="container_datasuhuudaraminimum"></div>
        
        {{-- Data kelembapan udara rata-rata --}}
        <div id="container_datakelembapanudararatarata"></div>
        
        {{-- Data kelembapan udara maksimum --}}
        <div id="container_datakelembapanudaramaksimum"></div>
        
        {{-- Data kelembapan udara minimum --}}
        <div id="container_datakelembapanudaraminimum"></div>
        
        {{-- Data kecepatan dan arah angin --}}
        <div id="container_datakecepatandanarahangin"></div>
        
        {{-- Data kecepatan angin maksimum --}}
        <div id="container_datakecepatananginmaksimum"></div>
        
        {{-- Data lama penyinaran matahari --}}
        <div id="container_datalamapenyinaranmatahari"></div>
        
        {{-- Data prakiraan musim --}}
        <div id="container_dataprakiraanmusim"></div>
        
        {{-- Data klasifikasi iklim --}}
        <div id="container_dataklasifikasiiklim"></div>
        
        {{-- Data radiasi matahari --}}
        <div id="container_dataradiasimatahari"></div>
        
        {{-- Unsur cuaca lainnya --}}
        <div id="container_unsurcuacalainnya"></div>
        
    
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
                    <label>Surat Perintah dari pimpinan Instansi yang membidangi pertahanan/keamanan</label>
                </div>
                <div class="col-sm-6">
                    <input required type="file" accept="application/pdf" name="surat_perintah">
                    <div class="helper-text-box">
                        <div class="form-helper-header">
                            Format file:<code>.pdf</code>
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
        <div class="row col-sm-12">
            <div class="col-sm-12">
                <h4 class="bold">Deskripsi permintaan data</h4>
            </div>
        </div>
        <div class="spacer-10"></div>
        <div class="row col-sm-12">
            <div class="col-sm-12">
                <textarea name="deskripsi" class="form-control" style="height: 150px;"></textarea>
                <div class="helper-text-box">
                    <div class="form-helper">Silahkan masukkan deskripsi jika tidak ada
                        pilihan di formulir</div>
                </div><!-- End .helper-text-box -->
            </div>
        </div>

        {{-- End deskripsi permintaan data --}}


        {{-- End data dan informasi yang dibutuhkan --}}

        <div class="spacer-40"></div>

        <div class="spacer-20"></div>
        <div class="row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-default btn-lg pull-right">Kirim</button>
            </div>
        </div>
    
    <div class="spacer-40"></div>
</form>
@endsection
