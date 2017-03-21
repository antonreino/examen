@extends('layouts.app')

@section('title','Home')

@section('content')

	<h1>Registro de Usuario</h1><br>
<form class="form-horizontal" action="nuevoUsuario" method="POST">
	 <div class="form-group">
    <label class="control-label col-sm-2" for="nombre">Nombre</label>
    <div class="col-sm-10">
      <input type="nombre" class="form-control" id="nombre" name="name" placeholder="Introducir nombre">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Introducir email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Introducir Contraseña">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd2">Repetir Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd2" placeholder="Repetir Contraseña">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Registrar</button>

      {{csrf_field()}}
    </div>
  </div>
</form>
@stop