@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.roles.create')
        <a class="btn btn-primary float-right" href="{{ route('admin.roles.create') }}">Crear rol</a>       
    @endcan
    <h1>Listado de roles</h1>
@stop

@section('content')
@if (session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                           <td>{{$role->id}}</td>
                           <td>{{$role->name}}</td>
                           <td whidth="10px">
                            <a class="btn-primary btn-sm" href="{{ route('admin.roles.edit', $role) }}">Editar</a>                            
                        </td>
                        <td whidth="10px">
                            <form action="{{ route('admin.roles.destroy', $role) }}" method="post">
                                @method('delete')                            
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                        </tr>            
                    @endforeach                    
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop