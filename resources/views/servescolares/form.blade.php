@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
    	<div class="panel panel-primary">
    		<div class="panel-heading">LISTA DE ALUMNOS PROXIMO A TITULAR</div>
    		<table class="table table-hover table-striped">
    			<thead>
    				<tr>
    					<th>Folio</th>
    					<th>Nombre</th>
						<th>No. Control</th>
						<th>Carrera</th>
						<th>Periodo de Egreso</th>
						<th>Reticula</th>
						<th>Opcion de titulacion</th>
						<th>Fecha de liberacion de </th>
						<th>Opcion</th>
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
					<td></td>
					<td></td>
					<td><a href="{{ action('EscolaresController@checklist')}}"><button class="btn btn-success">Editar</button>
								<i class="fa fa-pencil-square-o"></i></td>
				</tr>
    		</table>
		</div>
	</div>
</div>

</div>

@endsection
