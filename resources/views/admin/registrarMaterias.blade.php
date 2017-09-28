@extends('admin.modulos.plantilla')

@section('title', 'Login Admin')

@section('contenido')

<div class="col-md-8 col-md-offset-2">
	@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>
	@endif
	
	<h1>Registrar Materias</h1>

	<form action="{{ route('datosRegistrarMaterias') }}" method="POST">
		{!! csrf_field() !!}

		<div class="form-group">
			<label for="nom_materia">Nombre de la Materia</label>
			<input type="text" name="nom_materia" class="form-control">
		</div>

		<div class="form-group">
			<label for="semestre">Semestre</label>
			<input type="text" name="semestre" class="form-control">
		</div>

		<select class="form-control" name="carrera">
			<option value="ime">Ingeniero(a) Mecánico Electricista</option>
			<option value="ite">Ingeniería en Tecnologías Electrónicas</option>
			<option value="imt">Ingeniero(a) en Mecatrónica</option>
			<option value="isc">Ingeniero(a) en Sistemas Computacionales</option>
		</select>
        <br>
		<button type="submit" class="btn btn-primary">Registrar</button>
	</form>
</div>
@endsection