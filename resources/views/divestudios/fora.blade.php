@extends('layouts.app')

@section('content')


<div class="row">
	<div clss="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3><h3>LLista de Alumnos-Foraneos <a href="{{ action('divisionController@div_create')}}"><button class="btn bnt-primary">Alta Foraneos</button></a></h3>
</div>

<div class="container centrado-porcentual">
  <div class="panel panel-primary">


<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
		<div class="table-responsive">
		<table class="table table-striped table-borderes table-condensed table-hover">

			<thead>
				<th>NC</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Carrera</th>
				<th>Telefono</th>
				<th>Direccion email</th>
				<th>Plan de Estudios</th>
				<th>Opcion de Titulacion</th>
				<th>Producto</th>
				<th>Asedsor</th>
				<th>Revisor1</th>
				<th>Revisor2</th>
				<th>Tipo</th>
				<th></th>
				<th>Editar</th>
				<th>Aprobar</th>
			</thead>
			
		</table>
</div>

<ul>
    @foreach ($foraneo as $foraneos)
    <li>{{$foraneos->nombre}}</li>

    @endforeach
</div>

@endsection