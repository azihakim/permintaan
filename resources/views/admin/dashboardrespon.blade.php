@extends('layout.master')
@section('menu-title', 'Dashboard admin')
@section('dashboard', 'page-arrow active-page')
{{-- @section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('stye/DataTables/datatables.min.css') }}"/>
@endsection --}}
@section('refresh')
    <meta http-equiv="refresh" content="5" >
@endsection
@section('user')
    <strong>Super Admin - </strong>{{ Auth::user()->email }}&nbsp;<i class="fa fa-user"></i>
@endsection

@section('content')
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> --}}

    <div class="inner-padding">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <div class="row center">
            <div class="col-sm-12">
                <div class="grouped">
                    <div class="duo-val-block">
                        <span class="font-big">{{ $pBaru }}</span>
                        <span class="font-small">Permintaan Baru</span>
                    </div><!-- End .duo-val-block -->
                    <div class="duo-val-block">
                        <span class="font-big">{{ $pProses }}</span>
                        <span class="font-small">Diproses</span>
                    </div><!-- End .duo-val-block -->
                    <div class="duo-val-block">
                        <span class="font-big">{{ $pTerima }}</span>
                        <span class="font-small">Diterima</span>
                    </div><!-- End .duo-val-block -->
                    <div class="duo-val-block">
                        <span class="font-big">{{ $pSelesai }}</span>
                        <span class="font-small">Selesai</span>
                    </div><!-- End .duo-val-block -->
                    <div class="duo-val-block">
                        <span class="font-big">{{ $pPembayaran }}</span>
                        <span class="font-small">Menunggu Pembayaran</span>
                    </div><!-- End .duo-val-block -->
                    <div class="duo-val-block">
                        <span class="font-big">{{ $pUlang }}</span>
                        <span class="font-small">Pembayaran Ulang</span>
                    </div><!-- End .duo-val-block -->
                    <div class="duo-val-block">
                        <span class="font-big">{{ $pBatal }}</span>
                        <span class="font-small">Dibatalkan</span>
                    </div><!-- End .duo-val-block -->
                </div>
            </div>
        </div>

<div class="spacer-20"></div>

        <table class="table" style="width: 100%;" id="tablesorting-1">
            <thead>
                <tr>
                    <th style="width:75px">No</th>
                    <th>Nama peminta</th>
                    <th class="filter-select filter-exact" data-placeholder="">Jenis</th>
                    <th>Tanggal</th>
                    <th class="filter-select filter-exact" data-placeholder="">Status</th>
                    <th style="width: 20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    @include('modal.pembayaran')
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->name }}
                        </td>
                        <td>{{ $item->jenis_permintaan }}</td>
                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                        <td>
                                @if($item->status_form == 1)
                                <span class='label label-default demo-tip tooltip-top' title="Permintaan berhasil dikirim dan menunggu konfirmasi admin">Permintaan Baru</span>                                    
                                @elseif($item->status_form == 2)
                                <span class='label label-primary' title="Permintaan dalam proses">Diproses</span>
                                @elseif($item->status_form == 3)
                                <span class='label label-primary' title="Permintaan berhasil diterima dan menunggu data diproses">Diterima</span>
                                @elseif($item->status_form == 4)
                                <span class='label label-success' title="Permintaan selesai di proses">Selesai</span>
                                @elseif($item->status_form == 5)
                                <span class='label label-warning' title="Menunggu pembayaran sesuai jumlah pada billing yang tersedia">Menunggu Pembayaran</span>
                                @elseif($item->status_form == 6)
                                <span class='label label-warning' title="Menunggu pembayaran ulang">Menunggu Pembayaran Ulang</span>
                                @elseif($item->status_form == 7)
                                <span class='label label-danger' title="Permintaan di tolak, untuk penjelasan ada diketerangan">Ditolak</span>
                                @endif
                        </td>
                        <td>
                            <div class="col-sm-4">
                                <a type="button" class="btn btn-default" href="{{ url('respon/' . $item->id) }}">Tanggapi</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" class="pager form-horizontal">
                        <button class="btn first"><i class="fa fa-step-backward"></i></button>
                        <button class="btn prev"><i class="fa fa-arrow-left"></i></button>
                        <span class="pagedisplay"></span> <!-- this can be any element, including an input -->
                        <button class="btn next"><i class="fa fa-arrow-right"></i></button>
                        <button class="btn last"><i class="fa fa-step-forward"></i></button>
                        <select class="pagesize input-xs" title="Select page size">
                            <option selected="selected" value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
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


