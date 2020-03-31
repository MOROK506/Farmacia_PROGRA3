@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">{{$cliente->name}}</h1>
    <p class="lead">{{$cliente->email}}</p>
    </div>
  </div>

@endsection