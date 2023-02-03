@extends('layout.master-pencatatan')

@section('title', 'Pencatatan Lysimeter')
@section('breadcrumb', 'Form Pencatatan')
@section('sub-breadcrumb', 'Form Lysimeter')
@section('breadcrumb-active', 'active')
@section('fa-caret-down', 'fa-caret-down')
@section('menu-open-form-pendaftaran', 'menu-open')
@section('section-lysimeter-active', 'page-arrow active-page')

@push('styles')
    @livewireStyles

    {{-- CSS Form --}}
    <link rel="stylesheet" href="{{ asset('style/css/form/styles.css') }}">

    {{-- Toastr --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@push('scripts')
    @livewireScripts
    <script>
        Livewire.on('dataStore', () => {
            $('#lysimeter').modal('hide');
            $('#editFormLysimeter').modal('hide');
        })
    </script>
    {{-- Toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    {{-- Alert --}}
    <script>
        window.addEventListener('alert', event => {
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
            toastr.success(event.detail.success);
        });
    </script>

    {{-- Sweet Alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('dataDeleteConfirmation', event => {
            console.log(event);
            Swal.fire({
                title: 'Apakah Kamu yakin?',
                text: "Data Pencatatan Form Lysimeter akan dihapus?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('dataDestroy');
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
@section('contents-pencatatan')
    <div>
        @livewire('add-lysimeter')
    </div>
    <div>
        @livewire('tabel-lysimeter')
    </div>
@endsection
