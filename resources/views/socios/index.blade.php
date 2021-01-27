@extends('layouts.app')
@section('content')
  <h2>Lista de socios registrados <a href="socios/create"> <button type="button" class="btn btn-success float-right">Agregar socios</button></a></h2>
  <h6>
    <div class="alert alert-primary" role="alert">
      @if($search)
      Los resultados para tu busqueda '{{$search}}' son:
      @endif
    </div>  
  </h6>        
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Domicilio</th>
        <th scope="col">Localidad</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($socios as $socio )

        <tr>
        <th scope="row">{{$socio->id}}</th>
        <td>{{$socio->name}}</td>
        <td>{{$socio->Domicilio}}</td>
        <td>{{$socio->Localidad}}</td>
        <td>
        <form action="{{route('socios.destroy' ,$socio->id)}}" method="POST">
        <a href="{{route ('socios.show',$socio->id)}}"> <button type="button" class="btn btn-secondary">Ver</button></a>
        <a href="{{route('socios.edit',$socio->id)}}"> <button type="button" class="btn btn-primary">Editar</button></a> 
        @csrf
        @method ('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>  
      </td>
      </tr>


      @endforeach
    </tbody>
  </table>
  <div class="row">
    <div class="mx-auto">
           {{$socios->links()}}
    </div>
  </div>
</div>
@endsection