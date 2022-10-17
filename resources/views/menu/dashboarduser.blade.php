@extends('layout.master')
@section('menu-title', 'Dashboard')
@section('dashboard', 'page-arrow active-page')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('stye/DataTables/datatables.min.css') }}"/>
@endsection

{{-- @section('content')
    <div class="inner-padding">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="dropdown">
                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">
                        Tambah Permintaan
                        <i class="fa fa-plus-square"></i>
                    </a>
                    <ul role="menu" class="dropdown-menu">
                        <li>
                            <a href="{{ url('kegiatan-penanggulangan-bencana') }}">Kegiatan Penanggulangan Bencana</a>
                        </li>
                        <li>
                            <a href="{{ url('kegiatan-pendidikan') }}">Kegiatan Pendidikan/Penelitian non Komersil</a>
                        </li>
                        <li>
                            <a href="{{ url('kegiatan-pemerintahan') }}">Kegiatan Pemerintahan Pusat atau Daerah</a>
                        </li>
                        <li>
                            <a href="{{ url('kegiatan-pertahanan-keamanan') }}">Kegiatan Pertahanan dan Keamanan</a>
                        </li>
                        <li>
                            <a href="{{ url('kegiatan-keagamaan') }}">Kegiatan Keagamaan</a>
                        </li>
                        <li>
                            <a href="{{ url('kegiatan-sosial') }}">Kegiatan Sosial</a>
                        </li>
                        <li>
                            <a href="{{ url('layanan-bertarif') }}">Kegiatan Bertarif</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <table class="table">
            <thead style="background-color:#6666;">
                <tr>
                    <th scope="col">Jenis permintan</th>
                    <th scope="col">Tanggal permintaan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Keterangan</th>
                    <th colspan="3">Aksi</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($permintaans as $item)
                    <tr>
                        <td>{{ $item->jenis_permintaan }}</td>
                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                        <td>
                                @if($item->status_form == 1)
                                <span class='label label-default'>Permintaan Baru</span>
                                @elseif($item->status_form == 2)
                                <span class='label label-primary'>Diterima</span>
                                @elseif($item->status_form == 3)
                                <span class='label label-success'>Selesai</span>
                                @elseif($item->status_form == 4)
                                <span class='label label-warning'>Menunggu Pembayaran</span>
                                @elseif($item->status_form == 5)
                                <span class='label label-warning'>Menunggu Pembayaran Ulang</span>
                                @elseif($item->status_form == 6)
                                <span class='label label-danger'>Ditolak</span>
                                @endif
                        </td>
                        <td>
                            @if($item->status_form == 1)
                            <form>
                                @csrf
                                <input type="hidden" name="_method" value="DELETE"> 
                                <a type="button" class="btn df_btn hapus">Hapus</a>
                            </form>  
                        </td>  
                            @elseif($item->status_form == 6)
                            @endif
                        <td>
                            <a type="button" class="btn df_btn ubah" href="{{ url('bertarif/' . $item->id . '/edit') }}">Ubah</a>
                        </td>   
                        <td> 
                            <a type="button" class="btn df_btn detail" href="{{ url('bertarif/' . $item->id) }}">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="spacer-25"></div>
    </div>

@endsection --}}

