<form action="" id="form">
  {{-- @csrf --}}
 {!! csrf_field() !!}
  <div class="form-group d-none">
    <label for="id">id</label>
    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>

  <div class="form-group">
    <label for="">Titulo</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="ingrese un titulo">
    @error('titulo')
      <small id="helpId" class="text-muted text-danger">*{{$message}}</small>
    @enderror
  </div>

  <div class="form-group">
      <label for="">Descripcion</label>
      {{-- <input type="text" name="descripcion" id="descripcion"> --}}
      <textarea name="descripcion" class="form-control" cols="10" rows="5" id="descripcion" placeholder="ingrese una descripcion"></textarea>
      @error('descripcion')
        <small id="helpId" class="text-muted text-danger">*{{$message}}</small>
      @enderror
  </div>

  <div class="form-group">
    <label for="start">start</label>
    <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>

  <div class="form-group">
    <label for="end">end</label>
    <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>
</form>   