@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    @livewire('valance-index')


@stop

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

@stop

@section('js')
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script> --}}
    <script src="{{ asset('js/dashboard.js') }}"></script>
@stop
