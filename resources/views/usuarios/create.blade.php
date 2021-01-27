@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-4">
  <form action="/usuarios" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" placeholder="Escribe un nombre">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Escribe un Email">
      </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
  </form>
</div>
</div>
</div>
@endsection