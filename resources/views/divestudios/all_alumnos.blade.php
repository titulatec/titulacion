@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
    	<div class="panel panel-primary">
    		<div class="panel-heading">LISTA DE ALUMNOS PROXIMO A TITULAR</div>
    		<table class="table table-hover table-striped">
    			<thead>
    				<tr>
    					<th>No Control</th>
    					<th>Nombre</th>
						<th>Carrera</th>
						<th>fecha</th>
						<th>Hora</th>
						<th>Lugar de titulacion</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
    		</table>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-md-1 col-sm-8 col-xs-12">
		<a href="#"><button class="btn btn-success">Enviar</button></a>
	</div>
</div>

@endsection
