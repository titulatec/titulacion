@extends('layouts.app')

@section('content')

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
					<td>
						 {!! Form::submit('Elegir hora', ['class' => 'btn btn-success']) !!}
						</a>
					</td>
				</tr>
    			@endforeach
    			</tbody>
    		</table>
    		{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection
