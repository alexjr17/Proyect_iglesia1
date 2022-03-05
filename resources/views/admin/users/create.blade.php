@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de usuarios</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.users.store']) !!}
                @include('admin.users.partials.form')

                {!! Form::submit('guardar', ['class' => 'btn-edit mt-3']) !!}
            {!! Form::close() !!}
        </div>
        
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

@stop

@section('js')
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script> --}}
    <script src="{{ asset('js/dashboard.js') }}"></script>
@stop
