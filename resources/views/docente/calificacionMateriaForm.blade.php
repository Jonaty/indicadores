@extends('docente.modulos.plantilla')

@section('title', 'Asignar Calificación')

@section('contenido')

<div class="col-md-6 col-md-offset-3">
	
<h3>{{ $materia->nom_materia }}</h3>

<form action="{{ route('datosAsignarCalificacion', $materia->id) }}" method="POST">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}


		<div class="form-group">
			<label for="p1">Parcial 1</label>
			<input type="text" name="p1" class="form-control">
		</div>


		<div class="form-group">
			<label for="p2">Parcial 2</label>
			<input type="text" name="p2" class="form-control">
		</div>


		<div class="form-group">
			<label for="p3">Parcial 3</label>
			<input type="text" name="p3" class="form-control">
		</div>

		 <button type="submit" class="btn btn-default">Asignar</button>
	</form>
</div>

@endsection