@extends('layouts.app')

@section('content')
@foreach ( $socios as $socio)
<div class="d-flex justify-content-around">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header"><b>{{$socio->name}}</b></div>
    <p class="small float-rigth">{{$socio->created_at}}</p>
    <div class="card-body text-primary">
      <p class="card-text">{{$socio->Domicilio}}</p>
    </div>
  </div>
</div>
  @endforeach
@endsection