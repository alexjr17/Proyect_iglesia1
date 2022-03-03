<div>
    <div class="card">
        
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="ingrese el nombre del miembro">
        </div>
    
        
        @if ($ofrendas->count())
    
            <div class="card-body">
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Monto</th>
                            <th>Fecha</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ofrendas as $ofrenda)
                        <tr>
                            <td>{{$ofrenda->id}}</td>
                            <td>$ {{ number_format($ofrenda->recaudo, 0, ',', '.')}}</td>
                            <td>{{$ofrenda->created_at}}</td>
                            @can('admin.ofrendas.edit')
                                <td whidth="10px">
                                    <a class="btn-primary btn-sm" href="{{ route('admin.ofrendas.edit', $ofrenda) }}">Editar</a>                            
                                </td>
                            @endcan
                            @can('admin.ofrendas.destroy')
                                <td whidth="10px">
                                    <form action="{{ route('admin.ofrendas.destroy', $ofrenda) }}" method="post">
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
            {{ $ofrendas->links() }}
        </div>
    </div>
    
</div>

