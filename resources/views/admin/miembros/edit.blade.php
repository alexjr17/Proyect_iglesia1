@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar miembro</h1>
@stop

@section('content')
@if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
<div class="card">
    <div class="card-body">        
        {!! Form::model($miembro,['route' => ['admin.miembros.update', $miembro], 'files' => true, 'method' => 'put']) !!}

            @include('admin.miembros.partials.form')

        {!! Form::submit('Actualizar miembro', ['class' => 'btn btn-primary ']) !!}

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
    function createTextSlug()
    {
        var apellido =document.getElementById("apellido").value;
        var title = document.getElementById("nombre").value + ' '+ apellido;
                    document.getElementById("slug").value = generateSlug(title);
    }
    function generateSlug(text)
    {
        return text.toString().toLowerCase()
            .replace(/^-+/, '')
            .replace(/-+$/, '')
            .replace(/\s+/g, '-')
            .replace(/\-\-+/g, '-')
            .replace(/[^\w\-]+/g, '');
    }

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