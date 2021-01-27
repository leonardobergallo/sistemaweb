@extends('layouts.app')
@section('content')
  <h2>Lista de usuarios registrados <a href="usuarios/create"> <button type="button" class="btn btn-success float-right">Agregar Usuarios</button></a></h2>
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
        <th scope="col">Email</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($users as $user )

        <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
        <form action="{{route('usuarios.destroy' ,$user->id)}}" method="POST">
        <a href="{{route ('usuarios.show',$user->id)}}"> <button type="button" class="btn btn-secondary">Ver</button></a>
        <a href="{{route('usuarios.edit',$user->id)}}"> <button type="button" class="btn btn-primary">Editar</button></a> 
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
           {{$users->links()}}
    </div>
  </div>
</div>
@endsection