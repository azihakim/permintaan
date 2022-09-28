@extends('layout.master')
@section('menu-title', 'Formulir Permintaan')
@section('formulir', 'page-arrow active-page')
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
                                <span class="text-muted">@yield('form-title')</span>
                            </h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                @yield('form')
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
                                            <div class="spacer-20"></div>\
                                            <div class="col-sm-12">\
                                                <h4 class="semibold">Data petir</h4>\
                                                <h5>\
                                                    <span class="text-muted">Lokasi dan tanggal</span>\
                                                </h5>\
                                            </div>\
                                            <div class="spacer-10"></div>\
                                            <div id="input_datapetir">\
                                                <div class="row group col-sm-12 " id="add_datapetir[0]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_petir[0]" value="{{ old('lokasi_petir') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <div>\
                                                            <strong>Latitude</strong>\
                                                            <input type="number" required="" aria-required="true" name="latitude_petir[0]" value="{{ old('latitude_petir') }}"\
                                                                class="form-control">\
                                                                <div class="spacer-10"></div>\
                                                        </div>\
                                                        <div>\
                                                            <strong>Longitude</strong>\
                                                            <input type="number" required=""\
                                                                name="longitude_petir[0]" value="{{ old('longitude_petir') }}" class="form-control">\
                                                        </div>\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_dari_petir[0]" required="" value="{{ old('tgl_dari_petir') }}">\
                                                        <div class="spacer-10"></div>\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_sampai_petir[0]" required="" value="{{ old('tgl_sampai_petir') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12 " id="add_datapetir[1]">\
                                                    <div class="spacer-20"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_petir[1]" value="{{ old('lokasi_petir') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <div>\
                                                            <strong>Latitude</strong>\
                                                            <input type="number" name="latitude_petir[1]" value="{{ old('latitude_petir') }}"\
                                                                class="form-control">\
                                                                <div class="spacer-10"></div>\
                                                        </div>\
                                                        <div>\
                                                            <strong>Longitude</strong>\
                                                            <input type="number"\
                                                                name="longitude_petir[1]" value="{{ old('longitude_petir') }}" class="form-control">\
                                                        </div>\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_dari_petir[1]" value="{{ old('tgl_dari_petir') }}">\
                                                        <div class="spacer-10"></div>\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_sampai_petir[1]" value="{{ old('tgl_sampai_petir') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12 " id="add_datapetir[2]">\
                                                    <div class="spacer-20"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_petir[2]" value="{{ old('lokasi_petir') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <div>\
                                                            <strong>Latitude</strong>\
                                                            <input type="number" name="latitude_petir[2]" value="{{ old('latitude_petir') }}"\
                                                                class="form-control">\
                                                                <div class="spacer-10"></div>\
                                                        </div>\
                                                        <div>\
                                                            <strong>Longitude</strong>\
                                                            <input type="number"\
                                                                name="longitude_petir[2]" value="{{ old('longitude_petir') }}" class="form-control">\
                                                        </div>\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_dari_petir[2]" value="{{ old('tgl_dari_petir') }}">\
                                                        <div class="spacer-10"></div>\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_sampai_petir[2]" value="{{ old('tgl_sampai_petir') }}">\
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

        //  data hari hujan
        const Div_dataharihujan = document.getElementById('container_dataharihujan');
        function toggle_dataharihujan() {
                    if (document.getElementById("cb_dataharihujan").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_dataharihujan");
                        newField.innerHTML = '<div class="row col-sm-12" id="dataharihujan">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_harihujan[0]" value="{{ old('lokasi_harihujan') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_dari_harihujan[0]" required="" value="{{ old('tgl_dari_harihujan') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_sampai_harihujan[0]" required="" value="{{ old('tgl_sampai_harihujan') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_dataharihujan[1]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_harihujan[[1]]" value="{{ old('lokasi_harihujan') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_harihujan[[1]]" value="{{ old('tgl_dari_harihujan') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_harihujan[[1]]" value="{{ old('tgl_sampai_harihujan') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_dataharihujan[2]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_harihujan[[2]]" value="{{ old('lokasi_harihujan') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_harihujan[[2]]" value="{{ old('tgl_dari_harihujan') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_harihujan[[2]]" value="{{ old('tgl_sampai_harihujan') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
            
        //  data curah hujan rata-rata
        const Div_datacurahhujanratarata = document.getElementById('container_datacurahhujanratarata');
        function toggle_datacurahhujanratarata() {
                    if (document.getElementById("cb_datacurahhujanratarata").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datacurahhujanratarata");
                        newField.innerHTML = '<div class="row col-sm-12" id="datacurahhujanratarata">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanratarata[0]" value="{{ old('lokasi_curahhujanratarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_curahhujanratarata[0]" required="" value="{{ old('tgl_dari_curahhujanratarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_curahhujanratarata[0]" required="" value="{{ old('tgl_sampai_curahhujanratarata') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datacurahhujanratarata[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanratarata[1]" value="{{ old('lokasi_curahhujanratarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_curahhujanratarata[1]" value="{{ old('tgl_dari_curahhujanratarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_curahhujanratarata[1]" value="{{ old('tgl_sampai_curahhujanratarata') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datacurahhujanratarata[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanratarata[2]" value="{{ old('lokasi_curahhujanratarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_curahhujanratarata[2]" value="{{ old('tgl_dari_curahhujanratarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_curahhujanratarata[2]" value="{{ old('tgl_sampai_curahhujanratarata') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        

        //  data curah hujan maksimum
        const Div_datacurahhujanmaksimum = document.getElementById('container_datacurahhujanmaksimum');
        function toggle_datacurahhujanmaksimum() {
                    if (document.getElementById("cb_datacurahhujanmaksimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datacurahhujanmaksimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datacurahhujanmaksimum">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" style="width: 100% ; height: 90px" required=""\
                                                            name="lokasi_curahhujanmaksimum[0]" value="{{ old('lokasi_curahhujanmaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_curahhujanmaksimum[0]" required="" value="{{ old('tgl_dari_curahhujanmaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_curahhujanmaksimum[0]" required="" value="{{ old('tgl_sampai_curahhujanmaksimum') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datacurahhujanmaksimum[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanmaksimum[1]" value="{{ old('lokasi_curahhujanmaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_curahhujanmaksimum[1]" value="{{ old('tgl_dari_curahhujanmaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_curahhujanmaksimum[1]" value="{{ old('tgl_sampai_curahhujanmaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datacurahhujanmaksimum[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanmaksimum[2]" value="{{ old('lokasi_curahhujanmaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_curahhujanmaksimum[2]" value="{{ old('tgl_dari_curahhujanmaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_curahhujanmaksimum[2]" value="{{ old('tgl_sampai_curahhujanmaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        //  data curah hujan bulanan
        const Div_datacurahhujanbulanan = document.getElementById('container_datacurahhujanbulanan');
        function toggle_datacurahhujanbulanan() {
                    if (document.getElementById("cb_datacurahhujanbulanan").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datacurahhujanbulanan");
                        newField.innerHTML = '<div class="row col-sm-12" id="datacurahhujanbulanan">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanbulanan[0]" value="{{ old('lokasi_curahhujanbulanan') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_curahhujanbulanan[0]" required="" value="{{ old('tgl_dari_curahhujanbulanan') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_curahhujanbulanan[0]" required="" value="{{ old('tgl_sampai_curahhujanbulanan') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datacurahhujanbulanan[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanbulanan[1]" value="{{ old('lokasi_curahhujanbulanan') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_curahhujanbulanan[1]" value="{{ old('tgl_dari_curahhujanbulanan') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_curahhujanbulanan[1]" value="{{ old('tgl_sampai_curahhujanbulanan') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datacurahhujanbulanan[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_curahhujanbulanan[2]" value="{{ old('lokasi_curahhujanbulanan') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_curahhujanbulanan[2]" value="{{ old('tgl_dari_curahhujanbulanan') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_curahhujanbulanan[2]" value="{{ old('tgl_sampai_curahhujanbulanan') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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

        // data suhu udara rata-rata
        const Div_datasuhuudararatarata = document.getElementById('container_datasuhuudararatarata');
        function toggle_datasuhuudararatarata() {
                    if (document.getElementById("cb_datasuhuudararatarata").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datasuhuudararatarata");
                        newField.innerHTML = '<div class="row col-sm-12" id="datasuhuudararatarata">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suhuudararatarata[0]" value="{{ old('lokasi_suhuudararatarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_suhuudararatarata[0]" required="" value="{{ old('tgl_dari_suhuudararatarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_suhuudararatarata[0]" required="" value="{{ old('tgl_sampai_suhuudararatarata') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datasuhuudararatarata[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suhuudararatarata[1]" value="{{ old('lokasi_suhuudararatarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_suhuudararatarata[1]" value="{{ old('tgl_dari_suhuudararatarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_suhuudararatarata[1]" value="{{ old('tgl_sampai_suhuudararatarata') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datasuhuudararatarata[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suhuudararatarata[2]" value="{{ old('lokasi_suhuudararatarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_suhuudararatarata[2]" value="{{ old('tgl_dari_suhuudararatarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_suhuudararatarata[2]" value="{{ old('tgl_sampai_suhuudararatarata') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        // data suhu udara maksimum
        const Div_datasuhuudaramaksimum = document.getElementById('container_datasuhuudaramaksimum');
        function toggle_datasuhuudaramaksimum() {
                    if (document.getElementById("cb_datasuhuudaramaksimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datasuhuudaramaksimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datasuhuudaramaksimum">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suhuudaramaksimum[0]" value="{{ old('lokasi_suhuudaramaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_suhuudaramaksimum[0]" required="" value="{{ old('tgl_dari_suhuudaramaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_suhuudaramaksimum[0]" required="" value="{{ old('tgl_sampai_suhuudaramaksimum') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datasuhuudaramaksimum[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suhuudaramaksimum[1]" value="{{ old('lokasi_suhuudaramaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_suhuudaramaksimum[1]" value="{{ old('tgl_dari_suhuudaramaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_suhuudaramaksimum[1]" value="{{ old('tgl_sampai_suhuudaramaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datasuhuudaramaksimum[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suhuudaramaksimum[2]" value="{{ old('lokasi_suhuudaramaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_suhuudaramaksimum[2]" value="{{ old('tgl_dari_suhuudaramaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_suhuudaramaksimum[2]" value="{{ old('tgl_sampai_suhuudaramaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        // data suhu udara minimum
        const Div_datasuhuudaraminimum = document.getElementById('container_datasuhuudaraminimum');
        function toggle_datasuhuudaraminimum() {
                    if (document.getElementById("cb_datasuhuudaraminimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datasuhuudaraminimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datasuDiv_datasuhuudaraminimum">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suDiv_datasuhuudaraminimum[0]" value="{{ old('lokasi_suDiv_datasuhuudaraminimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_suDiv_datasuhuudaraminimum[0]" required="" value="{{ old('tgl_dari_suDiv_datasuhuudaraminimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_suDiv_datasuhuudaraminimum[0]" required="" value="{{ old('tgl_sampai_suDiv_datasuhuudaraminimum') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datasuhuudaraminimum[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suDiv_datasuhuudaraminimum[1]" value="{{ old('lokasi_suDiv_datasuhuudaraminimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_suDiv_datasuhuudaraminimum[1]" value="{{ old('tgl_dari_suDiv_datasuhuudaraminimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_suDiv_datasuhuudaraminimum[1]" value="{{ old('tgl_sampai_suDiv_datasuhuudaraminimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datasuhuudaraminimum[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_suDiv_datasuhuudaraminimum[2]" value="{{ old('lokasi_suDiv_datasuhuudaraminimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_suDiv_datasuhuudaraminimum[2]" value="{{ old('tgl_dari_suDiv_datasuhuudaraminimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_suDiv_datasuhuudaraminimum[2]" value="{{ old('tgl_sampai_suDiv_datasuhuudaraminimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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

        // data kelembapan udara rata-rata
        const Div_datakelembapanudararatarata = document.getElementById('container_datakelembapanudararatarata');
        function toggle_datakelembapanudararatarata() {
                    if (document.getElementById("cb_datakelembapanudararatarata").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datakelembapanudararatarata");
                        newField.innerHTML = '<div class="row col-sm-12" id="datakelembapanudararatarata">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelembapanudararatarata[0]" value="{{ old('lokasi_kelembapanudararatarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kelembapanudararatarata[0]" required="" value="{{ old('tgl_dari_kelembapanudararatarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kelembapanudararatarata[0]" required="" value="{{ old('tgl_sampai_kelembapanudararatarata') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datakelembapanudararatarata[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelembapanudararatarata[1]" value="{{ old('lokasi_kelembapanudararatarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kelembapanudararatarata[1]" value="{{ old('tgl_dari_kelembapanudararatarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kelembapanudararatarata[1]" value="{{ old('tgl_sampai_kelembapanudararatarata') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datakelembapanudararatarata[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelembapanudararatarata[2]" value="{{ old('lokasi_kelembapanudararatarata') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kelembapanudararatarata[2]" value="{{ old('tgl_dari_kelembapanudararatarata') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kelembapanudararatarata[2]" value="{{ old('tgl_sampai_kelembapanudararatarata') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        // data kelembapan udara maksimum
        const Div_datakelembapanudaramaksimum = document.getElementById('container_datakelembapanudaramaksimum');
        function toggle_datakelembapanudaramaksimum() {
                    if (document.getElementById("cb_datakelembapanudaramaksimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datakelembapanudaramaksimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datakelemDiv_datakelembapanudaramaksimum">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelemDiv_datakelembapanudaramaksimum[0]" value="{{ old('lokasi_kelemDiv_datakelembapanudaramaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kelemDiv_datakelembapanudaramaksimum[0]" required="" value="{{ old('tgl_dari_kelemDiv_datakelembapanudaramaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kelemDiv_datakelembapanudaramaksimum[0]" required="" value="{{ old('tgl_sampai_kelemDiv_datakelembapanudaramaksimum') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datakelembapanudaramaksimum[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelemDiv_datakelembapanudaramaksimum[1]" value="{{ old('lokasi_kelemDiv_datakelembapanudaramaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kelemDiv_datakelembapanudaramaksimum[1]" value="{{ old('tgl_dari_kelemDiv_datakelembapanudaramaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kelemDiv_datakelembapanudaramaksimum[1]" value="{{ old('tgl_sampai_kelemDiv_datakelembapanudaramaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datakelembapanudaramaksimum[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelemDiv_datakelembapanudaramaksimum[2]" value="{{ old('lokasi_kelemDiv_datakelembapanudaramaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kelemDiv_datakelembapanudaramaksimum[2]" value="{{ old('tgl_dari_kelemDiv_datakelembapanudaramaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kelemDiv_datakelembapanudaramaksimum[2]" value="{{ old('tgl_sampai_kelemDiv_datakelembapanudaramaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        // data kelembapan udara minimum
        const Div_datakelembapanudaraminimum = document.getElementById('container_datakelembapanudaraminimum');
        function toggle_datakelembapanudaraminimum() {
                    if (document.getElementById("cb_datakelembapanudaraminimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datakelembapanudaraminimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datakelemDiv_datakelembapanudaraminimum">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelemDiv_datakelembapanudaraminimum[0]" value="{{ old('lokasi_kelemDiv_datakelembapanudaraminimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kelemDiv_datakelembapanudaraminimum[0]" required="" value="{{ old('tgl_dari_kelemDiv_datakelembapanudaraminimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kelemDiv_datakelembapanudaraminimum[0]" required="" value="{{ old('tgl_sampai_kelemDiv_datakelembapanudaraminimum') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datakelembapanudaraminimum[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelemDiv_datakelembapanudaraminimum[1]" value="{{ old('lokasi_kelemDiv_datakelembapanudaraminimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kelemDiv_datakelembapanudaraminimum[1]" value="{{ old('tgl_dari_kelemDiv_datakelembapanudaraminimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kelemDiv_datakelembapanudaraminimum[1]" value="{{ old('tgl_sampai_kelemDiv_datakelembapanudaraminimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datakelembapanudaraminimum[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kelemDiv_datakelembapanudaraminimum[2]" value="{{ old('lokasi_kelemDiv_datakelembapanudaraminimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kelemDiv_datakelembapanudaraminimum[2]" value="{{ old('tgl_dari_kelemDiv_datakelembapanudaraminimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kelemDiv_datakelembapanudaraminimum[2]" value="{{ old('tgl_sampai_kelemDiv_datakelembapanudaraminimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        // data kecepatan dan arah angin
        const Div_datakecepatandanarahangin = document.getElementById('container_datakecepatandanarahangin');
        function toggle_datakecepatandanarahangin() {
                    if (document.getElementById("cb_datakecepatandanarahangin").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datakecepatandanarahangin");
                        newField.innerHTML = '<div class="row col-sm-12" id="datakecepatandanarahangin">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kecepatandanarahangin[0]" value="{{ old('lokasi_kecepatandanarahangin') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kecepatandanarahangin[0]" required="" value="{{ old('tgl_dari_kecepatandanarahangin') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kecepatandanarahangin[0]" required="" value="{{ old('tgl_sampai_kecepatandanarahangin') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datakecepatandanarahangin[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kecepatandanarahangin[1]" value="{{ old('lokasi_kecepatandanarahangin') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kecepatandanarahangin[1]" value="{{ old('tgl_dari_kecepatandanarahangin') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kecepatandanarahangin[1]" value="{{ old('tgl_sampai_kecepatandanarahangin') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datakecepatandanarahangin[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_kecepatandanarahangin[2]" value="{{ old('lokasi_kecepatandanarahangin') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_kecepatandanarahangin[2]" value="{{ old('tgl_dari_kecepatandanarahangin') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_kecepatandanarahangin[2]" value="{{ old('tgl_sampai_kecepatandanarahangin') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        // data kecepatan angin maksimum
        const Div_datakecepatananginmaksimum = document.getElementById('container_datakecepatananginmaksimum');
        function toggle_datakecepatananginmaksimum() {
                    if (document.getElementById("cb_datakecepatananginmaksimum").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datakecepatananginmaksimum");
                        newField.innerHTML = '<div class="row col-sm-12" id="datakeceDiv_datakecepatananginmaksimum">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_keceDiv_datakecepatananginmaksimum[0]" value="{{ old('lokasi_keceDiv_datakecepatananginmaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_keceDiv_datakecepatananginmaksimum[0]" required="" value="{{ old('tgl_dari_keceDiv_datakecepatananginmaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_keceDiv_datakecepatananginmaksimum[0]" required="" value="{{ old('tgl_sampai_keceDiv_datakecepatananginmaksimum') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datakecepatananginmaksimum[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_keceDiv_datakecepatananginmaksimum[1]" value="{{ old('lokasi_keceDiv_datakecepatananginmaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_keceDiv_datakecepatananginmaksimum[1]" value="{{ old('tgl_dari_keceDiv_datakecepatananginmaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_keceDiv_datakecepatananginmaksimum[1]" value="{{ old('tgl_sampai_keceDiv_datakecepatananginmaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datakecepatananginmaksimum[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_keceDiv_datakecepatananginmaksimum[2]" value="{{ old('lokasi_keceDiv_datakecepatananginmaksimum') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_keceDiv_datakecepatananginmaksimum[2]" value="{{ old('tgl_dari_keceDiv_datakecepatananginmaksimum') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_keceDiv_datakecepatananginmaksimum[2]" value="{{ old('tgl_sampai_keceDiv_datakecepatananginmaksimum') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        // data lama penyinaran matahari
        const Div_datalamapenyinaranmatahari = document.getElementById('container_datalamapenyinaranmatahari');
        function toggle_datalamapenyinaranmatahari() {
                    if (document.getElementById("cb_datalamapenyinaranmatahari").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_datalamapenyinaranmatahari");
                        newField.innerHTML = '<div class="row col-sm-12" id="datalamapenyinaranmatahari">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_lamapenyinaranmatahari[0]" value="{{ old('lokasi_lamapenyinaranmatahari') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_lamapenyinaranmatahari[0]" required="" value="{{ old('tgl_dari_lamapenyinaranmatahari') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_lamapenyinaranmatahari[0]" required="" value="{{ old('tgl_sampai_lamapenyinaranmatahari') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datalamapenyinaranmatahari[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_lamapenyinaranmatahari[1]" value="{{ old('lokasi_lamapenyinaranmatahari') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_lamapenyinaranmatahari[1]" value="{{ old('tgl_dari_lamapenyinaranmatahari') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_lamapenyinaranmatahari[1]" value="{{ old('tgl_sampai_lamapenyinaranmatahari') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_datalamapenyinaranmatahari[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_lamapenyinaranmatahari[2]" value="{{ old('lokasi_lamapenyinaranmatahari') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_lamapenyinaranmatahari[2]" value="{{ old('tgl_dari_lamapenyinaranmatahari') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_lamapenyinaranmatahari[2]" value="{{ old('tgl_sampai_lamapenyinaranmatahari') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        // data prakiraan musim
        const Div_dataprakiraanmusim = document.getElementById('container_dataprakiraanmusim');
        function toggle_dataprakiraanmusim() {
                    if (document.getElementById("cb_dataprakiraanmusim").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_dataprakiraanmusim");
                        newField.innerHTML = '<div class="row col-sm-12" id="dataprakiraanmusim">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_prakiraanmusim[0]" value="{{ old('lokasi_prakiraanmusim') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_prakiraanmusim[0]" required="" value="{{ old('tgl_dari_prakiraanmusim') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_prakiraanmusim[0]" required="" value="{{ old('tgl_sampai_prakiraanmusim') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_dataprakiraanmusim[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_prakiraanmusim[1]" value="{{ old('lokasi_prakiraanmusim') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_prakiraanmusim[1]" value="{{ old('tgl_dari_prakiraanmusim') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_prakiraanmusim[1]" value="{{ old('tgl_sampai_prakiraanmusim') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_dataprakiraanmusim[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_prakiraanmusim[2]" value="{{ old('lokasi_prakiraanmusim') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_prakiraanmusim[2]" value="{{ old('tgl_dari_prakiraanmusim') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_prakiraanmusim[2]" value="{{ old('tgl_sampai_prakiraanmusim') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        // data klasifikasi iklim
        const Div_dataklasifikasiiklim = document.getElementById('container_dataklasifikasiiklim');
        function toggle_dataklasifikasiiklim() {
                    if (document.getElementById("cb_dataklasifikasiiklim").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_dataklasifikasiiklim");
                        newField.innerHTML = '<div class="row col-sm-12" id="dataklasifikasiiklim">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_klasifikasiiklim[0]" value="{{ old('lokasi_klasifikasiiklim') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_klasifikasiiklim[0]" required="" value="{{ old('tgl_dari_klasifikasiiklim') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_klasifikasiiklim[0]" required="" value="{{ old('tgl_sampai_klasifikasiiklim') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_dataklasifikasiiklim[1]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_klasifikasiiklim[1]" value="{{ old('lokasi_klasifikasiiklim') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_klasifikasiiklim[1]" value="{{ old('tgl_dari_klasifikasiiklim') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_klasifikasiiklim[1]" value="{{ old('tgl_sampai_klasifikasiiklim') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_dataklasifikasiiklim[2]">\
                                                    <div class="spacer-10"></div>\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_klasifikasiiklim[2]" value="{{ old('lokasi_klasifikasiiklim') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_klasifikasiiklim[2]" value="{{ old('tgl_dari_klasifikasiiklim') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_klasifikasiiklim[2]" value="{{ old('tgl_sampai_klasifikasiiklim') }}">\
                                                    </div>\
                                                    <div class="spacer-5"></div>\
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
        
        // data radiasi matahari
        const Div_dataradiasimatahari = document.getElementById('container_dataradiasimatahari');
        function toggle_dataradiasimatahari() {
                    if (document.getElementById("cb_dataradiasimatahari").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_dataradiasimatahari");
                        newField.innerHTML = '<div class="row col-sm-12" id="dataradiasimatahari">\
                                            <div class="spacer-20"></div>\
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
                                                        <textarea class="form-control" required="" style="width: 100% ; height: 90px"\
                                                            name="lokasi_radiasimatahari[0]" value="{{ old('lokasi_radiasimatahari') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_radiasimatahari[0]" required="" value="{{ old('tgl_dari_radiasimatahari') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_radiasimatahari[0]" required="" value="{{ old('tgl_sampai_radiasimatahari') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_dataradiasimatahari[1]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_radiasimatahari[1]" value="{{ old('lokasi_radiasimatahari') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_radiasimatahari[1]" value="{{ old('tgl_dari_radiasimatahari') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_radiasimatahari[1]" value="{{ old('tgl_sampai_radiasimatahari') }}">\
                                                    </div>\
                                                </div>\
                                                <div class="row group col-sm-12" id="add_dataradiasimatahari[2]">\
                                                    <div class="col-sm-6">\
                                                        <strong>Lokasi</strong>\
                                                        <textarea class="form-control" style="width: 100% ; height: 90px"\
                                                            name="lokasi_radiasimatahari[2]" value="{{ old('lokasi_radiasimatahari') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_dari_radiasimatahari[2]" value="{{ old('tgl_dari_radiasimatahari') }}">\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                             name="tgl_sampai_radiasimatahari[2]" value="{{ old('tgl_sampai_radiasimatahari') }}">\
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
        
        // unsur cuara lainnya
        const Div_unsurcuacalainnya = document.getElementById('container_unsurcuacalainnya');
        function toggle_unsurcuacalainnya() {
                    if (document.getElementById("cb_unsurcuacalainnya").checked) {
                        var newField = document.createElement("div");
                        newField.setAttribute("id", "field_unsurcuacalainnya");
                        newField.innerHTML = '<div class="row col-sm-12" id="unsurcuacalainnya">\
                                            <div class="spacer-20"></div>\
                                                <div class="col-sm-12">\
                                                    <h4>Unsur cuaca lainnya</h4>\
                                                    <div class="spacer-10"></div>\
                                                </div>\
                                                <div class="row col-sm-12">\
                                                    <div class="col-sm-12">\
                                                    <textarea\
                                                        name=""\
                                                    \
                                                        class="form-control autosize"\
                                                        style="width: 100%"\
                                                        placeholder="Deskripsi unsur cuaca" required=""></textarea>\
                                                    <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div id="input_unsurcuacalainnya">\
                                                    <div class="row" id="add_unsurcuacalainnya0">\
                                                        <div class="col-sm-12">\
                                                        <div class="spacer-10"></div>\
                                                        <div class="col-sm-6">\
                                                            <strong>Lokasi</strong>\
                                                            <textarea\
                                                        \
                                                            class="form-control"\
                                                            required="" style="width: 100%; height: 90px"\
                                                            name="lokasi_unsurcuacalainnya[0]" required=""\
                                                            value=""></textarea>\
                                                        </div>\
                                                        <div class="col-sm-6">\
                                                            <div class="spacer-5"></div>\
                                                            <div>\
                                                            <strong>Dari</strong>\
                                                            <input\
                                                                class="form-control"\
                                                                size="16"\
                                                                type="date"\
                                                            \
                                                                name="dari_unsurcuacalainnya[0]" required=""\
                                                                value="" />\
                                                            </div>\
                                                            <div class="spacer-5"></div>\
                                                            <strong>Sampai</strong>\
                                                            <input\
                                                            class="form-control"\
                                                            size="16"\
                                                            type="date"\
                                                        \
                                                            name="sampai_unsurcuacalainnya[0]" required=""\
                                                            value="" />\
                                                        </div>\
                                                        </div>\
                                                    </div>\
                                                    <div id="add_unsurcuacalainnya1">\
                                                        <div class="spacer-10"></div>\
                                                        <div id="add_unsurcuacalainnya[1]">\
                                                        <div class="col-sm-12">\
                                                            <div class="row">\
                                                            <div class="spacer-10"></div>\
                                                            <div class="col-sm-6">\
                                                                <strong>Lokasi</strong>\
                                                                <textarea\
                                                            \
                                                                class="form-control"\
                                                                style="width: 100%; height: 90px"\
                                                                name="lokasi_unsurcuacalainnya[1]"\
                                                                value=""></textarea>\
                                                            </div>\
                                                            <div class="col-sm-6">\
                                                                <div class="spacer-5"></div>\
                                                                <div>\
                                                                <strong>Dari</strong>\
                                                                <input\
                                                                    class="form-control"\
                                                                    size="16"\
                                                                    type="date"\
                                                                \
                                                                    name="dari_unsurcuacalainnya[1]"\
                                                                    value="" />\
                                                                </div>\
                                                                <div class="spacer-5"></div>\
                                                                <div>\
                                                                <strong>Sampai</strong>\
                                                                <input\
                                                                    class="form-control"\
                                                                    size="16"\
                                                                    type="date"\
                                                                \
                                                                    name="sampai_unsurcuacalainnya[1]"\
                                                                    value="" />\
                                                                </div>\
                                                            </div>\
                                                            </div>\
                                                        </div>\
                                                        </div>\
                                                    </div>\
                                                    <div id="add_unsurcuacalainnya2">\
                                                        <div class="spacer-10"></div>\
                                                        <div id="add_unsurcuacalainnya[2]">\
                                                        <div class="col-sm-12">\
                                                            <div class="row">\
                                                            <div class="spacer-10"></div>\
                                                            <div class="col-sm-6">\
                                                                <strong>Lokasi</strong>\
                                                                <textarea\
                                                            \
                                                                class="form-control"\
                                                                style="width: 100%; height: 90px"\
                                                                name="lokasi_unsurcuacalainnya[2]"\
                                                                value=""></textarea>\
                                                            </div>\
                                                            <div class="col-sm-6">\
                                                                <div class="spacer-5"></div>\
                                                                <div>\
                                                                <strong>Dari</strong>\
                                                                <input\
                                                                    class="form-control"\
                                                                    size="16"\
                                                                    type="date"\
                                                                \
                                                                    name="dari_unsurcuacalainnya[2]"\
                                                                    value="" />\
                                                                </div>\
                                                                <div class="spacer-5"></div>\
                                                                <div>\
                                                                <strong>Sampai</strong>\
                                                                <input\
                                                                    class="form-control"\
                                                                    size="16"\
                                                                    type="date"\
                                                                \
                                                                    name="sampai_unsurcuacalainnya[2]"\
                                                                    value="" />\
                                                                </div>\
                                                            </div>\
                                                            </div>\
                                                        </div>\
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
          
    </script>
@endsection