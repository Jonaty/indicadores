@extends('docente.modulos.plantilla')

@section('title', 'Asignar Calificación')

@section('contenido')

<div class="col-md-6 col-md-offset-3">

	<div class="panel panel-default">
		<div class="panel-body">
			<h3>Alumno: {{ $alumno->nom_user }}</h3>

	    <h3>Materias:</h3>

	@foreach ($alumno->materias as $materia)
		<ul>
			<li style="list-style: none;" class="text-justify"><a href="{{ route('calificacionMateriaForm', $materia->id) }}">{{ $materia->nom_materia }}</a></li>
		</ul>
	@endforeach
		</div>
	</div>

</div>

@endsection