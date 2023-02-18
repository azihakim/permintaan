@extends('layout.master')
@section('menu-title')
@if (auth()->user()->role == 'Super Admin')
    <p class="label label-primary">Super Admin</p>
@elseif (auth()->user()->role == 'Admin')
    <p class="label label-success">Admin</p>
@endif
@endsection
@section('akun', 'page-arrow active-page')
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
    <div class="inner-padding">
        @include('modal.add-admin')
        <div class="row col-sm-12">
            <a class="btn btn-default btn-lg" data-target="#tambahModal" data-toggle="modal" href="#tambahModal">
                Tambah admin &nbsp;
                <i class="fa fa-plus-square"></i>
            </a>
        </div>
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <table class="table" style="width: 100%;" id="tablesorting-1">
            <thead>
                <tr>
                    <th style="width:70px">No</th>
                    <th>Nama user</th>
                    <th>Email</th>
                    <th>Kategori</th>
                    <th>Instansi</th>
                    <th class="filter-select filter-exact" data-placeholder="">Role</th>
                    <th style="width: 150px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $item)
                @include('modal.detail-user')
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->instansi }}</td>
                        <td>
                                @if($item->role == 'Masyarakat')
                                <span class='label label-default'>{{ $item->role }}</span>                                    
                                @elseif($item->role == 'Super Admin')
                                <span class='label label-primary'>{{ $item->role }}</span>
                                @elseif($item->role == 'Viewer')
                                <span class='label label-warning'>{{ $item->role }}</span>
                                @elseif($item->role == 'Admin')
                                <span class='label label-success'>{{ $item->role }}</span>
                                @elseif($item->role == 'Observer')
                                <span class='label label-danger'>{{ $item->role }}</span>
                                @endif
                        </td>
                        <td>
                            <div class="col-sm-4">
                                <a class="btn btn-default" data-target="#deksripsiModal-{{ $item->id }}" data-toggle="modal" href="#deksripsiModal">
                                Detail</i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7" class="pager form-horizontal">
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


