@extends('docente.modulos.plantilla')

@section('title', 'Login')

@section('contenido')

<div class="col-md-6 col-md-offset-3">
	
<h1>Registro Docente</h1>

<form action="{{ route('datosRegistroDocente') }}" method="POST">

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

	<input type="hidden" name="carrera" value="isc">

	<div class="form-group">
		<label for="facultad">Facultad</label>
		<input type="facultad" name="facultad" id="facultad" class="form-control" value="FIE" readonly="true">
	</div>

	<div class="form-group">
		<label for="campus">Campus</label>
		<input type="campus" name="campus" id="campus" class="form-control" value="Naranjo" readonly="true">
	</div>

	<input type="hidden" name="activo" value="1">

	<input type="hidden" name="rol" value="1">

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Entrar</button>
	</div>
</form>

<a href="{{ route('login') }}">Atrás</a>
</div>
@endsection