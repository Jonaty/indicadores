@extends('modulos.plantilla')

@section('title', 'Login')

@section('contenido')

<div class="col-md-6 col-md-offset-3">
	
	<div class="panel panel-default">
		<div class="panel-body">
			<h1 class="text-center">Registro Alumno</h1>

<form action="{{ route('datosRegistro') }}" method="POST">
	{!! csrf_field() !!}

    <div class="form-group">
		<label for="nom_user">Nombre completo</label>
		<input type="text" name="nom_user" id="nom_user" class="form-control" placeholder="Nombre completo">
	</div>

	<div class="form-group">
		<label for="no_cuenta">Número de cuenta</label>
		<input type="text" name="no_cuenta" id="no_cuenta" class="form-control" placeholder="Número de cuenta">
	</div>

	<div class="form-group">
		<label for="password">Contraseña</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="********">
	</div>

	<div class="form-group">
		<label for="semestre">Semestre</label>
		<input type="semestre" name="semestre" id="semestre" class="form-control">
	</div>

	<select class="form-control" name="carrera">
			<option value="ime">Ingeniero(a) Mecánico Electricista</option>
			<option value="ite">Ingeniería en Tecnologías Electrónicas</option>
			<option value="imt">Ingeniero(a) en Mecatrónica</option>
			<option value="isc">Ingeniero(a) en Sistemas Computacionales</option>
	</select>

	<div class="form-group">
		<label for="facultad">Facultad</label>
		<input type="facultad" name="facultad" id="facultad" class="form-control" value="FIE" readonly="true">
	</div>

	<div class="form-group">
		<label for="campus">Campus</label>
		<input type="campus" name="campus" id="campus" class="form-control" value="Naranjo" readonly="true">
	</div>

	<input type="hidden" name="activo" value="1">

	<input type="hidden" name="rol" value="2">

	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block">Entrar</button>
	</div>
</form>

<a href="{{ route('login') }}">Atrás</a>
		</div>
	</div>

</div>
@endsection