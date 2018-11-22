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
	<br><br>

    <div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
    <div class="panel panel-primary">
                <div class="panel-heading">LISTA DE ALUMNOS</div>

    <table class="table table-hover table-striped">

</div>

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
				<th>Opciones</th>
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
						<a href="#"><button class="btn btn-success">APROBAR</button>
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
