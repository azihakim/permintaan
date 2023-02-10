@extends('layout.master')

@section('title', 'Pencatatan Lama Penyinaran')
@section('breadcrumb', 'Form Pencatatan')
@section('sub-breadcrumb', 'Form Lama Penyinaran')
@section('breadcrumb-active', 'active')
@section('fa-caret-down', 'fa-caret-down')
@section('menu-open-form-pendaftaran', 'menu-open')
@section('section-lama-penyinaran-active', 'page-arrow active-page')

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
            $('#lama-penyinaran').modal('hide');
            $('#editFormLamaPenyinaran').modal('hide');
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
                text: "Data Pencatatan Form Lama Penyinaran akan dihapus?",
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
        @livewire('add-lama-penyinaran')
    </div>
    <div>
        @livewire('tabel-lama-penyinaran')
    </div>
@endsection
