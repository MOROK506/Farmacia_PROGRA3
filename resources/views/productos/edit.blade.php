@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6"></div>
    <form action="{{route('productos.update', $user)}}" method="POST">
        @method('PATCH')<!-- Este metodo nos sirve para actualizar directamente con nuestro metodo update--> 
        @csrf
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="nombre" value="{{$user->nombre}}"  placeholder="Nombre">
      <div class="form-group">
        <label for="descripcion">descripcion</label>
        <input type="text" class="form-control" name="descripcion" value="{{$user->descripcion}}" placeholder="descripcion">
       
      </div>
    </div>
    <div class="form-group">
        <label for="image">foto</label>
        <input type="file" class="custom-file" name="img" placeholder="imagen">
       
      </div>
   
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
  </form>
       </div> 
    </div>
</div>
@endsection