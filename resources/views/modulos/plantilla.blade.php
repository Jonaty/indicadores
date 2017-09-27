<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')</title>
	<link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('estilos/css/my-style.css') }}">
    <link rel="stylesheet" href="{{ asset('estilos/css/bootstrap.min.css') }}">
    {{-- Icons Materialize --}}
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header>
    <div class="">
       <img class="logo hidden-md hidden-sm hidden-xs" src="{{ asset('estilos/img/logo.png') }}">
       <img class="logo visible-xs-* visible-sm-* visible-md-* hidden-lg" src="{{ asset('estilos/img/logo.png') }}" width="174" height="40">
    </div>    
  </header>
	@include('modulos.navbar')

	<div class="container">
  		@yield('contenido')
  	</div>


	<footer class="footer-distributed">
  <div class="footer-left">
  <p>INDICADORES DE DESEMPEÑO 2017</p>
    <p class="footer-links">
      <ul>
        <li><a href="#"><span class="glyphicon glyphicon-flag"></span> Facultad de Ingeniería Electromecánica</a></li>
        <li><a href="http://portal.ucol.mx/fie/"><span class="glyphicon glyphicon-map-marker"></span> Dirección: Km 20, carretera Manzanillo-Cihuatlan Ejido El Naranjo Manzanillo, Colima</a></li>       
      </ul>
    </p>
    
  </div>
</footer>
</body>
</html>