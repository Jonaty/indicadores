@extends('docente.modulos.plantilla')

@section('title', 'Asignar Calificación')

@section('contenido')

<div class="col-md-6 col-md-offset-3">

	<h1>Materias</h1>

	<p><b>{{ $alumno->nom_user }}</b></p>

{!! Form::open(['route' => ['datosAsignarMaterias', $alumno->id], 'method' => 'POST']) !!}

  <div>
    {!! Form::label('materias', 'Materias:') !!}
    <br>
    {!! Form::select('materias[]', $materias, null, ['multiple', 'class' => 'form-control']) !!}
  </div>
    <br>
    {!! Form::submit('Asignar',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
</div>

@endsection