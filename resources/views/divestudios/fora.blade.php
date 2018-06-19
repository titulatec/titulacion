@extends('layouts.app')

@section('content')


<div class="row">
	<div clss="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>LLista de Alumnos-Foraneos <a href="{{ action('divisionController@div_create')}}"><button class="btn btn-primary">Alta Foraneos</button></a></h3>
</div>

<div class="container centrado-porcentual">
  <div class="panel panel-primary">


<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
		<div class="table-responsive">
		<table class="table table-striped table-borderes table-condensed table-hover">

			<thead>
			<tr>
				<th>No Control</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Carrera</th>
				<th>Telefono</th>
				<th>Direccion email</th>
				<th>Plan de Estudios</th>
				<th>Opcion de Titulacion</th>
				<th>Producto</th>
				<th>Tipo</th>
				<th>Asesor</th>
				<th>Revisor1</th>
				<th>Revisor2</th>
			</tr>
			</thead>
			<tbody>
				@foreach ($foraneo as $foraneos)
					<tr>
						<td>{{$foraneos->no_control}}</td>
						<td>{{$foraneos->nombre}}</td>
						<td>{{$foraneos->apellido_p}}</td>
						<td>{{$foraneos->apellido_m}}</td>
						<td>{{$foraneos->carrera}}</td>
						<td>{{$foraneos->telefono}}</td>
						<td>{{$foraneos->mail}}</td>
						<td>{{$foraneos->plan_estud}}</td>
						<td>{{$foraneos->opcion_titulacion}}</td>
						<td>{{$foraneos->producto}}</td>
						<td>{{$foraneos->tipo}}</td>
					<td>
						<a href="{{ action('divisionController@div_edit')}}"><button class="btn btn-danger">Editar</button>
							<i class="fa fa-pencil-square-o"></i>
						</a>
					</td>
					<td>
						<a href="#"><button class="btn btn-success">ENVIAR</button>
							<i class="fa fa-pencil-square-o"></i>
						</a>
					</td>
					</tr>
    			@endforeach
    		</tbody>
    	</table>
	</div>
    
</div>

@endsection