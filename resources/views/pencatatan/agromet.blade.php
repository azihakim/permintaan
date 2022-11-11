@extends('layout.master-pencatatan')

@section('fa-caret-down', 'fa-caret-down')
@section('menu-open-form-pendaftaran', 'menu-open')
@section('section-agromet-active', 'page-arrow active-page')

@push('styles')
    @livewireStyles
    <style>
        .m-0 {
            margin: 0;
        }

        .pr-0 {
            padding-right: 0;
        }

        .pr-12 {
            padding-right: 12px;
        }

        .px-16 {
            padding: 0 16px;
        }

        .px-35 {
            padding: 0 35px;
        }

        .px-36 {
            padding: 0 36px;
        }

        .label-mr-8 {
            margin-right: -8px;
        }

        .mrP-10 {
            margin-right: 10px;
        }

        .ml-5 {
            margin-left: -5px;
        }

        .ml-8 {
            margin-left: -8px;
        }

        .mr-6 {
            margin-right: -6px;
        }

        .mr-8 {
            margin-right: -8px;
        }

        .mr-10 {
            margin-right: -10px;
        }

        .mr-12 {
            margin-right: -12px;
        }

        .mr-15 {
            margin-right: -15px;
        }

        .mr-20 {
            margin-right: -20px;
        }

        .mr-24 {
            margin-right: -24px;
        }

        .mr-28 {
            margin-right: -28px;
        }

        .mr-32 {
            margin-right: -32px;
        }

        .mr-34 {
            margin-right: -34px;
        }

        .mr-36 {
            margin-right: -36px;
        }

        .mr-40 {
            margin-right: -40px;
        }

        .mr-48 {
            margin-right: -48px;
        }

        .mr-50 {
            margin-right: -50px;
        }

        .mr-54 {
            margin-right: -54px;
        }

        .mr-58 {
            margin-right: -58px;
        }

        .mr-80 {
            margin-right: -80px;
        }

        @media (max-width: 991px) {
            .mt-5 {
                margin-top: 5px;
            }
        }

        @media (min-width: 992px) {
            .p-0 {
                padding: 0;
            }

            .px-5 {
                padding: 0 5px;
            }

            .ml-12 {
                margin-left: 12px;
            }
        }
    </style>
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
    <div>
        @livewire('add-pencatatan-agromet')
    </div>
    <div>
        @livewire('tabel-pencatatan-agromet')
    </div>
@endsection
