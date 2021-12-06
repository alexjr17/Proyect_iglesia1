<div class="card">
    
    {{-- <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="ingrese el nombre del miembro">
    </div> --}}

   
    
    @if ($miembros->count())

        {{-- <div class="card-body">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Ciudad</th>
                        <th>Bautizo</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($miembros as $miembro)
                    <tr>
                        <td>
                        @isset($miembro->image)
                            <img class="img-responsive img-circle" width="50" src="{{Storage::url($miembro->image->url)}}" alt="">
                        @else 
                            <i class="fas fa-user-circle" width='300 px'></i>
                        @endisset
                        
                        </td>
                        <td>{{$miembro->nombre.' '. $miembro->apellido}}</td>
                        <td>{{$miembro->cedula}}</td>
                        <td>{{$miembro->correo}}</td>
                        <td>{{$miembro->telefono}}</td>
                        <td>{{$miembro->direccion}}</td>
                        <td>{{$miembro->ciudad}}</td>
                        <td>{{$miembro->bautizo}}</td>
                        <td>
                            @isset($miembro->fecha)
                            {{$miembro->fecha->fecha}}
                            @else 
                            No aplica                         
                            @endisset
                            
                        </td>
                        @can('admin.miembros.edit')
                            <td whidth="10px">
                                <a class="btn-primary btn-sm" href="{{ route('admin.miembros.edit', $miembro) }}">Editar</a>                            
                            </td>
                        @endcan
                        
                        @can('admin.miembros.destroy')
                            <td whidth="10px">
                                <form action="{{ route('admin.miembros.destroy', $miembro) }}" method="post">
                                    @method('delete')                            
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        @endcan
                        
                    </tr>                     
                    @endforeach
                    
                </tbody>
            </table>
        </div> --}}

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="card-body">
                <table id="tablaMiembros" class="table table-striped table-bordered" style="width:100%">
                    <thead class="bg-gray-50">
                        <tr>
                            <th data-priority="1" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Miembro
                            </th>                                
                            <th data-priority="2" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Localidad
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Telefono
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Bautizo
                            </th>
                            <th data-priority="1" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            
                            </th>
                            
                            {{-- <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($miembros as $miembro)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">                                        
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                        @isset($miembro->image)
                                        <img class="h-10 w-10 rounded-full" src="{{Storage::url($miembro->image->url)}}" alt="">
                                        @else
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                        @endisset
                                        </div>
                                        <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$miembro->nombre.' '. $miembro->apellido}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{$miembro->correo}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            C.c.{{$miembro->cedula}}
                                        </div>
                                        </div>
                                    </div>
                                    
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$miembro->ciudad}}</div>
                                    <div class="text-sm text-gray-500">{{$miembro->direccion}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-600 text-green-800">
                                        {{$miembro->telefono}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full @if ($miembro->bautizo == 'Si')
                                                                                                                bg-green-200 text-green-600
                                                                                                                @else
                                                                                                                bg-red-100 text-red-600
                                                                                                                @endif ">
                                        {{$miembro->bautizo}}
                                    </span>                                        
                                    @isset($miembro->fecha)
                                    <div class="text-sm text-gray-500">{{$miembro->fecha->fecha}}</div>
                                    @else 
                                    <div class="text-sm text-gray-500"></div>                      
                                    @endisset
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium grid md:grid-cols-2 gap-4">
                                @can('admin.miembros.edit')
                                    <a class="btn-primary btn-sm md:col-span-1" href="{{ route('admin.miembros.edit', $miembro) }}">Editar</a>                            
                                @endcan
                                
                                @can('admin.miembros.destroy')
                                    <form action="{{ route('admin.miembros.destroy', $miembro) }}" method="post">
                                        @method('delete')                            
                                        @csrf
                                        <button class="btn btn-danger btn-sm md:col-span-1" type="submit">Eliminar</button>
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
        </div>     --}}
    @endif
    

    
    {{-- <div class="card-footer">
        {{ $miembros->links() }}
    </div> --}}
</div>
