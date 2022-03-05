@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="flex justify-between">
        <h1>Listado de usuarios</h1>

        @can('admin.miembros.create')
            <a class="btn-edit" href="{{ route('admin.users.create') }}">Crear miembro</a>
        @endcan
    </div>
@stop

@section('content')
    @livewire('admin.user-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
