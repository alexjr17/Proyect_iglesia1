<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nuevo rol', 'autocomplete']) !!}
    @error('name')
        <span class="text-danger">*{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <h2 class="h3">Lista de pesmisos</h2>
    @foreach ($permissions as $permission)
        <div>
           <label for="">
               {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
               {{$permission->description}}
           </label>
        </div>
        
    @endforeach
</div>