@extends('layouts.app')

@section('content')

<nav class="navhar navbar-default">
    <div class="container">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="bs-example-navbar-collapse-1" aria-expanded="false">
    			<span class="sr-only">Toggle navigation</span>
            	<span class="ico-bar"></span>
            	<span class="ico-bar"></span>
            	<span class="ico-bar"></span>
        	</button>
        	<a class="navbar-brand" href="{{ action('divisionController@index')}}">Division de Estudios</a>
        </div>

		<div class="collapse navbar-collapse" id="bs-example-nabar-collage-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inicio</span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ action('divisionController@inicio')}}">Todas las Solictudes</a></li>
						<li><a href="{{ action('divisionController@status')}}">Status</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Horario</a>
					<ul class="dropdown-menu">
						<li><a href="{{ action('divisionController@hora_isctics')}}">Horarios de titulacion</a></li>
						<li><a href="{{ action('divisionController@all_alumnos')}}">Alumnos a titular</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proximos a titularse</a>
					<ul class="dropdown-menu">
						<li><a href="{{ action('divisionController@div_formulario')}}">Listado</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<br><br>

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-primary">
        <div class="panel-heading">SOLICITUDES ENVIADAS</div>
        <table class="table table-hover table-responsive">
    </div>
    	<thead>
    		<tr>
	    		<th>Id</th>
				<th>Descripcion</th>
				<th>Fecha</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($fechas as $fecha)
			<tr>
				<td>{{$fecha->id}}</td>
				<td>{{$fecha->descripcion}}</td>
				<td><a href="#">{{$fecha->fecha}} - {{$fecha->fecha_fin}}</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>



@endsection