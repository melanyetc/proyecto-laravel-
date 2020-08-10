@extends('layout')

@section('title', 'Crear proyecto')
@section('content')
   
   <h1>Editar proyecto</h1>



@include('partials.validation-errors')


<form method="POST" action="{{ route('projects.update', $project) }}">
<input type="hidden" name="_method" value="PATCH " />

	@include('projects._form')
	
	<button> Actualizar </button>

</form>


@endsection 