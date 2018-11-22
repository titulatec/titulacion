@extends('layouts.app')

@section('content')

<div class="container col-md-10 col-md-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading"></div>
		<div class="row">
			<div class="container form-group col-md-3">
				{!! Field::text('nocontrol','2018-09-04',['label'=>'Fecha'] )!!}
			</div>
			<div class="container form-group col-md-3">
				{!! Field::text('nombre' ,'18:00:00', ['label'=>'Hora'], array('class'=>'col-xs-5') )!!}
			</div>
			<div class="container form-group col-md-3">
				{!! Field::text('carrera' ,'Edificio M',['label'=>'Lugar'] )!!}
			</div>
			<div class="container form-group col-md-3">
				{!! Field::text('tipo' , 'Sistemas Computacionales',['label'=>'Carrera'] )!!}
			</div>
		</div>
	</div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<div class="panel panel-primary">
    		<div class="panel-heading">ALUMNOS INSCRITOS</div>

    		<table class="table table-hover table-striped">
                 
    			<thead>
    				<tr>
    					<th>Nombre Completo</th>
						<th>No. Control</th>
						<th>Carrera</th>
						<th>Presidente</th>
						<th>Secretario</th>
						<th>Vocal</th>
						<th>Presidente</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
				<!--@foreach ($fecha as $fechas)-->
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
						 {!! Form::submit('PDF', ['class' => 'btn btn-primary']) !!}
						</a>
					</td>
				</tr>
    			<!--@endforeach-->
    			</tbody>
    		</table>
    		{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection
