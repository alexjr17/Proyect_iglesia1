@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

@livewire('valance-index')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop