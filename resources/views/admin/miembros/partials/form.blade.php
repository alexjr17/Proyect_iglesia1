<div class="grid grid-cols-6 gap-4">
    <div class="col-span-3">
        {!! Form::label('nombre', 'Nombre', ['class' => 'label']) !!}
        {!! Form::text('nombre', null, ['class' => 'input', 'placeholder' => 'Ingrese nombre', 'onkeyup' => 'createTextSlug()']) !!}

        @error('nombre')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="col-span-3">
        {!! Form::label('apellido', 'Apellido', ['class' => 'label']) !!}
        {!! Form::text('apellido', null, ['class' => 'input', 'placeholder' => 'Ingrese apellido', 'onkeyup' => 'createTextSlug()']) !!}

        @error('apellido')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    {!! Form::label('slug', 'Slug', ['class' => '']) !!}
    {!! Form::text('slug', null, ['class' => '', 'placeholder' => 'Se genera url amigable']) !!}

    @error('slug')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    <div class="col-span-2">
        {!! Form::label('cedula', 'Cedula', ['class' => 'label']) !!}
        {!! Form::text('cedula', null, ['class' => 'input', 'placeholder' => 'Ingrese cedula', 'onkeyup' => 'createTextSlug()']) !!}

        @error('cedula')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="col-span-2">
        {!! Form::label('correo', 'Correo', ['class' => 'label']) !!}
        {!! Form::text('correo', null, ['class' => 'input', 'placeholder' => 'Ingrese correo']) !!}

        @error('correo')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="col-span-2">
        {!! Form::label('telefono', 'Telefono', ['class' => 'label']) !!}
        {!! Form::text('telefono', null, ['class' => 'input', 'placeholder' => 'Ingrese telefono']) !!}

        @error('telefono')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="col-span-2">
        {!! Form::label('ciudad', 'Ciudad', ['class' => 'label']) !!}
        <select name="ciudad" id="" class="input">
            <option value=""></option>
            @foreach ($cities as $city)
                <option class="input" value="{{ $city['city_name'] }}"
                @isset($miembro)
                        @if ($miembro->ciudad == $city['city_name'])
                        selected
                        @endif
                @endisset
                >{{ $city['city_name'] }}</option>
            @endforeach
        </select>
        {{-- {!! Form::select('ciudad', $cities, null, ['class' => 'input', 'placeholder' => 'Ingrese ciudad']) !!} --}}

        @error('ciudad')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="col-span-2">
        {!! Form::label('direccion', 'Direccion', ['class' => 'label']) !!}
        {!! Form::text('direccion', null, ['class' => 'input', 'placeholder' => 'Ingrese direccion']) !!}

        @error('direccion')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="col-span-1">
        {!! Form::label('bautizo', 'bautizo', ['class' => 'label']) !!}
        {!! Form::select('bautizo', $bautizo, null, ['class' => 'input', 'placeholder' => 'estado selecione si o no']) !!}

        @error('bautizo')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="col-span-1">
        {!! Form::label('fecha', 'Fecha', ['class' => '']) !!}
        @isset($miembro->fecha)
            {!! Form::date('fecha', $miembro->fecha->fecha, ['class' => 'form-control', 'placeholder' => 'Ingrese fecha']) !!}
        @else
            {!! Form::date('fecha', null, ['class' => 'input', 'placeholder' => 'Ingrese fecha']) !!}
        @endisset
        @error('fecha')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

    </div>

    <div class="row mb-3 col-span-6">
        @isset($miembro->image)
            <img id="picture" class="h-40 w-40 rounded-full" id="" src="{{ Storage::url($miembro->image->url) }}" alt="">
        @else
            <img id="picture" class="h-40 w-40 rounded-full" id=""
                src="https://www.freejpg.com.ar/asset/900/d0/d08d/F100008153.jpg" alt="">
        @endisset
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'imagen que se gurdara ppar el miembro', ['class' => 'label']) !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            </div>

            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>
