@extends('layout.master-pencatatan')

@push('styles')
    @livewireStyles
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
