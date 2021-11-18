@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.ofrendas.create')
        <a class="btn btn-primary float-right" href="{{ route('admin.ofrendas.create') }}">Crear ofrenda</a>        
    @endcan
    <h1>Listado de ofrendas</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
    @livewire('admin.ofrenda-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop