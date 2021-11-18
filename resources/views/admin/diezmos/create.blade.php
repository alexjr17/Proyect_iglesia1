@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear diezmo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">   
            {!! Form::open(['route' => 'admin.diezmos.store']) !!}

            {!! Form::hidden('user_id', auth()->user()->id, ['class' => '', 'readonly']) !!}

            <div class="form-group">
                {!! Form::label('monto', 'Monto') !!}
                {!! Form::text('monto', null, ['class' => 'form-control']) !!}
                @error('monto')
                    <small class="text-danger">*{{$message}}</small>                  
                @enderror
            </div>
            
            @livewire('admin.miembro-show')

            {!! Form::submit('Crear diezmo', ['class' => 'btn btn-primary']) !!}
            
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