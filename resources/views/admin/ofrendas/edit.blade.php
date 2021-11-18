@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar ofrenda</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            {!! Form::model($ofrenda, ['route' => ['admin.ofrendas.update', $ofrenda], 'method' => 'put']) !!}

            @include('admin.ofrendas.partials.form')

            {!! Form::submit('Actualizar ofrenda', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
@stop