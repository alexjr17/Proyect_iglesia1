<div>
    @if ($miembros->count())
        <div class="card-body">
            <x-table>
                @slot('indices')
                    @if ($indices)
                        @foreach ($indices as $indice)
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{ $indice }}
                            </th>
                        @endforeach
                    @else
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only"></span>
                        </th>
                    @endif
                @endslot
            </x-table>
        </div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="card-body">
            <table id="tablaMiembros" class="table table-striped table-bordered" style="width:100%">
                <thead class="bg-gray-50">
                    <tr>
                        <th data-priority="1" scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Miembro
                        </th>
                        <th data-priority="2" scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Localidad
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Telefono
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Bautizo
                        </th>
                        <th data-priority="1" scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($miembros as $miembro)
                        <tr>
                            <td class="px-2 py-2 pl-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        @isset($miembro->image)
                                            <img class="h-10 w-10 rounded-full"
                                                src="{{ Storage::url($miembro->image->url) }}" alt="">
                                        @else
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                alt="">
                                        @endisset
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $miembro->nombre . ' ' . $miembro->apellido }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ $miembro->correo }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            C.c.{{ $miembro->cedula }}
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td class="px-2 py-2">
                                <div class="text-sm text-gray-900">{{ $miembro->ciudad }}</div>
                                <div class="text-sm text-gray-500">{{ $miembro->direccion }}</div>
                            </td>
                            <td class="px-2 py-2">
                                <span
                                    class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-600 text-green-800">
                                    {{ $miembro->telefono }}
                                </span>
                            </td>
                            <td class="px-2 py-2">
                                <span
                                    class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full @if ($miembro->bautizo == 'Si') bg-green-200 text-green-600
                                                                                                                @else
                                                                                                                bg-red-100 text-red-600 @endif ">
                                    {{ $miembro->bautizo }}
                                </span>
                                @isset($miembro->fecha)
                                    <div class="text-sm text-gray-500">{{ $miembro->fecha->fecha }}</div>
                                @else
                                    <div class="text-sm text-gray-500"></div>
                                @endisset
                            </td>
                            <td class="py-2 px-2 flex justify-center">
                                @can('admin.miembros.edit')
                                    <a class="btn-edit mr-2"
                                        href="{{ route('admin.miembros.edit', $miembro) }}">Editar</a>
                                @endcan

                                @can('admin.miembros.destroy')
                                    <form action="{{ route('admin.miembros.destroy', $miembro) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn-edit bg-red-600" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                    <!-- More people... -->
                </tbody>
            </table>
        </div>
        {{-- @else 
        <div class="card-body">
            No se encontraron registros
        </div> --}}
    @endif
</div>
