@extends('layout.master-pencatatan')

@push('styles')
    @livewireStyles
    <style>
        .pr-0 {
            padding-right: 0;
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

        @media (min-width: 992px) {
            .ml-12 {
                margin-left: 12px;
            }
        }
    </style>
@endpush

@push('scripts')
    @livewireScripts
@endpush
@section('contents-pencatatan')
    <div>
        @livewire('add-pencatatan-agromet')
    </div>
    <div>
        @livewire('tabel-pencatatan-agromet')
    </div>
@endsection
