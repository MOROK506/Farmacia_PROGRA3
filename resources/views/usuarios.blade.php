
@extends('layouts.app')

@section('content')

<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
      
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            {{-- se toma users de userController y se le pasan los datos  --}}
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
         {{-- se utilisan dobles llaves para que la plantilla blade lo reconosca  --}}
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection