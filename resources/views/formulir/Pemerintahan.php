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
                                <span class="text-muted">Kegiatan Pemerintahan Pusat atau Daerah</span>
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
                                                    <label><input type="checkbox" name="tags"
                                                            value="html5"><span></span>
                                                        Data petir</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data curah hujan rata-rata</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data hari hujan</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data curah hujan maksimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data suhu udara rata-rata</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data suhu udara maksimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="html5"><span></span>
                                                        Data kecepatan angin maksimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data curah hujan bulanan</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data prakiraan musim</label>
                                                </div>
                                                <div class="spacer-10"></div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="stacked-labels">
                                                    <label><input type="checkbox" name="tags"
                                                            value="html5"><span></span>
                                                        Data kelembapan udara rata-rata</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data kelembapan udara maksimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data kelembapan udara minimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data kecepatan dan arah angin</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data suhu udara minimum</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data lama penyinaran matahari</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data klasidikasi iklim</label>
                                                    <label><input type="checkbox" name="tags"
                                                            value="css3"><span></span>
                                                        Data radiasi matahari</label>
                                                    <label><input type="checkbox" name="tags"
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
                                            <div class="row group col-sm-12">
                                                <div class="col-sm-6">
                                                    <textarea name="" required="" class="form-control autosize" style="width: 100% ; height: 10px"
                                                        placeholder="Lokasi"></textarea>
                                                    <div class="spacer-10"></div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="input-group date" id="datepicker-form-2"
                                                        style="width:100%">
                                                        <input class="form-control" size="16" type="text"
                                                            required="" placeholder="Dari" disabled>
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
                                            <div class="row group col-sm-12">
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
                                                    <label>Surat perjanjian kerjasama dengan BMKG tentang kebutuhan
                                                        informasi MKKuG</label>
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
@endsection
