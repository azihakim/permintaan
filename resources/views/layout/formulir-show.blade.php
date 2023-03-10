@extends('layout.master')
@section('menu-title', 'Formulir Permintaan')
@section('formulir', 'page-arrow active-page')
@section('content')
    <div class="inner-padding">
        <div class="row">
            <div class="col-sm-12">
                <div class="tab-content">
                    <div id="content-tab-3-a" class="tab-pane active">
                        <fieldset>
                            <div class="subheading">
                                <h2>Formulir Permintaan</h2>
                                <div class="spacer-5"></div>
                                <h3>
                                    <span class="text-muted">@yield('form-title')</span>
                                </h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    {{-- Start data diri --}}
                                    <div class="spacer-10"></div>
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
                                            <p>{{ Auth::user()->name }}</p>
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Asal instansi</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>{{ Auth::user()->instansi }}</p>
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Nomor telepon</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>{{ Auth::user()->no_wa }}</p>
                                        </div>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <p>{{ Auth::user()->email }}</p>
                                        </div>
                                    </div> 
                                    {{-- End data diri --}}
                                    
                                    <div class="spacer-40"></div>
                                    <hr>
                                    <div class="spacer-20"></div>
                                    {{-- form --}}
                                    {{-- Start data permintaan  --}}
                                        @foreach ($datapermintaan as $item)
                                            <input type="hidden" required="" name="id_df_{{ $item->jenis_data }}[]" value={{ "$item->id" }}>
                                            <div>
                                                @if($item->jenis_data == "dataharihujan")
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
                                                @endif
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    @if($item->jenis_data != "datapetir" and $item->jenis_data != "unsurcuacalainnya")
                                                        <div class="col-sm-6">
                                                            <div class="spacer-5"></div>
                                                            <strong>Lokasi</strong>
                                                            <textarea disabled class="form-control autosize" style="width: 100%; height: 28px" 
                                                            name="lokasi_{{ $item->jenis_data }}[]" required="">{{ $item->lokasi }}</textarea>
                                                            <div class="spacer-10"></div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <strong>Dari</strong>
                                                            <input disabled class="form-control" size="16" type="date" required=""
                                                            name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}"/>
                                                            <div class="spacer-10"></div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <strong>Sampai</strong>
                                                            <input disabled class="form-control" size="16" type="date" required=""
                                                            name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}"/>
                                                        </div>
                                                    <div class="spacer-15"></div>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach

                                        @foreach($datapermintaan as $item)
                                            @if($item->jenis_data == 'datapetir')
                                            <h4 class="bold">Data petir</h4>
                                            <div class="col-sm-12">
                                                <div class="spacer-5"></div>
                                                <strong>Deskripsi</strong>
                                                <textarea required="" disabled class="form-control autosize" style="width: 48% ; height: 28px"
                                                    name="deskripsi_{{ $item->jenis_data }}">{{ $item->desk_petir }}</textarea>
                                            </div>
                                                    @foreach ($datapermintaan->where('jenis_data','datapetir') as $item)
                                                    <input type="hidden" required="" name="id_df_{{ $item->jenis_data }}[]" value={{ "$item->id" }}>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                                <div class="spacer-5"></div>
                                                                <div class="col-sm-6">
                                                                    <strong>Lokasi</strong>
                                                                    <textarea disabled class="form-control autosize" style="width: 100% ; height: 28px"
                                                                    name="lokasi_{{ $item->jenis_data }}[]" required="">{{ $item->lokasi }}</textarea>
                                                                    <div class="spacer-10"></div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <strong>Tanggal</strong>
                                                                    <input disabled class="form-control" size="16" type="date"
                                                                            required="" name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}">
                                                                    <div class="spacer-10"></div>
                                                                </div>
                                                                {{-- <div class="col-sm-3">
                                                                    <strong>Sampai</strong>
                                                                    <input disabled class="form-control" size="16" type="date"
                                                                            required="" name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}">
                                                                </div> --}}
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @break
                                            </div>
                                            @endif
                                        @endforeach

                                        @foreach($datapermintaan as $item)
                                            @if($item->jenis_data == 'unsurcuacalainnya')
                                            <div class="spacer-15"></div>
                                            <h4 class="bold">Unsur cuaca lainnya</h4>
                                            <div class="col-sm-12">
                                                <div class="spacer-5"></div>
                                                <strong>Deskripsi</strong>
                                                <textarea required="" disabled class="form-control autosize" style="width: 48% ; height: 28px"
                                                    name="deskripsi_{{ $item->jenis_data }}">{{ $item->unsurcuacalain }}</textarea>
                                            </div>
                                                    @foreach ($datapermintaan->where('jenis_data','unsurcuacalainnya') as $item)
                                                    <input type="hidden" required="" name="id_df_{{ $item->jenis_data }}[]" value={{ "$item->id" }}>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                                <div class="spacer-5"></div>
                                                                <div class="col-sm-6">
                                                                    <strong>Lokasi</strong>
                                                                    <textarea disabled class="form-control autosize" style="width: 100% ; height: 28px"
                                                                    name="lokasi_{{ $item->jenis_data }}[]" required="">{{ $item->lokasi }}</textarea>
                                                                    <div class="spacer-10"></div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <strong>Dari</strong>
                                                                    <input disabled class="form-control" size="16" type="date"
                                                                            required="" name="tgl_dari_{{ $item->jenis_data }}[]" value="{{ $item->tgl_dari }}">
                                                                    <div class="spacer-10"></div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <strong>Sampai</strong>
                                                                    <input disabled class="form-control" size="16" type="date"
                                                                            required="" name="tgl_sampai_{{ $item->jenis_data }}[]" value="{{ $item->tgl_sampai }}">
                                                                </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @break
                                            </div>
                                            @endif
                                        @endforeach
                                    {{-- End data permintaan --}}    
                                    <div class="spacer-40"></div>
                                    <hr>
                                    <div class="spacer-20"></div>
                                    @yield('form')
                                    <div class="spacer-40"></div>
                                    <hr>
                                    <div class="spacer-20"></div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a onclick="history.back()" class="btn btn-default btn-lg"><i class="fa fa-arrow-left"></i></a>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </fieldset>
                    <div class="spacer-40"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection