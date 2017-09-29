@extends('docente.modulos.plantilla')

@section('title', 'Login')

@section('contenido')

<div class="col-md-6 col-md-offset-3">

	@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>
	@endif
	<br>
	<br>

	<div class="panel panel-default">
		<div class="panel-body">
			<h1 class="text-center">Login Docente</h1>

<form action="{{ route('datosLoginDocente') }}" method="POST">
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

	<a href="{{ route('registroDocente') }}">Registro Docente</a>
	<br>
	<a href="{{ route('login') }}">Atrás</a>
</form>
		</div>
	</div>
	
</div>
@endsection