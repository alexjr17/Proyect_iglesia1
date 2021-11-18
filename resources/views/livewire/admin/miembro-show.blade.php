<div>
    <div>
        
        {{-- <div class="form-group">
            {!! Form::text('miembro_id', $diezmo->id, ['class' => 'form-control']) !!}
        </div>
            --}}
        <div class="form-group">
            {!! Form::label('search', 'Buscar miembro') !!}
            <input wire:model="search" class="form-control" placeholder="ingrese el nombre del miembro">
            @error('miembro_id')
                <small class="text-danger">*{{$message}}</small>                  
            @enderror
        </div>
    </div>
    <div>
        <div style="overflow: auto; width: 100%; height: 300px">
            @if ($miembros->count())
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Seleccion</th>
                        <th>Foto</th>
                        <th>Cedula</th>
                        <th>Cedula</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($miembros as $miembro)
                    <label for="">
                        <tr>
                            <td>
                                {!! Form::radio('miembro_id', $miembro->id, null) !!}
                            </td>
                            <td>
                                @isset($miembro->image)
                                    <img class="img-responsive img-circle" width="50" src="{{Storage::url($miembro->image->url)}}" alt="">
                                @else 
                                    <i class="fas fa-user-circle" width='300 px'></i>
                                @endisset                        
                            </td>
                            <td>{{$miembro->nombre.' '. $miembro->apellido}}</td>
                            <td>{{$miembro->cedula}}</td>
                            
                        </tr> 
                    </label>
                                        
                    @endforeach
                    
                </tbody>
            </table>   
            @else 
                <div class="card-body">
                    No se encontraron registros
                </div>    
            @endif
        </div>
    </div>
</div>






    

