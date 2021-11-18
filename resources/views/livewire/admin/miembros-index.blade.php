<div class="card">
    
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="ingrese el nombre del miembro">
    </div>

   
    
    @if ($miembros->count())

        <div class="card-body">
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
        </div>
    @else 
        <div class="card-body">
            No se encontraron registros
        </div>    
    @endif
    

    
    <div class="card-footer">
        {{ $miembros->links() }}
    </div>
</div>
