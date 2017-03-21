<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    

    <title>Aplicación de Notas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/home">Notas.com</a>
        </div>


        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
          @if(Auth::guest())
          <li><a href="/login">Inicie Sesión</a></li>
          @else
          
          <li><a href="home">Home</a></li>
          <li><a href="listausuario">Usuarios</a></li>
          <li><a href="notas">Notas</a></li>
          <li><a href="nuevanota">Crear Nota</a></li>
                  
          </form>
          @endif
          </ul>

          <ul class="nav navbar-nav navbar-right">
          @if(Auth::guest())
          @else
          <li><a>{{Auth::user()->name}}</a></li>
          <li><a href="logout" background-color: green>Salir</a></li>
          <li><a href="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"></li>
          <form id="logout" action="logout" method="POST"></form>  
          @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container content">
    @section('content')

    @show
      

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
