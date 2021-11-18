@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.miembros.create')
        <a class="btn btn-primary float-right" href="{{ route('admin.miembros.create') }}">Crear miembro</a>        
    @endcan

    <h1>Listado de miembros</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
    @livewire('admin.miembros-index')
@stop
