
@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Lista de clientes Registrados <a href="clientes/create"><button type="button" class="btn btn-success float-right">Agregar Cliente</button></a></h2>
<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Opciones</th>
      
      </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
            {{-- se toma users de userController y se le pasan los datos  --}}
        <tr>
            <th scope="row">{{$cliente->id}}</th>
            <td>{{$cliente->name}}</td>
            <td>{{$cliente->email}}</td>
            <td>
              
                <form action="{{ route('clientes.destroy', $cliente->id)}}" method="POST">
                  <a href="{{route('clientes.show', $cliente->id)}}"> <button type="button" class="btn btn-secondary">ver</button></a>
            <a href="{{route('clientes.edit', $cliente->id)}}"> <button type="button" class="btn btn-primary">Editar</button></a>
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