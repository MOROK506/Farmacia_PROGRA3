@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6"></div>
<form action="/productos" method="POST">
    @csrf
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre">

      <div class="form-group">
        <label for="descripcion">descripcion</label>
        <input type="test" class="form-control" name="descripcion" placeholder="descripcion">
       
      </div>
       
      <div class="form-group">
        <label for="image">foto</label>
        <input type="file" class="custom-file" name="image" placeholder="imagen">
       
      </div>
      <div class="form-group">
        <label for="precio">precio</label>
        <input type="decimal" class="form-control" name="precio" placeholder="precio">
       
      </div>
        
    
    <div class="form-group">
      <label for="cantidad">cantidad</label>
      <input type="integer" class="form-control" name="cantidad" placeholder="cantidad">
     
    </div>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
  </form>
       </div> 
    </div>
</div>
@endsection