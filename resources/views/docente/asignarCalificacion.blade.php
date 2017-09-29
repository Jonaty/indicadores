@extends('docente.modulos.plantilla')

@section('title', 'Asignar Calificación')

@section('contenido')

<div class="col-md-6">

	<div class="panel panel-default">
  <div class="panel-body">
   <h1>Asignar Calificación</h1>

	<form action="{{ route('datosAsignarCalificacion') }}" method="POST">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}

		<div class="form-group">
			<select name="id_materia" class="form-control">
				@foreach ($materias as $materia)
					<option value="{{ $materia->id }}">{{ $materia->nom_materia }}</option>
				@endforeach
			</select>
		</div>

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
</div>

</div>

@endsection