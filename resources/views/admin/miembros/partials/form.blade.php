

<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre',"onkeyup"=>"createTextSlug()"  ]) !!}

    @error('nombre')
    <small class="text-danger">
        {{$message}}    
    </small>                
    @enderror  

</div>



<div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese apellido', "onkeyup"=>"createTextSlug()"]) !!}

    @error('apellido')
    <small class="text-danger">
        {{$message}}    
    </small>                
    @enderror

</div>



<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Se genera url amigable', 'readonly']) !!}

    @error('slug')
    <small class="text-danger">
        {{$message}}    
    </small>                
    @enderror

</div>

<div class="form-group">
    {!! Form::label('cedula', 'Cedula') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese cedula', "onkeyup"=>"createTextSlug()" ]) !!}

    @error('cedula')
    <small class="text-danger">
        {{$message}}    
    </small>                
    @enderror

</div>



<div class="form-group">
    {!! Form::label('correo', 'Correo') !!}
    {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese correo']) !!}

    @error('correo')
    <small class="text-danger">
        {{$message}}    
    </small>                
    @enderror

</div>



<div class="form-group">
    {!! Form::label('telefono', 'Telefono') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese telefono']) !!}

    @error('telefono')
    <small class="text-danger">
        {{$message}}    
    </small>                
    @enderror

</div>



<div class="form-group">
    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese direccion']) !!}

    @error('direccion')
    <small class="text-danger">
        {{$message}}    
    </small>                
    @enderror

</div>



<div class="form-group">
    {!! Form::label('ciudad', 'Ciudad') !!}
    {!! Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese ciudad']) !!}

    @error('ciudad')
    <small class="text-danger">
        {{$message}}    
    </small>                
    @enderror

</div>



<div class="form-group">
    {!! Form::label('bautizo', 'Bautizo') !!}
    {!! Form::select('bautizo', $bautizo, null, ['class' => 'form-control', 'placeholder' => 'estado selecione si o no']) !!}

    @error('bautizo')
    <small class="text-danger">
        {{$message}}    
    </small>                
    @enderror

</div>



<div class="form-group">
    {!! Form::label('fecha', 'Fecha') !!}
    @isset($miembro->fecha)
    {!! Form::date('fecha', $miembro->fecha->fecha, ['class' => 'form-control', 'placeholder' => 'Ingrese fecha']) !!}    
    @else
    {!! Form::date('fecha', null, ['class' => 'form-control', 'placeholder' => 'Ingrese fecha']) !!} 
    @endisset

    @error('fecha')
    <small class="text-danger">
        {{$message}}    
    </small>                
    @enderror

</div>

<div class="row mb-3">
    <div class="col image-wrapper">
        @isset ($miembro->image)
            <img id="picture" src="{{Storage::url($miembro->image->url)}}" alt="">
        @else 
            <img id="picture" src="https://www.freejpg.com.ar/asset/900/d0/d08d/F100008153.jpg" alt="">
        @endisset
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'imagen que se gurdara ppar el miembro' ) !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt iusto assumenda temporibus fugiat, optio quisquam deleniti quasi necessitatibus, deserunt ratione et maiores ut ducimus perspiciatis sit repudiandae ex accusamus illo.</p>

        @error('file')
            <span class="text-danger">{{$message}}</span>           
        @enderror
    </div>
</div>


