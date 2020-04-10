
@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Lista de productos Registrados <a href="productos/create"><button type="button" class="btn btn-success float-right">Agregar producto</button></a></h2>
<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">image</th>
        <th scope="col">precio</th>
        <th scope="col">cantidad</th>
      
      </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            {{-- se toma users de userController y se le pasan los datos  --}}
        <tr>
            <th scope="row">{{$producto->id}}</th>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->image}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->cantidad}}</td>
            <td>
              
                <form action="{{ route('productos.destroy', $producto->id)}}" method="POST">
                  <a href="{{route('productos.show', $producto->id)}}"> <button type="button" class="btn btn-secondary">ver</button></a>
            <a href="{{route('productos.edit', $producto->id)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              
            </td>
         {{-- se utilisan dobles llaves para que la plantilla blade lo reconosca  --}}
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection