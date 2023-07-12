@extends('layout.master')

@section('title', 'Tabulasi Harian')
@section('breadcrumb', 'Tabulasi Harian')
@section('sub-breadcrumb', 'Tabulasi Harian')
@section('breadcrumb-active', 'active')
@section('fa-caret-down', 'fa-caret-left')
@section('section-active', 'active-page')

@section('contents-pencatatan')
    <div>
        @livewire('tabulasi.main')
    </div>
@endsection
