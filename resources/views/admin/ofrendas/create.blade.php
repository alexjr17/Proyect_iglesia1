@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear ofrenda</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            
            {!! Form::open(['route' => 'admin.ofrendas.store']) !!}

            {!! Form::hidden('user_id', Auth::user()->id) !!}

            @include('admin.ofrendas.partials.form')

            {!! Form::submit('Craer ofrenda', ['class' => 'form.control btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop