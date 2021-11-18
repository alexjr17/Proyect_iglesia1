@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.gastos.create')
        <a class="btn btn-primary float-right" href="{{ route('admin.gastos.create') }}">Crear gasto</a>        
    @endcan

    <h1>Listado de gastos</h1>
@stop

@section('content')
        @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
        @endif
    @livewire('admin.gasto-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop