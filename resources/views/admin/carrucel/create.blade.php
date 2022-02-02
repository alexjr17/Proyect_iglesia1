@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear carrucel</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.carrucel.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

                @include('admin.carrucel.partials.form')

            {!! Form::submit('Crear Carrucel', ['class' => 'btn btn-primary mt-6']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

    
@endsection

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>


    <script>

    document.getElementById("file").addEventListener('change', cambiarImagen);
    function cambiarImagen(event){
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };

        reader.readAsDataURL(file);
    }
    </script>
@endsection