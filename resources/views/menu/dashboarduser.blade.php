@extends('layout.master')
@section('menu-title', 'Dashboard')
@section('dashboard', 'page-arrow active-page')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('stye/DataTables/datatables.min.css') }}"/>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="dropdown">
                    <a class="btn btn-default dropdown-toggle btn-lg" data-toggle="dropdown" href="#">
                        Tambah Permintaan &nbsp;
                        <i class="fa fa-plus-square"></i>
                    </a>
                    <ul role="menu" class="dropdown-menu">
                        {{-- @if(Auth::user()->kategori == "Umum" ) --}}
                        <li>
                            <a href="{{ url('layanan-bertarif') }}">Layanan Bertarif</a>
                        </li>
                        {{-- @else --}}
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
                        {{-- @endif --}}
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
                    @include('modal.pembayaran')
                    <tr>
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
                        <td>{{ $item->respon_desk }}</td>
                        <td>
                            @if($item->status_form == 1 and $item->jenis_permintaan == 'Layanan bertarif')
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
                            
                            @elseif($item->status_form == 7 and $item->jenis_permintaan == 'Layanan bertarif')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('bertarif/' . $item->id) }}">Detail</a>
                                </div>

                            @elseif($item->status_form == 2 and $item->jenis_permintaan == 'Layanan bertarif')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('bertarif/' . $item->id) }}">Detail</a>
                                </div>

                            @elseif($item->status_form == 3 and $item->jenis_permintaan == 'Layanan bertarif')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('bertarif/' . $item->id) }}">Detail</a>
                                </div>
                            
                            @elseif($item->status_form == 5 || 6 and $item->jenis_permintaan == 'Layanan bertarif')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal-{{ $item->id }}" href="">Pembayaran</a>
                                </div>    
                                
                                
                            @elseif($item->status_form == 4 and $item->jenis_permintaan == 'Layanan bertarif')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" download href="../../storage/templateForm/DATAPERMINTAAN.pdf">Download</a>
                                </div>
                            
                            
                            @elseif($item->status_form == 1 and $item->jenis_permintaan == 'Kegiatan keagamaan')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('keagamaan/' . $item->id) }}">Detail</a>
                                </div>
                                <div class="col-sm-4">
                                    <form action="{{ url('keagamaan/' . $item->id) }} " method="POST"
                                        onsubmit="return confirm('Yakin hapus permintaan {{ $item->jenis_permintaan }} {{ $item->created_at->format('d/m/Y') }}  ?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-default">Hapus</button>
                                    </form>  
                                </div>
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('keagamaan/' . $item->id . '/edit') }}">Ubah</a>
                                </div>
                            
                            @elseif($item->status_form == 1 and $item->jenis_permintaan == 'Kegiatan penanggulangan bencana')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('penanggulanganbencana/' . $item->id) }}">Detail</a>
                                </div>
                                <div class="col-sm-4">
                                    <form action="{{ url('penanggulanganbencana/' . $item->id) }} " method="POST"
                                        onsubmit="return confirm('Yakin hapus permintaan {{ $item->jenis_permintaan }} {{ $item->created_at->format('d/m/Y') }}  ?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-default">Hapus</button>
                                    </form>  
                                </div>
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('penanggulanganbencana/' . $item->id . '/edit') }}">Ubah</a>
                                </div>
                            
                            @elseif($item->status_form == 1 and $item->jenis_permintaan == 'Kegiatan pendidikan/penelitian non komersil')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('pendidikan/' . $item->id) }}">Detail</a>
                                </div>
                                <div class="col-sm-4">
                                    <form action="{{ url('pendidikan/' . $item->id) }} " method="POST"
                                        onsubmit="return confirm('Yakin hapus permintaan {{ $item->jenis_permintaan }} {{ $item->created_at->format('d/m/Y') }}  ?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-default">Hapus</button>
                                    </form>  
                                </div>
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('pendidikan/' . $item->id . '/edit') }}">Ubah</a>
                                </div>
                            
                            @elseif($item->status_form == 1 and $item->jenis_permintaan == 'Kegiatan pemerintahan')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('pemerintahan/' . $item->id) }}">Detail</a>
                                </div>
                                <div class="col-sm-4">
                                    <form action="{{ url('pemerintahan/' . $item->id) }} " method="POST"
                                        onsubmit="return confirm('Yakin hapus permintaan {{ $item->jenis_permintaan }} {{ $item->created_at->format('d/m/Y') }}  ?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-default">Hapus</button>
                                    </form>  
                                </div>
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('pemerintahan/' . $item->id . '/edit') }}">Ubah</a>
                                </div>

                            @elseif($item->status_form == 1 and $item->jenis_permintaan == 'Kegiatan pertahanan dan keamanan')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('pertahanankeamanan/' . $item->id) }}">Detail</a>
                                </div>
                                <div class="col-sm-4">
                                    <form action="{{ url('pertahanankeamanan/' . $item->id) }} " method="POST"
                                        onsubmit="return confirm('Yakin hapus permintaan {{ $item->jenis_permintaan }} {{ $item->created_at->format('d/m/Y') }}  ?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-default">Hapus</button>
                                    </form>  
                                </div>
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('pertahanankeamanan/' . $item->id . '/edit') }}">Ubah</a>
                                </div>
                            
                            @elseif($item->status_form == 1 and $item->jenis_permintaan == 'Kegiatan sosial')
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('sosial/' . $item->id) }}">Detail</a>
                                </div>
                                <div class="col-sm-4">
                                    <form action="{{ url('sosial/' . $item->id) }} " method="POST"
                                        onsubmit="return confirm('Yakin hapus permintaan {{ $item->jenis_permintaan }} {{ $item->created_at->format('d/m/Y') }}  ?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"> 
                                        <button class="btn btn-default">Hapus</button>
                                    </form>  
                                </div>
                                <div class="col-sm-4">
                                    <a type="button" class="btn btn-default" href="{{ url('sosial/' . $item->id . '/edit') }}">Ubah</a>
                                </div>
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
