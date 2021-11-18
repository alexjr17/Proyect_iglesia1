<div class="form-group">
    {!! Form::label('nombre', null, ['class' => '']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre proposito']) !!}
    <small class="text-danger">
        @error('nombre')
            *{{$message}}
        @enderror
    </small>
</div>
<div class="form-group">
    {!! Form::label('slug', null, ['class' => '']) !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Se genera url', 'readonly']) !!}
    <small class="text-danger">
        @error('slug')
            *{{$message}}
        @enderror
    </small>
</div>
