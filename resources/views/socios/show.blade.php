@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <h1 class="display-4">{{$socio->name}}</h1>
  <p class="lead">{{$socio->Domicilio}}</p>
  <p class="lead">{{$socio->Localidad}}</p>
  </div>
</div>
@endsection