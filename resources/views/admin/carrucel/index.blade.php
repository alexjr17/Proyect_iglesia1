@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="flex justify-between">
        <h1 class="pb-0">Carruceles reados</h1>
        <a href="{{ route('admin.carrucel.create') }}"
            class="btn-edit flex-none">Crear carrucel</a>

    </div>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="border-collapse m-6 px-1">
            @livewire('admin.carrucel-index')
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')
    <script>
        console.log('Hi!');
        
    </script>
@stop
