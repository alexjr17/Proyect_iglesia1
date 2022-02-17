<div class="pb-2">
    <div class="form-group">
        {!! Form::label('title', 'Titulo', ['class' => 'label']) !!}
        {!! Form::text('title', null, ['class' => 'input', 'placeholder' => 'Titulo']) !!}
        @error('title')
            <small class="text-danger">* {{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::label('descripcion', 'Detalle', ['class' => 'label']) !!}
        {!! Form::textarea('descripcion', null, ['class' => 'input max-h-40', 'placeholder' => 'describa algo relebante']) !!}
        @error('descripcion')
            <small class="text-danger">* {{ $message }}</small>
        @enderror
    </div>
    <div class="relative">
        <div class="static">
            @isset($carrucel->image)
                <img id="picture" class="h-52 w-full rounded-lg" src="{{ Storage::url($carrucel->image->url) }}" alt="">
            @else
                <img id="picture" class="h-52 w-full rounded-lg"
                    src="https://www.freejpg.com.ar/asset/900/d0/d08d/F100008153.jpg" alt="">
            @endisset
        </div>
        <div class="absolute bottom-2 left-2">
            {!! Form::label('file', 'Cargar imagen', ['class' => 'label ']) !!}
            {!! Form::file('file', ['class' => 'rounded-lg', 'accept' => 'image/*']) !!}
        </div>
    </div>

    @error('file')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
