@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear miembro</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.miembros.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            @include('admin.miembros.partials.form')

            {!! Form::submit('Crear miembro', ['class' => 'btn-edit flex-nowrap']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

    </style>

@endsection

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        function createTextSlug() {
            var apellido = document.getElementById("apellido").value;
            var cedula = document.getElementById("cedula").value;
            var title = document.getElementById("nombre").value + ' ' + apellido + ' C.c' + cedula;
            document.getElementById("slug").value = generateSlug(title);
        }

        function generateSlug(text) {
            return text.toString().toLowerCase()
                .replace(/^-+/, '')
                .replace(/-+$/, '')
                .replace(/\s+/g, '-')
                .replace(/\-\-+/g, '-')
                .replace(/[^\w\-]+/g, '');
        }

        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@endsection
