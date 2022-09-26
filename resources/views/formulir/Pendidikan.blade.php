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
                                <form>
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
                                                <input type="text" aria-required="true" name="nama" required=""
                                                    class="form-control ">
                                            </div>
                                        </div>
                                        <div class="spacer-10"></div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>NIM/KTP</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" aria-required="true" name="nim/ktp" required=""
                                                    class="form-control ">
                                            </div>
                                        </div>
                                        <div class="spacer-10"></div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label>Asal instansi</label>
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
                                                            onclick="showhide('dataharihujan')" value="css3"><span></span>
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
                                        {{-- Data petir --}}
                                        <div class="row col-sm-12" id="datapetir" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data petir</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data hari hujan --}}
                                        <div class="row col-sm-12" id="dataharihujan" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data hari hujan</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data curah hujan rata-rata --}}
                                        <div class="row col-sm-12" id="datacurahhujanratarata" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data curah hujan rata-rata</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data curah hujan maksimum --}}
                                        <div class="row col-sm-12" id="datacurahhujanmaksimum" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data curah hujan maksimum</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data curah hujan bulanan --}}
                                        <div class="row col-sm-12" id="datacurahhujanbulanan" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data curah hujan bulanan</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data suhu udara rata-rata --}}
                                        <div class="row col-sm-12" id="datasuhuudararatarata" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data suhu udara rata-rata</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data suhu udara maksimum --}}
                                        <div class="row col-sm-12" id="datasuhuudaramaksimum" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data suhu udara maksimum</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data suhu udara minimum --}}
                                        <div class="row col-sm-12" id="datasuhuudaraminimum" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data suhu udara minimum</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data kelembapan udara rata-rata --}}
                                        <div class="row col-sm-12" id="datakelembapanudararatarata"
                                            style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data kelembapan udara rata-rata</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%" placeholder="Lokasi"></textarea>
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data kelembapan udara maksimum --}}
                                        <div class="row col-sm-12" id="datakelembapanudaramaksimum"
                                            style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data kelembapan udara maksimum</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data kelembapan udara minimum --}}
                                        <div class="row col-sm-12" id="datakelembapanudaraminimum"
                                            style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data kelembapan udara minimum</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data kecepatan dan arah angin --}}
                                        <div class="row col-sm-12" id="datakecepatandanarahangin"
                                            style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data kecepatan dan arah angin</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data kecepatan angin maksimum --}}
                                        <div class="row col-sm-12" id="datakecepatananginmaksimum"
                                            style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data kecepatan angin maksimum</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data lama penyinaran matahari --}}
                                        <div class="row col-sm-12" id="datalamapenyinaranmatahari"
                                            style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data lama penyinaran matahari</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data prakiraan musim --}}
                                        <div class="row col-sm-12" id="dataprakiraanmusim" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data prakiraan musim</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data klasifikasi iklim --}}
                                        <div class="row col-sm-12" id="dataklasifikasiiklim" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data klasifikasi iklim</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Data radiasi matahari --}}
                                        <div class="row col-sm-12" id="dataradiasimatahari" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Data radiasi matahari</h4>
                                                <h5>
                                                    <span class="text-muted">Lokasi dan tanggal</span>
                                                </h5>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                                <div class="spacer-40"></div>
                                            </div>
                                        </div>

                                        {{-- Unsur cuaca lainnya --}}
                                        <div class="row col-sm-12" id="unsurcuacalainnya" style="display:none;">
                                            <div class="col-sm-12">
                                                <h4 class="semibold">Unsur cuaca lainnya</h4>
                                                <div class="spacer-10"></div>
                                            </div>
                                            <div class="row col-sm-12">
                                                <div class="col-sm-12">
                                                    <h5>
                                                        <span class="text-muted">Data unsur cuaca</span>
                                                    </h5>
                                                    <div class="spacer-5"></div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
                                                        placeholder="Unsur cuaca"></textarea>
                                                    <div class="spacer-10"></div>
                                                </div>
                                            </div>
                                            <div class="spacer-20"></div>
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-12">
                                                    <h5>
                                                        <span class="text-muted">Lokasi dan tanggal</span>
                                                    </h5>
                                                    <div class="spacer-5"></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100%"
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
                                                <div class="spacer-40"></div>
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
                                                    <label>Identitas diri KTP/KTM/SIM/Paspor</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="file">
                                                    <div class="helper-text-box">
                                                        <div class="form-helper-header">Nama
                                                            file:<code>KTP/KTM/SIM_Nama</code>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="spacer-10"></div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Proposal Penelitian berisi maksud dan tujuan penelitian yang
                                                        telah
                                                        disetujui oleh pembimbing atau promotor</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="file">
                                                    <div class="helper-text-box">
                                                        <div class="form-helper-header">Nama
                                                            file:<code>Proposal_Nama</code>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="spacer-10"></div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Surat Pengantar dari Kepala Sekolah / Rektor / Dekan (sesuai form
                                                        A)</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="file">
                                                    <div class="helper-text-box">
                                                        <div class="form-helper-header">Nama file:<code>FormA_Nama</code>
                                                            <a download href="../../storage/templateForm/formA.jpeg">
                                                                <p class="text-primary underline">Klik download contoh
                                                                    form
                                                                    A</p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="spacer-10"></div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Surat Pernyataan tidak digunakan untuk kepentingan lain dan
                                                        kesediaan
                                                        menyerahkan salinan hasil penelitian dengan batas waktu tertentu
                                                        sesuai
                                                        form B</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="file">
                                                    <div class="helper-text-box">
                                                        <div class="form-helper-header">Nama file:<code>FormB_Nama</code>
                                                            <a download href="../../storage/templateForm/formB.jpeg">
                                                                <p class="text-primary underline">Klik download contoh
                                                                    form
                                                                    B</p>
                                                            </a>
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
                                                    Accept our <a href="#"
                                                        class="boldunderline">terms</a>?</label>
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
    {{-- <script>
        // var boxdp = document.getElementById('dataPetir');
        // var satu = document.getElementById('cbdatapetir');
        // // addEventListener('load', function() {
        // //     boxdp.style.display = "none";
        // //     // console.log("test");
        // // });
        // satu.addEventListener("click", function() {
        //     if (satu.checked == true) {
        //         boxdp.style.display = "block";
        //         // console.log("test");
        //     }
        //     elseif(satu.checked == false) {
        //         boxdp.style.display = "none";

        //     }
        // });
        // function myfunction() {
        //     var x = document.getElementById("dataPetir");
        //     if (x.style.display === "none") {
        //         x.style.display = "block";
        //     } else {
        //         x.style.display = "none";
        //     }
        // }
    </script> --}}
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
@endsection
