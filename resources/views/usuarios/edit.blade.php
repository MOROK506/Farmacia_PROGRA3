@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6"></div>
    <form action="{{route('usuarios.update', $user->id)}}" method="POST">
        @method('PATCH')<!-- Este metodo nos sirve para actualizar directamente con nuestro metodo update--> 
        
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" value="{{$user->name}}"  placeholder="Nombre">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="email">
       
      </div>
    </div>
   
    <button type="submit" class="btn btn-primary">Guardar</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
  </form>
       </div> 
    </div>
</div>
@endsection