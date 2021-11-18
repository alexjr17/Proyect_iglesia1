<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="ingrese el nombre del miembro">
        </div>  
        
        @if ($diezmos->count())
    
            <div class="card-body">
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Monto</th>
                            <th>Miembro</th>
                            <th>Fecha</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diezmos as $diezmo)
                        <tr>
                            <td>{{$diezmo->id}}</td>
                            <td id="monto">$ {{$diezmo->monto}}</td>
                            <td>{{$diezmo->miembro->nombre. ' '. $diezmo->miembro->apellido}}</td>
                            <td>{{$diezmo->created_at}}</td>
                            @can('admin.diezmos.edit')
                            <td whidth="10px">
                                <a class="btn-primary btn-sm" href="{{ route('admin.diezmos.edit', $diezmo) }}">Editar</a>                            
                            </td>
                            @endcan
                            
                            @can('admin.diezmos.destroy')
                            <td whidth="10px">
                                <form action="{{ route('admin.diezmos.destroy', $diezmo) }}" method="post">
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
            {{ $diezmos->links() }}
        </div>
    </div>
    
</div>
