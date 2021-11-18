<div class="form-group">
    {!! Form::label('momto', 'Monto') !!}
    {!! Form::text('monto', null, ['class' => 'form-control']) !!}

    @error('monto')
        <span class="text-danger">{{$message}}</span>        
    @enderror
</div>

<div class="form-group">
    {!! Form::label('proposito_id', 'Proposito') !!}
    {!! Form::select('proposito_id', $propositos, null, ['class' => 'form-control', 'placeholder' => 'Selecine un motivo del gasto']) !!}

    @error('proposito_id')
        <span class="text-danger">{{$message}}</span>        
    @enderror
</div>

<div class="form-group">
    {!! Form::label('detalle', 'Detalle') !!}
    {!! Form::textarea('detalle', null, ['class' => 'form-control']) !!}

    @error('detalle')
        <span class="text-danger">{{$message}}</span>        
    @enderror
</div>