@section('content')
    <div class="inner-padding">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="dropdown">
                    <a class="btn btn-default dropdown-toggle btn-lg" data-toggle="dropdown" href="#">
                        Tambah Permintaan &nbsp;
                        <i class="fa fa-plus-square"></i>
                    </a>
                    <ul role="menu" class="dropdown-menu">
                        <li>
                            <a href="{{ url('kegiatan-penanggulangan-bencana') }}">Kegiatan Penanggulangan Bencana</a>
                        </li>
                        <li>
                            <a href="{{ url('kegiatan-pendidikan') }}">Kegiatan Pendidikan/Penelitian non Komersil</a>
                        </li>
                        <li>
                            <a href="{{ url('kegiatan-pemerintahan') }}">Kegiatan Pemerintahan Pusat atau Daerah</a>
                        </li>
                        <li>
                            <a href="{{ url('kegiatan-pertahanan-keamanan') }}">Kegiatan Pertahanan dan Keamanan</a>
                        </li>
                        <li>
                            <a href="{{ url('kegiatan-keagamaan') }}">Kegiatan Keagamaan</a>
                        </li>
                        <li>
                            <a href="{{ url('kegiatan-sosial') }}">Kegiatan Sosial</a>
                        </li>
                        <li>
                            <a href="{{ url('layanan-bertarif') }}">Kegiatan Bertarif</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <table class="table" style="width: 100%" id="tablesorting-1">
            <thead>
                <tr>
                    <th class="filter-select filter-exact" data-placeholder="">Jenis</th>
                    <th>Tanggal</th>
                    <th class="filter-select filter-exact" data-placeholder="">Status</th>
                    <th>Keterangan</th>
                    <th style="width: 20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permintaans as $item)
                    <tr>
                        <td>{{ $item->jenis_permintaan }}</td>
                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                        <td>
                                @if($item->status_form == 1)
                                <span class='label label-default'>Permintaan Baru</span>
                                @elseif($item->status_form == 2)
                                <span class='label label-primary'>Diterima</span>
                                @elseif($item->status_form == 3)
                                <span class='label label-success'>Selesai</span>
                                @elseif($item->status_form == 4)
                                <span class='label label-warning'>Menunggu Pembayaran</span>
                                @elseif($item->status_form == 5)
                                <span class='label label-warning'>Menunggu Pembayaran Ulang</span>
                                @elseif($item->status_form == 6)
                                <span class='label label-danger'>Ditolak</span>
                                @endif
                        </td>
                        <td></td>
                        <td>
                            @if($item->status_form == 1 and $item->jenis_permintaan == 'layananbertarif'){
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('bertarif/' . $item->id) }}">Detail</a>
                                </div>
                                <div class="col-sm-4">
                                    <form action="{{ url('bertarif/' . $item->id) }} " method="POST"
                                        onsubmit="return confirm('Yakin hapus permintaan {{ $item->jenis_permintaan }} {{ $item->created_at->format('d/m/Y') }}  ?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-default">Hapus</button>
                                    </form>  
                                </div>
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('bertarif/' . $item->id . '/edit') }}">Ubah</a>
                                </div>
                            }
                            @elseif($item->status_form == 1 and $item->jenis_permintaan == 'keagamaan'){
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('bertarif/' . $item->id) }}">Detail</a>
                                </div>
                                <div class="col-sm-4">
                                    <form action="{{ url('bertarif/' . $item->id) }} " method="POST"
                                        onsubmit="return confirm('Yakin hapus permintaan {{ $item->jenis_permintaan }} {{ $item->created_at->format('d/m/Y') }}  ?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-default">Hapus</button>
                                    </form>  
                                </div>
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('bertarif/' . $item->id . '/edit') }}">Ubah</a>
                                </div>
                            }
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="pager form-horizontal">
                        <button class="btn first"><i class="fa fa-step-backward"></i></button>
                        <button class="btn prev"><i class="fa fa-arrow-left"></i></button>
                        <span class="pagedisplay"></span> <!-- this can be any element, including an input -->
                        <button class="btn next"><i class="fa fa-arrow-right"></i></button>
                        <button class="btn last"><i class="fa fa-step-forward"></i></button>
                        <select class="pagesize input-xs" title="Select page size">
                            <option selected="selected" value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select>
                        <select class="pagenum input-xs" title="Select page number"></select>
                    </td>
                </tr>
            </tfoot>
        </table>  
        <div class="spacer-25"></div>
    </div>

@endsection
@push('scripts')
    <script type="text/javascript" src="{{asset('style/DataTables/datatables.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush
