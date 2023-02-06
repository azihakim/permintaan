@extends('layout.master-pencatatan')

@section('title', 'Pencatatan Agromet')
@section('breadcrumb', 'Form Pencatatan')
@section('sub-breadcrumb', 'Form Agromet')
@section('breadcrumb-active', 'active')
@section('fa-caret-down', 'fa-caret-down')
@section('menu-open-form-pendaftaran', 'menu-open')
@section('section-agromet-active', 'page-arrow active-page')

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
            $('#form1').modal('hide');
            $('#form2').modal('hide');
            $('#form3').modal('hide');
            $('#form4').modal('hide');
            $('#form5').modal('hide');
            $('#form6').modal('hide');
            $('#form7').modal('hide');
            $('#formHujan1').modal('hide');
            $('#formHujan2').modal('hide');
            $('#formHujan3').modal('hide');
            $('#editFormHujan1').modal('hide');
            $('#editFormHujan2').modal('hide');
            $('#editFormHujan3').modal('hide');
            $('#editForm1').modal('hide');
            $('#editForm2').modal('hide');
            $('#editForm3').modal('hide');
            $('#editForm4').modal('hide');
            $('#editForm5').modal('hide');
            $('#editForm6').modal('hide');
            $('#editForm7').modal('hide');
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
                text: "Data Pencatatan dengan Jam " + event.detail.pencatatan.waktu + " akan dihapus?",
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
    @php
        // dd('Halo');
    @endphp
    <div>
        @livewire('add-pencatatan-agromet')
    </div>
    <div>
        @livewire('tabel-pencatatan-agromet')
    </div>
@endsection
