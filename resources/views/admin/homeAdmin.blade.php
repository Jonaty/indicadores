@extends('admin.modulos.plantilla')

@section('title', 'Login Admin')

@section('contenido')

<div class="col-md-6 col-md-offset-3">
	
	@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>
	@elseif(Session::has('info2'))
	<div class="alert alert-danger">
		{{ Session::get('info2') }}
	</div>
	@endif

<h1>Home Admin</h1>

</div>
@endsection