@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-4">
  <form action="/cilsaweb/cilsaweb/public/socios" method="POST">
    @csrf
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Titular</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Datos</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Otros</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        
        <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" placeholder="Escribe un nombre">
      </div>
      <div class="form-group">
          <label for="Domicilio">Domicilio</label>
          <input type="Domicilio" class="form-control" name="Domicilio" placeholder="Escribe un Domicilio">
        </div>
      <div class="form-group">
        <label for="Localidad">Localidad</label>
        <input type="Localidad" class="form-control" name="Localidad" placeholder="Escribe un  Localidad">
      </div>

      <div class="form-group">
        <label for="Enco">Enco</label>
        <input type="Enco" class="form-control" name="Enco" placeholder="Escribe un Enco">
      </div>
      <div class="form-group">
          <label for="Zon">Zona</label>
          <input type="Zon" class="form-control" name="Zon" placeholder="Escribe un Zona">
        </div>
      <div class="form-group">
        <label for="Provincia">Provincia</label>
        <input type="Provincia" class="form-control" name="	Provincia" placeholder="Escribe Provincia">
      </div>

    </div>

      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        
        <div class="form-group">
          <label for="Telefono">Telefono</label>
          <input type="Telefono" class="form-control" name="Telefono" placeholder="Escribe un Telefono">
        </div>
        <div class="form-group">
            <label for="Of">Oficina</label>
            <input type="Of" class="form-control" name="Of" placeholder="Escribe un Oficina">
          </div>
  
        <div class="form-group">
          <label for="Colabor.">Colaborador</label>
          <input type="Colabor." class="form-control" name="Colabor." placeholder="Escribe un Colaborador">
        </div>
        <div class="form-group">
            <label for="En">En</label>
            <input type="En" class="form-control" name="En" placeholder="Escribe un En">
          </div>
        <div class="form-group">
          <label for="Tarjeta">Tarjeta</label>
          <input type="Tarjeta" class="form-control" name="Tarjeta" placeholder="Tarjeta">
        </div>

      </div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

        <div class="form-group">
          <label for="name">FAlta</label>
          <input type="FAlta" class="form-control" name="FAlta" placeholder="Escribe un F Alta">
        </div>
        <div class="form-group">
            <label for="UlPago">UlPago</label>
            <input type="UlPago" class="form-control" name="UlPago" placeholder="Escribe un UlPago">
          </div>
        <div class="form-group">
          <label for="Imp">	Imp.</label>
          <input type="Imp" class="form-control" name="Imp" placeholder="Imp">
        </div>
  
        <div class="form-group">
          <label for="ClaseSocio">	Clase Socio	</label>
          <input type="ClaseSocio" class="form-control" name="ClaseSocio" placeholder="Escribe una Clase Socio">
        </div>
        <div class="form-group">
            <label for="email">Mail</label>
            <input type="email" class="form-control" name="email" placeholder="Escribe un Mail">
          </div>
        <div class="form-group">
          <label for="Programa">Programa</label>
          <input type="Programa" class="form-control" name="Programa" placeholder="Programa">
        </div>

      

      </div>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
  </form>
</div>
</div>
</div>
@endsection