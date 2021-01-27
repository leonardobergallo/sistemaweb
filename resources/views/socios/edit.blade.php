@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-4">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        <h3>Editar Usuario {{$socio->name}}</h3>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  <form action="{{route('socios.update',$socio->id)}}" method="POST">
    @method('PATCH')
    @csrf 
    <div class="form-group">
      <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" value="{{$socio->name}}" placeholder="Escribe un nombre">
    </div>
    <div class="form-group">
        <label for="Domicilio">Domicilio</label>
        <input type="Domicilio" class="form-control" name="Domicilio" value="{{$socio->Domicilio}}" placeholder="Escribe un Domicilio">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" value="{{$socio->email}}" placeholder="Escribe un email">
  </div>
  <div class="form-group">
    <label for="Localidad">Localidad</label>
    <input type="Localidad" class="form-control" name="Localidad" value="{{$socio->Domicilio}}" placeholder="Escribe un Localidad">
</div>
    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
  </form>
</div>
</div>
</div>
@endsection