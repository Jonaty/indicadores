@extends('docente.modulos.plantilla')

@section('title', 'Asignar Calificación')

@section('contenido')

<div class="col-md-6">

	@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>
	@endif

	<h1>Asignar materias Alumno</h1>

	<table class="table table-responsive table-hover table-bordered">
		<thead>
			<tr>
				<th>Alumno</th>
				<th>Materias</th>
				<th>Acción</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($alumnos as $alumno)
				<tr>
					<td><a href="{{ route('verMateriasAlumno', $alumno->id) }}">{{ $alumno->nom_user }}</a></td>
					
				    <td>
				    		@foreach ($alumno->materias as $materia)
						<ul>
							<li>{{ $materia->nom_materia }}</li>
						</ul>
					@endforeach
				    </td>
					<td><a class="btn btn-primary" href="{{ route('asignarMateriasForm', $alumno->id) }}" role="button">Link</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection