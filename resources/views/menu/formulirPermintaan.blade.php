@extends('layout.master')
@section('menu-title', 'Formulir Permintaan')
@section('formulir', 'page-arrow active-page')
@section('content')
    <div class="inner-padding">
        <div class="row">
            <div class="col-sm-6 portlets-col">
                <!-- Kegiatan Penanggulangan Bencana -->
                <div class="portlet portlet-closed">
                    <div class="portlet-header">
                        <div class="pull-left">
                            <h5>Kegiatan Penanggulangan Bencana</h5>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-content" style="display: none;">
                        <div class="inner-padding">
                            <h5>Persyaratan :</h5>
                            <ol>
                                <li>Nama instansi (Basarnas/BNPB/BPPD)</li>
                                <li>Nomor telpon</li>
                                <li>Email</li>
                                <li>Data dan informasi yang dibutuhkan</li>
                                <li>Syarat permohonan data
                                    <ul>
                                        <li>Surat pengantar permintaan data</li>
                                    </ul>
                                </li>
                            </ol>

                            <a href="{{ url('penanggulangan-bencana') }}" class="btn btn-default btn-block">Buat
                                permintaan</a>

                        </div>
                    </div><!-- End Kegiatan Penanggulangan Bencana -->
                </div>
                <!-- Kegiatan Sosial -->
                <div class="portlet portlet-closed">
                    <div class="portlet-header">
                        <div class="pull-left">
                            <h5>Kegiatan Sosial</h5>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-content" style="display: none;">
                        <div class="inner-padding">
                            <h5>Persyaratan :</h5>
                            <ol>
                                <li>Nama (nama kegiatan)</li>
                                <li>Nomor telpon</li>
                                <li>Email</li>
                                <li>Data dan informasi yang dibutuhkan</li>
                                <li>Syarat permohonan data
                                    <ul>
                                        <li>Surat permintaan ditanda tangani camat/pejabat setingkat</li>
                                    </ul>
                                </li>
                            </ol>
                            <a href="{{ url('sosial') }}" class="btn btn-default btn-block">Buat permintaan</a>
                        </div>
                    </div>
                </div><!-- End Kegiatan Sosial -->


                <!-- Kegiatan Keagamaan -->
                <div class="portlet portlet-closed">
                    <div class="portlet-header">
                        <div class="pull-left">
                            <h5>Kegiatan Keagamaan</h5>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-content" style="display: none;">
                        <div class="inner-padding">
                            <h5>Persyaratan :</h5>
                            <ol>
                                <li>Nama (nama kegiatan)</li>
                                <li>Nomor telpon</li>
                                <li>Email</li>
                                <li>Data dan informasi yang dibutuhkan</li>
                                <li>Syarat permohonan data</li>
                                <ul>
                                    <li>Surat Pernyataan tidak menyalahgunakan informasi, ditandatangani Camat / Pejabat
                                        Setingkat</li>
                                </ul>
                            </ol>
                            <a href="{{ url('keagamaan') }}" class="btn btn-default btn-block">Buat permintaan</a>
                        </div>
                    </div>
                </div><!-- End Kegiatan Keagamaan -->

                <!-- Layanan Bertarif PNBP  sesuai dengan PP No.47 Tahun 2018 -->
                <div class="portlet portlet-closed">
                    <div class="portlet-header">
                        <div class="pull-left">
                            <h5>Layanan Bertarif</h5>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('formulir') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-content" style="display: none;">
                        <div class="inner-padding">
                            <h5>Persyaratan :</h5>
                            <ol>
                                <li>Nama</li>
                                <li>Nomor telepon</li>
                                <li>Email</li>
                                <li>Data dan informasi yang dibutuhkan</li>
                                <li>Syarat permohonan data
                                    <ul>
                                        <li> Identitas (KTP)
                                        </li>
                                        <li> Surat Pengantar</li>
                                    </ul>
                                </li>
                            </ol>
                            <a href="{{ url('layanan-bertarif') }}" class="btn btn-default btn-block">Buat permintaan</a>
                        </div>
                    </div>
                </div><!-- End Layanan Bertarif PNBP  sesuai dengan PP No.47 Tahun 2018 -->
            </div>


            <div class="col-sm-6 portlets-col">
                <!-- Kegiatan Pertahanan dan Keamanan -->
                <div class="portlet portlet-closed">
                    <div class="portlet-header">
                        <div class="pull-left">
                            <h5>Kegiatan Pertahanan dan Keamanan</h5>
                        </div>
                        <div class="pull-right">
                            <a href="" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-content" style="display: none;">
                        <div class="inner-padding">
                            <h5>Persyaratan :</h5>
                            <ol>
                                <li>Nama instansi</li>
                                <li>Nomor telpon</li>
                                <li>Email</li>
                                <li>Data dan informasi yang dibutuhkan</li>
                                <li>Syarat permohonan data
                                    <ul>
                                        <li>Surat perintah dari pimpinan Instansi yang membidangi pertahanan /
                                            keamanan</li>
                                    </ul>
                                </li>
                            </ol>
                            <a href="{{ url('pertahanan-keamanan') }}" class="btn btn-default btn-block">Buat permintaan</a>
                        </div>
                    </div>
                </div><!-- End Kegiatan Pertahanan dan Keamanan -->

                <!-- Kegiatan Pendidikan dan Penelitian non Komersil -->
                <div class="portlet portlet-closed">
                    <div class="portlet-header">
                        <div class="pull-left">
                            <h5>Kegiatan Pendidikan/Penelitian non Komersil</h5>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('formulir') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-content" style="display: none;">
                        <div class="inner-padding">
                            <h5>Persyaratan :</h5>
                            <ol>
                                <li>Nama</li>
                                <li>NIM/KTP</li>
                                <li>Program Studi/Fakultas</li>
                                <li>Universitas/lInstansi</li>
                                <li>Nomor telepon</li>
                                <li>Email</li>
                                <li>Informasi yang dibutuhkan (Periode waktu maksimal 5 tahun terakhir, cakupan wilayah
                                    maksimal
                                    3 lokasi)</li>
                                <li>Syarat permohonan data
                                    <ul>
                                        <li> Identitas Diri KTP / KTM / SIM / Paspor</li>
                                        <li> Surat Pengantar dari Kepala Sekolah / Rektor / Dekan (sesuai form A)<a download
                                                href="../../storage/templateForm/formA.jpeg">
                                                <p class="text-primary btn-link">Klik download contoh form
                                                    A</p>
                                            </a></li>
                                        <li> Proposal Penelitian berisi maksud dan tujuan penelitian yang telah disetujui
                                            oleh pembimbing atau promotor</li>
                                        <li> Surat Pernyataan tidak digunakan untuk kepentingan lain dan kesediaan
                                            menyerahkan salinan hasil penelitian dengan batas waktu tertentu sesuai form B
                                            <a download href="../../storage/templateForm/formB.docx">
                                                <p class="text-primary btn-link">Klik download contoh form
                                                    B</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                            <a href="{{ url('pendidikan') }}" class="btn btn-default btn-block">Buat permintaan</a>
                        </div>
                    </div>
                </div><!-- End Kegiatan Pendidikan dan Penelitian non Komersil -->

                <!-- Kegiatan Pemerintahan Pusat atau Daerah -->
                <div class="portlet portlet-closed">
                    <div class="portlet-header">
                        <div class="pull-left">
                            <h5>Kegiatan Pemerintahan Pusat atau Daerah</h5>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('formulir') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-content" style="display: none;">
                        <div class="inner-padding">
                            <h5>Persyaratan :</h5>
                            <ol>
                                <li>Nama</li>
                                <li>Nomor telepon</li>
                                <li>Email</li>
                                <li>Data dan informasi yang dibutuhkan</li>
                                <li>Syarat permohonan data
                                    <ul>
                                        <li> Mempunyai Perjanjian Kerjasama dengan BMKG tentang kebutuhan informasi MKKuG
                                        </li>
                                        <li> Surat Pengantar</li>
                                    </ul>
                                </li>
                            </ol>
                            <a href="{{ url('pemerintahan') }}" class="btn btn-default btn-block">Buat permintaan</a>
                        </div>
                    </div>
                </div><!-- End Kegiatan Pemerintahan Pusat atau Daerah -->
            </div>
        </div>
    </div>
@endsection
