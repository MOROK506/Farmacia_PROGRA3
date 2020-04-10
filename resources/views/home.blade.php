@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Bienvenido</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                      </div>
                </div>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">{{ $user ?? '' }}</h1>
            </div>
    </div>
</div>
@endsection
