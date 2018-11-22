	@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<a href="{{ action('divisionController@fecha_create')}}"><button class="btn btn-success">Alta de Fechas</button></a>
	</div>
</div>

<br>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
    	<div class="panel panel-primary">
    		<div class="panel-heading">LISTA DE FECHAS DE TITULACION</div>
    		<table class="table table-hover table-striped">
    			<thead>
    				<tr>
    					<th>ID</th>
    					<th>Fecha</th>
						<th>Hora</th>
						<th>Lugar</th>
						<th>Carrera</th>
						<th>Espacios Disponibles</th>
						<th>Inscritos</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($fecha as $fechas)
				<tr>
					<td>{{$fechas->id}}</td>
					<td>{{$fechas->fecha}}</td>
					<td>{{$fechas->hora}}</td>
					<td>{{$fechas->lugar}}</td>
					<td>{{$fechas->carrera}}</td>
					<td>{{$fechas->espacios_disponibles}}</td>
					<td>{{$fechas->inscritos}}</td>
					<td>
						<a href="{{ action('divisionController@fecha_alum')}}"><button class="btn btn-info">Ver</button></a>
						<a href="" data-target="#modal-delete-{{$fechas->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
			@endforeach
    		</table>
		</div>
	</div>
</div>
@endsection
