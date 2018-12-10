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
        <div class="panel-heading">LISTA DE SOLICITUDES</div>
        <table class="table table-hover table-responsive">
    </div>
    	<thead>
    		<tr>
	    		<th>Id</th>
				<th>Descripcion</th>
				<th>Fecha</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($fechas as $fecha)
			<tr>
				<td>{{$fecha->id}}</td>
				<td>{{$fecha->descripcion}}</td>
				<td><a href="{{ action('divisionController@fora',[$fecha->fecha,$fecha->fecha_fin])}}">{{$fecha->fecha}} - {{$fecha->fecha_fin}}</a></td>
				<td><button class="btn btn-danger" data-fechaid={{$fecha->id}} data-toggle="modal" data-target="#delete">Delete</button></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
	 	Nueva fecha
	</button>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear fecha solicitud</h4>
      </div>
      <form action="{{route('divestudios.store')}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('divestudios.edit')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Guardar</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Confirmación de Eliminar</h4>
      </div>
      <form action="{{route('divestudios.destroy','inicio')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					¿Estás seguro que quieres eliminar esto?
				</p>
	      		<input type="hidden" name="fechaid" id="fechaid" value="">

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancelar</button>
	        <button type="submit" class="btn btn-warning">Si, Eliminar</button>
	      </div>
      </form>
    </div>
  </div>
</div>




@endsection