@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">{{$user->nombre}}</h1>
    <p class="lead">{{$user->image}}</p>
    <p class="lead">{{$user->descripcion}}</p>
    <p class="lead">{{$user->precio}}</p>
    </div>
  </div>

@endsection