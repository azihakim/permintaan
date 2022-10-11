@extends('layout.master')
@section('menu-title', 'Dashboard')
@section('dashboard', 'page-arrow active-page')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('stye/DataTables/datatables.min.css') }}"/>
@endsection

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
        <table class="table" id="">
            <thead style="background-color:#6666;">
                <tr>
                    <th scope="col">Jenis permintan</th>
                    <th scope="col">Tanggal permintaan</th>
                    <th scope="col">Status</th>
                    {{-- <th scope="col">Keterangan</th> --}}
                    <th scope="col">Aksi</th> 
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
                            <a type="button" class="btn df_btn hapus">Hapus</a>
                            @elseif($item->status_form == 6)
                            @endif
                            
                            <a type="button" class="btn df_btn ubah" href="{{ url('bertarif/' . $item->id . '/edit') }}">Ubah</a>
                            
                            <a type="button" class="btn df_btn detail">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
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
