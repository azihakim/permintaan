@extends('layout.master')
@section('form-title', 'Layanan Bertarif PNBP sesuai dengan PP No.47 Tahun 2018aaa')
@section('content')


    <div class="inner-padding">
        <form method="POST" action="{{ url('respon/' . $formulir->id) }}" enctype="multipart/form-data">
            @method('PATCH')
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
                        <select require name="status_form" class="form-control simpleselect" id="list" onchange="toggle(this.value)">
                            @if ($formulir->status_form == '1'){
                                <option value="1" class="bold">Permintaan baru</option>
                            }
                            @elseif ($formulir->status_form == '2'){
                                <option value="2" class="bold text-danger">Diproses</option>
                            }
                            @elseif ($formulir->status_form == '3'){
                                <option value="3" class="bold text-danger">Diterima</option>
                            }
                            @elseif ($formulir->status_form == '4'){
                                <option value="4" class="bold text-danger">Selesai</option>
                            }
                            @elseif ($formulir->status_form == '5'){
                                <option value="5" class="bold text-danger">Menunggu pembayaran</option>
                            }
                            @elseif ($formulir->status_form == '6'){
                                <option value="6" class="bold text-danger">Pembayaran ulang </option>
                            }
                            @elseif ($formulir->status_form == '7'){
                                <option value="7" class="bold text-danger">Dibatalkan</option>
                            }
                            @endif

                            <option value="1">Permintaan baru</option>
                            <option value="2">Diproses</option>
                            <option value="3">Diterima</option>
                            <option value="4">Selesai</option>
                            <option value="5">Menunggu pembayaran</option>
                            <option value="6">Pembayaran ulang </option>
                            <option value="7">Dibatalkan</option>
                        </select>
                        
                    </div>
                </div>
            </div>

            <div id="data">
                <div class="spacer-15"></div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Data permintaan</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="hidden" name="old_data" value="{{ $formulir->respon_data }}">
                        <input type="file" name="respon_data">
                    </div>
                    <div class="col-sm-4">
                        @if(session('status_data'))
                            <div class="alert alert-success">
                                {{ session('status_data') }}
                            </div>
                        @endif
                    </div>
                    @if($formulir->respon_data != null)
                    <div class="spacer-10"></div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="file-bar">
                            <a href="{{ asset('store/documen/' . $formulir->respon_data) }}" target="_blank">
                                <div class="file-bar-icon">
                                    <i class="fa fa-download"></i>
                                </div>
                                <div class="file-bar-info">
                                    <h5>Data yang dikirim</h5>
                                    <span class="label label-default">.pdf</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @elseif($formulir->respon_data == null)
                    <div class="spacer-10"></div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-4">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            <i class="fa fa-exclamation-triangle"></i>Data permintaan belum dikirim
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div id="bill">
                <div class="spacer-15"></div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Bill pembayaran</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="hidden" name="old_bill" value="{{ $formulir->respon_bill }}">
                        <input type="file" name="respon_bill">
                    </div>
                    <div class="col-sm-4">
                        @if(session('status_bill'))
                            <div class="alert alert-success">
                                {{ session('status_bill') }}
                            </div>
                        @endif
                    </div>
                    @if($formulir->respon_bill != null)
                    <div class="spacer-10"></div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-4">
                        <div class="file-bar">
                            <a href="{{ asset('store/documen/' . $formulir->respon_bill) }}" target="_blank">
                                <div class="file-bar-icon">
                                    <i class="fa fa-download"></i>
                                </div>
                                <div class="file-bar-info">
                                    <h5>Bill yang dikirim</h5>
                                    <span class="label label-default">.pdf</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @elseif($formulir->respon_bill == null)
                    <div class="spacer-10"></div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-4">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            <i class="fa fa-exclamation-triangle"></i>Bill belum dikirim
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div id="deskripsi">
                <div class="spacer-15"></div>
                <div class="row">
                    <div class="col-sm-3">
                        <label>Deskripsi</label>
                    </div>
                    <div class="col-sm-7">
                        <textarea class="form-control" name="respon_desk">{{ $formulir->respon_desk }}</textarea>
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
                    <label>Struk pembayaran bill permintaan</label>
                </div>
                <div class="col-sm-9">
                    <div class="file-bar">
                        <a href="{{ asset('store/documen/' . $formulir->respon_struk) }}" target="_blank">
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
                                            <div class="col-sm-3">
                                                <input type="text" aria-required="true" name="nama" disabled value=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="spacer-10"></div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>Nomor telepon</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="telepon" name="telepon" disabled class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="spacer-10"></div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="email" name="email" disabled class="form-control" name="email" value="">
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

    {{-- Toggle show element input --}}
    <script>
        // function toggle(value) {
            // var terima = document.getElementById("deskripsi");
            // var batal = document.getElementById("deskripsi");
            // var selesai = document.getElementById("data");
            // var pembayaran = document.getElementById("bill");
            // var pembayaranulang = document.getElementById("bill");
    
            // if (value == "2") {
            //     terima.style.display = "block";
            // } else if (value == "6") {
            //     batal.style.display = "block";
            // } else {
            //     batal.style.display = "none";
            // }
            // if (value == "3") {
            //     selesai.style.display = "block";
            // } else {
            //     selesai.style.display = "none";
            // }
            // if (value == "4") {
            //     pembayaran.style.display = "block";
            // } 
            // else if (value == "5") {
            //     pembayaranulang.style.display = "block";
            // } 
        //     else {
        //         pembayaran.style.display = "none";
        //     }
        // }
    
            // toggle deskripsi 
            // const div_bill_2 = document.getElementById("bill_2");
            // const div_bill_3 = document.getElementById("bill_3");
            // function toggle(value) {
            //     if(value == "5"){
            //         $('#bill_1').remove();
            //         var newField = document.createElement("div");
            //         newField.setAttribute("id", "field_bill");
            //         newField.innerHTML = '<div class="spacer-15"></div>\
            //             <div class="row">\
            //                 <div class="col-sm-3">\
            //                     <label>Bill pembayaran</label>\
            //                 </div>\
            //                 <div class="col-sm-9">\
            //                     <input type="hidden" name="old_bill" value="{{ $formulir->respon_bill }}">\
            //                     <input type="file" required>\
            //                 </div>\
            //             </div>';
            //             div_bill_2.append(newField); 
            //     }else if(value == "6"){
            //         $('#bill_1').remove();
            //         $('#bill_2').remove();
            //         var newField_2 = document.createElement("div");
            //         newField_2.setAttribute("id", "field_bill");
            //         newField_2.innerHTML = '<div class="spacer-15"></div>\
            //             <div class="row">\
            //                 <div class="col-sm-3">\
            //                     <label>Bill pembayaran</label>\
            //                 </div>\
            //                 <div class="col-sm-9">\
            //                     <input type="hidden" name="old_bill" value="{{ $formulir->respon_bill }}">\
            //                     <input type="file" required>\
            //                 </div>\
            //             </div>';
            //             div_bill_2.append(newField_2); 
            //     }
            //     else{
            //         $('#bill_1').remove();
            //         $('#bill_2').remove();
            //     }
            // }
    </script>
@endsection
