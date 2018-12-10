 @extends('layouts.app')

@section('content')

<!--	<div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
		<a href="{{ action('divisionController@div_create')}}"><button class="btn btn-success">Alta Foraneos</button></a>


	{!! Form::open( array ('url'=> 'fora', 'method'=> 'GET', 'class' => 'navbar-form navbar-left pull-right', 'roles' => 'search' ))!!}
			<div class="form-group">
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Nombre de usuario']) !!}
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		{!! Form::close() !!}
	</form>
-->
	<p>Fecha AAAA/MM/DD</p>
	<br><br>

    <div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
    <div class="panel panel-primary">
                <div class="panel-heading">LISTA DE ALUMNOS</div>

    <table class="table table-hover table-striped">

</div>

			<thead>
			<tr>
				
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>No Control</th>
				<th>Carrera</th>
				<th>Periodo de egreso</th>
				<th>Opcion de Titulacion</th>
				<th>Tipo</th>
			</tr>
			</thead>
			<tbody>
				@foreach ($foraneo as $foraneos)
					<tr>
						
						<td>{{$foraneos->nombre}}</td>
						<td>{{$foraneos->apellido_p}}</td>
						<td>{{$foraneos->apellido_m}}</td>
						<td>{{$foraneos->no_control}}</td>
						<td>{{$foraneos->carrera}}</td>
						<td></td>
						<td>{{$foraneos->opcion_titulacion}}</td>
						<td>{{$foraneos->tipo}}</td>
					
					</tr>
    			@endforeach
    		</tbody>
    	</table>

	</div>
	<a href="#"><button class="btn btn-success">Enviar</button>
							<i class="fa fa-pencil-square-o"></i>
						</a>

</div>

@endsection
