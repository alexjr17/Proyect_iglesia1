@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    @if(session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
@stop

@section('content')
<div class="card">}
    
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        {!! Form::model($carrucel, ['route' => ['admin.carrucel.update', $carrucel], 'files' => true, 'method' => 'put']) !!}
    
    @include('admin.carrucel.partials.form')

    {!! Form::submit('actualizar', ['class' => 'btn btn-primary']) !!}

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