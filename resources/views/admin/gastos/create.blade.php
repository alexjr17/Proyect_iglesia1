@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
        @endif

        <div class="card-header">
            Crear gasto
        </div>
        <div class="card-body">
            
            {!! Form::open(['route' => 'admin.gastos.store']) !!}

                {!! Form::hidden('user_id', auth()->user()->id) !!}
            
                @include('admin.gastos.partials.form')

                <div class="form-group" placeholder="">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                </div>               

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