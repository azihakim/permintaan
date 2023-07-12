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
                                <option value="6" class="bold text-danger">Pembayaran ulang</option>
                            }
                            @elseif ($formulir->status_form == '7'){
                                <option value="7" class="bold text-danger">Dibatalkan</option>
                            }
                            @endif

                            <option value="1">Permintaan baru</option>
                            <option value="2">Diproses</option>
                            <option value="3">Diterima</option>
                            <option value="4">Selesai</option>
                            @if ($formulir->jenis_permintaan == "Layanan bertarif")
                                <option value="5">Menunggu pembayaran</option>
                                <option value="6">Pembayaran ulang </option>
                            @endif
                            <option value="7">Dibatalkan</option>
                        </select>
                        
                    </div>
                </div>
            </div>

            <div id="permintan">
                <div class="spacer-25"></div>
                    {{-- <div class="col-sm-3">
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
                    </div> --}}
                @if($formulir->respon_data != null)
                <div id="data">
                    <div id="field_data">
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Upload data permintaan</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="hidden" name="old_data" value="{{ $formulir->respon_data }}">
                                <input type="file" name="respon_data">
                            </div>
                        </div>
                        <div class="spacer-10"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3"><label>Data permintaan</label></div>
                    <div class="col-sm-4">
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
                </div>

                @elseif($formulir->respon_data == null)
                <div id="data"></div>
                <div class="row">
                    <div class="col-sm-3"><label>Data permintaan</label></div>
                    <div class="col-sm-4">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            <i class="fa fa-exclamation-triangle"></i>Data permintaan belum dikirim
                        </div>
                    </div>
                </div>
                @endif
            </div>

            @if ($formulir->jenis_permintaan == "Layanan bertarif")  
                <div id="bill_1">
                    <div class="spacer-15"></div>
                    {{-- <div class="col-sm-3">
                        <label>Bill pembayaran</label>
                    </div> --}}
                    {{-- <div class="col-sm-4">
                        <input type="hidden" name="old_bill" value="{{ $formulir->respon_bill }}">
                        <input type="file" name="respon_bill">
                    </div>
                    <div class="col-sm-4">
                        @if(session('status_bill'))
                            <div class="alert alert-success">
                                {{ session('status_bill') }}
                            </div>
                        @endif
                    </div> --}}
                    @if($formulir->respon_bill != null)
                    <div id="bill">
                        <div id="field_bill_1">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Upload bill pembayaran</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="hidden" name="old_bill" value="{{ $formulir->respon_bill }}">
                                    <input type="file" name="respon_bill">
                                </div>
                            </div>
                            <div class="spacer-10"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-3"><label>Bill pembayaran</label></div>
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
                    </div>
                    @elseif($formulir->respon_bill == null)
                    <div id="bill"></div>
                    <div class="row">
                        <div class="col-sm-3"><label>Bill pembayaran</label></div>
                        <div class="col-sm-4">
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                <i class="fa fa-exclamation-triangle"></i>Bill belum dikirim
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            @endif

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

            @if ($formulir->respon_struk != null)
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
            @endif
            
        </form>
        @include('admin.respon-permintaan')
    </div>

    {{-- Toggle show element input --}}
    <script>
        const div_bill_2 = document.getElementById("bill");
        const div_data = document.getElementById("data");
        function toggle(value) {
            if(value == "5" || value == "6"){
                $('#field_bill_1').remove();
                $('#field_data').remove();
                var newField = document.createElement("div");
                newField.setAttribute("id", "field_bill_1");
                newField.innerHTML = '<div class="row">\
                                <div class="col-sm-3">\
                                    <label>Upload bill pembayaran</label>\
                                </div>\
                                <div class="col-sm-9">\
                                    <input type="hidden" name="old_bill" value="{{ $formulir->respon_bill }}">\
                                    <input type="file" name="respon_bill" required>\
                                </div>\
                            </div>\
                            <div class="spacer-10"></div>';
                    div_bill_2.append(newField); 
            }else if(value == "4"){
                $('#field_bill_1').remove();
                $('#field_data').remove();
                var newField = document.createElement("div");
                newField.setAttribute("id", "field_data");
                newField.innerHTML = '<div class="row">\
                                <div class="col-sm-3">\
                                    <label>Upload data permintaan</label>\
                                </div>\
                                <div class="col-sm-9">\
                                    <input type="hidden" name="old_data" value="{{ $formulir->respon_data }}">\
                                    <input type="file" name="respon_data" required>\
                                </div>\
                            </div>\
                            <div class="spacer-10"></div>';
                    div_data.append(newField);
            }else{
                $('#field_bill_1').remove();
                $('#field_data').remove();
            }
        }
    </script>
@endsection
