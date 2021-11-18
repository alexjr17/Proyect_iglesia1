@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar gasto</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
    <div class="card">

        
        <div class="card-body">
            
            {!! Form::model($gasto, ['route' => ['admin.gastos.update', $gasto], 'method' => 'put']) !!}
                @include('admin.gastos.partials.form')
                <div class="form-group">
                    {!! Form::submit('Actualizar gasto', ['class' => 'btn btn-primary']) !!}
                </div>
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