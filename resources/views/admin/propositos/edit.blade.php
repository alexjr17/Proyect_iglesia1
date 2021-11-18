@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar proposito de gasto</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-header">
        Crear proposito
    </div>
    <div class="card-body">
        {!! Form::model($proposito,['route' => ['admin.propositos.update', $proposito], 'method' => 'put']) !!}
        
            @include('admin.propositos.partials.form')

        <div class="form-group">
            {!! Form::submit('Actualizar proposito', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script>
    $(document).ready( function() {
    $("#nombre").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
    });
    });
</script>
@stop