@extends('layouts.app')

@section('title','Login')

@section('content')



<h1>Inicio de Sesión</h1><br>
@if(count($errors)>0)
<div class="alert alert-danger">
	<ul class="list-unstyled">
		@foreach($errors->all() as $error)
       <li>{{$error}}</li>
	@endforeach
		</ul>
		
</div>
@endif
<form class="form-horizontal" action="login" method="POST">
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
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Iniciar Sesión</button>

      {{csrf_field()}}
    </div>
  </div>
</form>
@stop