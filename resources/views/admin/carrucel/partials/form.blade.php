<div class="form-group">
    {!! Form::label('title', 'Titulo') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo']) !!}
  @error('title')
      <small class="text-danger">* {{$message}}</small>
  @enderror
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Detalle') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control w-full h-20 max-h-40', 'placeholder' => 'describa algo relebante']) !!}
  @error('descripcion')
      <small class="text-danger">* {{$message}}</small>
  @enderror
</div>

{{-- <div class="grid"> --}}
    {{-- <div class="h-48 border-2 border-blue-700">
        @isset ($carrucel->image)
            <img id="picture" class="h-48" src="{{Storage::url($miembro->image->url)}}" alt="">
        @else 
            <img id="picture" class="h-48 static" src="https://www.freejpg.com.ar/asset/900/d0/d08d/F100008153.jpg" alt="">
        @endisset
    </div> --}}
    <div class="flex flex-row">
        <div class="">
            @isset ($carrucel->image)
                <img id="picture" src="{{Storage::url($carrucel->image->url)}}" alt="">
            @else 
                <img id="picture" src="https://www.freejpg.com.ar/asset/900/d0/d08d/F100008153.jpg" alt="">
            @endisset
        </div>
        <div class="form-group top-0 flex-nowrap">
            {!! Form::label('file', 'Cargar imagen' ) !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>
    </div>
{{-- </div> --}}
@error('file')
<span class="text-danger">{{$message}}</span>           
@enderror
