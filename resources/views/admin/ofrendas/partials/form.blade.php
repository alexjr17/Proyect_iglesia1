<div class="form-group">
    {!! Form::label('recaudo', 'Monto') !!}
    {!! Form::text('recaudo', null, ['class' => 'form-control']) !!}

    @error('recaudo')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>