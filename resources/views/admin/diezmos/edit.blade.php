@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ediar diezmo</h1>
@stop

@section('content')
       @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
        @endif
    <div class="card">
        
        <div class="card-body">            
            
            {!! Form::model($diezmo, ['route' => ['admin.diezmos.update', $diezmo], 'method' => 'put']) !!}

            @foreach ($miembros as $miembro)
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre Miembro') !!}
                {!! Form::hidden('miembro_id2', $miembro->id) !!}                
                {!! Form::text(null, $miembro->nombre.' '.$miembro->apellido, ['class' => 'form-control', 'readonly', 'value' => ""]) !!}            </div>
                
            @endforeach
            <div class="form-group">
                {!! Form::label('monto', 'Monto') !!}
                {!! Form::text('monto', null, ['class' => 'form-control']) !!}
                @error('monto')
                    <small class="text-danger">*{{$message}}</small>                  
                @enderror
            </div>
            @livewire('admin.miembro-show')

            {!! Form::submit('Actualizar diezmo', ['class' => 'btn btn-primary']) !!}

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