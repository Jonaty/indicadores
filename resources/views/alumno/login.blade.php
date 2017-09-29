@extends('modulos.plantilla')

@section('title', 'Login')

@section('contenido')

<div class="col-md-6 col-md-offset-3">

	@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>

	@elseif(Session::has('info2'))
	<div class="alert alert-warning">
		{{ Session::get('info2') }}
	</div>
	@endif

	<div class="panel panel-default">
  <div class="panel-body">
   <h1 class="text-center">Login Alumno</h1>

<form action="{{ route('datosLogin') }}" method="POST">
	{!! csrf_field() !!}

	<div class="form-group">
		<label for="no_cuenta">Número de cuenta</label>
		<input type="text" name="no_cuenta" id="no_cuenta" class="form-control" placeholder="Número de cuenta">
	</div>

	<div class="form-group">
		<label for="password">Contraseña</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="********">
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block">Entrar</button>
	</div>

	<a href="{{ route('loginAdmin') }}">Login Admin</a>
	<br>
{{-- 	<a href="{{ route('loginDocente') }}">Login Docente</a> --}}
	<a href="{{ route('registro') }}">Registrate</a>
</form>
  </div>
</div>
	
</div>
@endsection