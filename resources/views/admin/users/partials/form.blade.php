
<div>
    {!! Form::label('name', 'Nombre', []) !!}
    {!! Form::text('name', null, ['class' => 'input', 'placeholder' => 'Igrese nombre usuario']) !!}
    @error('name')
        <small class="text-sm text-danger">
            {{$message}}
        </small>
    @enderror
</div>

<div>
    {!! Form::label('email', 'correo', []) !!}
    {!! Form::text('email', null, ['class' => 'input', 'placeholder' => 'Igrese de acceso']) !!}
    @error('email')
        <small class="text-sm text-danger">
            {{$message}}
        </small>
    @enderror
</div>
<div>
    {!! Form::label('password', 'contraseña', []) !!}
    {!! Form::text('password', null, ['class' => 'input', 'placeholder' => 'Igrese password de acceso']) !!}
    @error('password')
        <small class="text-sm text-danger">
            {{$message}}
        </small>
    @enderror
</div>
