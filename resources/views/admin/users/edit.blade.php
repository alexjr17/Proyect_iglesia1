@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Listado de usuarios</h1>
@stop

@section('content')

        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{session('info')}}</strong>
            </div>            
        @endif

    <div class="card">
                
        <div class="card-body">
            
            {!! Form::model($user,['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            
            <p class="h5">Nombre</p>
            <p class="form-control">{{$user->name}}</p>

            <h2 class="h5">Listado de roles</h2>
            @foreach ($roles as $role)
                <div>
                    <label for="">
                        {!! Form::checkbox('roles[]', $role->id, null, ['clas' => 'mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>
            @endforeach
            
            <div class="form-group">
            {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
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