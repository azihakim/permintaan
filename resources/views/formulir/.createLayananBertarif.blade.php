@extends('layout.master')
@section('form-title', 'Layanan Bertarif')

@section('content')
    
    <input type="checkbox" id="cb_datapetir" name="tags" onclick="showhide()"><span></span> Data petir</label>
    <button id="btnadd" class="btn btn-default pull-right">Add</button>
    <div id="div-container">
    </div>
    <div class="row col-sm-12" id="btn_datapetir" style="display:none">
        <div class="col-sm-12">
                <div class="spacer-10"></div>
                <button class="btn btn-default" id="tambah_datapetir" type="button" onclick="showbutton('hapus_datapetir')"><i class="fa fa-plus"></i></button>
                <button class="btn btn-danger" id="hapus_datapetir" type="button"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="spacer-20"></div>
        <script>
            const DivContainer = document.getElementById('div-container');
            function showhide() {
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
                                                            name="lokasi[0]" value="{{ old('lokasi') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <div>\
                                                            <strong>Latitude</strong>\
                                                            <input type="text" aria-required="true" name="latitude[]" value="{{ old('latitude') }}"\
                                                                class="form-control">\
                                                                <div class="spacer-10"></div>\
                                                        </div>\
                                                        <div>\
                                                            <strong>Longitude</strong>\
                                                            <input type="text" aria-required="true"\
                                                                name="longitude[]" value="{{ old('longitude') }}" class="form-control">\
                                                        </div>\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_dari[]" value="{{ old('tgl_dari') }}">\
                                                        <div class="spacer-10"></div>\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_sampai[]" value="{{ old('tgl_sampai') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>';
                                        DivContainer.append(newField);
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
                                                            name="lokasi['+id+']" value="{{ old('lokasi') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <div>\
                                                            <strong>Latitude</strong>\
                                                            <input type="number" aria-required="true" name="latitude['+id+']" value="{{ old('latitude') }}"\
                                                                required="" class="form-control">\
                                                                <div class="spacer-10"></div>\
                                                        </div>\
                                                        <div>\
                                                            <strong>Longitude</strong>\
                                                            <input type="number" aria-required="true" value="{{ old('longitude') }}"\
                                                                name="longitude['+id+']" required="" class="form-control">\
                                                        </div>\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date" value="{{ old('tgl_dari') }}"\
                                                                required="" name="tgl_dari['+id+']">\
                                                        <div class="spacer-10"></div>\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date" value="{{ old('tgl_sampai') }}\
                                                                required="" name="tgl_sampai['+id+']">\
                                                    </div>\
                                                </div>')
            });
            $('#hapus_datapetir').click(function(){
                $('#add_datapetir'+id).remove();
                id--;
            });
        })
        </script>
        <script>
        
        </script>
         {{-- <script>
            
            function Addnew(){
                var newField = document.createElement("div");
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
                                                            name="lokasi[0]" value="{{ old('lokasi') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <div>\
                                                            <strong>Latitude</strong>\
                                                            <input type="number" aria-required="true" name="latitude[]" value="{{ old('latitude') }}"\
                                                                class="form-control">\
                                                                <div class="spacer-10"></div>\
                                                        </div>\
                                                        <div>\
                                                            <strong>Longitude</strong>\
                                                            <input type="number" aria-required="true"\
                                                                name="longitude[]" value="{{ old('longitude') }}" class="form-control">\
                                                        </div>\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_dari[]" value="{{ old('tgl_dari') }}">\
                                                        <div class="spacer-10"></div>\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_sampai[]" value="{{ old('tgl_sampai') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                            <div class="row col-sm-12">\
                                                <div class="col-sm-12">\
                                                        <div class="spacer-10"></div>\
                                                        <button class="btn btn-default" id="tambah_datapetir" type="button">\
                                                            <i class="fa fa-plus"></i>\
                                                            </button>\
                                                        <button class="btn btn-danger" id="hapus_datapetir" type="button" style="display:none">\
                                                                <i class="fa fa-minus"></i></button>\
                                                </div>\
                                            </div>\
                                            <div class="spacer-20"></div>\
                                        </div>';
                DivContainer.appendChild(newField);
            }
        </script> --}}

        {{-- <script>
            const BtnAdd = document.querySelector('#btnadd');
            const DivContainer = document.getElementById('div-container');
            BtnAdd.addEventListener("click", Addnew);
            
            function Addnew(){
                const newDiv = document.createElement("div");
                // console.log("add");
                var newField = document.createElement("div");
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
                                                            name="lokasi[0]" value="{{ old('lokasi') }}"></textarea>\
                                                            <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <div>\
                                                            <strong>Latitude</strong>\
                                                            <input type="number" aria-required="true" name="latitude[]" value="{{ old('latitude') }}"\
                                                                class="form-control">\
                                                                <div class="spacer-10"></div>\
                                                        </div>\
                                                        <div>\
                                                            <strong>Longitude</strong>\
                                                            <input type="number" aria-required="true"\
                                                                name="longitude[]" value="{{ old('longitude') }}" class="form-control">\
                                                        </div>\
                                                        <div class="spacer-10"></div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <strong>Dari</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_dari[]" value="{{ old('tgl_dari') }}">\
                                                        <div class="spacer-10"></div>\
                                                        <strong>Sampai</strong>\
                                                        <input class="form-control" size="16" type="date"\
                                                                name="tgl_sampai[]" value="{{ old('tgl_sampai') }}">\
                                                    </div>\
                                                </div>\
                                            </div>\
                                            <div class="row col-sm-12">\
                                                <div class="col-sm-12">\
                                                        <div class="spacer-10"></div>\
                                                        <button class="btn btn-default" id="tambah_datapetir" type="button">\
                                                            <i class="fa fa-plus"></i>\
                                                            </button>\
                                                        <button class="btn btn-danger" id="hapus_datapetir" type="button" style="display:none">\
                                                                <i class="fa fa-minus"></i></button>\
                                                </div>\
                                            </div>\
                                            <div class="spacer-20"></div>\
                                        </div>';
                DivContainer.appendChild(newField);
            }
        </script> --}}
@endsection
