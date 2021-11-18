@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.propositos.create')
        <a class="btn btn-primary float-right" href="{{ route('admin.propositos.create') }}">Crear proposito de gasto</a>
    @endcan
    <h1>Listado de propositos</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>    
@endif

<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <table class="table table-auto table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Proposito</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($propositos as $proposito)
                <tr>
                    <td>{{$proposito->nombre}}</td>
                    @can('admin.propositos.edit')
                        <td whidth="10px">
                            <a class="btn-primary btn-sm" href="{{ route('admin.propositos.edit', $proposito) }}">Editar</a>                            
                        </td>
                    @endcan            
                    @can('admin.propositos.destroy')
                        <td whidth="10px">
                            <form action="{{ route('admin.propositos.destroy', $proposito) }}" method="post">
                                @method('delete')                            
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td> 
                    @endcan
                                  
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@stop