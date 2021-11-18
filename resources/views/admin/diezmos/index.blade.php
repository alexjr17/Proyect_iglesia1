@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('admin.diezmos.create')
        <a class="btn btn-primary float-right" href="{{ route('admin.diezmos.create') }}">Crear diezmo</a>        
    @endcan

    <h1>Lista de diezmos</h1>
@stop

@section('content')
        @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
        @endif
    @livewire('admin.diezmo-index')
@stop

@section('js')
@endsection