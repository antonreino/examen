@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body><br><br>
<div>
<h1>Bienvenido {{Auth::user()->name}}</h1>

<form class="form-horizontal" action="nota" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2">Título:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Introducir titulo">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Nota</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control" id="nota" name="nota" placeholder="Introducir Nota">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" href ="home">Enviar nota</button>
      {{csrf_field()}}
      
    </div>
  </div>
</form>
	
</div>
	
</body>
</html>