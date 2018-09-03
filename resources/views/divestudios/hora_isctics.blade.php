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
    					<th>Fecha</th>
						<th>Hora</th>
						<th>Lugar</th>
						<th>Carrera</th>
						<th>Espacios Disponibles</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($fecha as $fechas)
				<tr>
					<td>{{$fechas->fecha}}</td>
					<td>{{$fechas->hora}}</td>
					<td>{{$fechas->lugar}}</td>
					<td>{{$fechas->carrera}}</td>
					<td>{{$fechas->espacios_disponibles}}</td>
					<td>
						<a href="#"><button class="btn btn-success">Editar</button>
						</a>
						<a href="#"><button class="btn btn-danger">Eliminar</button>
						</a>
					</td>
				</tr>
    			@endforeach
    			</tbody>
    		</table>
		</div>
	</div>
</div>
@endsection
