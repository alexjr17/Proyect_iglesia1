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
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <x-table id="">
                @slot('indices')
                    @foreach ($indices as $indice)
                        @if (!$indice == '')
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ $indice }}
                            </th>
                        @else
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only"></span>
                            </th>
                        @endif
                    @endforeach
                @endslot

                {{-- slot --}}
                @foreach ($roles as $role)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">{{ $role->name }}</div>
                            </td>
                            @can('admin.users.edit')
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 flex justify-center">
                                        <a class="btn-edit mr-2" href="{{ route('admin.roles.edit', $role) }}">Editar</a>
                                        <form action="{{ route('admin.roles.destroy', $role) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <x-jet-danger-button type="sutbmi">Eliminar</x-jet-danger-button>
                                        </form>
                                    </div>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
            </x-table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
