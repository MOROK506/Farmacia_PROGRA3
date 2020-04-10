@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6"></div>
<form action="/productos" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" placeholder="Nombre">

      <div class="form-group">
        <label for="descripcion">descripcion</label>
        <input type="test" class="form-control" name="descripcion" placeholder="descripcion">
       
      </div>
       
      <div class="form-group">
        <label for="image">foto</label>
        <input type="file" class="custom-file" name="img" placeholder="imagen">
       
      </div>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
  </form>
       </div> 
    </div>
</div>
@endsection