@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="flex justify-between">
    <h1>Carruceles reados</h1>
    <a href="{{ route('admin.carrucel.create') }}" class="btn btn-primary float-right outline hover:outline-blue-400">Crear carrucel</a>
    
</div>
@stop

@section('content')
@if(session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    @livewire('admin.carrucel-index')
@stop

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop