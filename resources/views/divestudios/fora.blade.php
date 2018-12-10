@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
		<!--<a href="{{ action('divisionController@div_create')}}"><button class="btn btn-success">Alta Foraneos</button></a>-->
		<a href="{{ action('divisionController@inicio')}}"><button class="btn btn-success">Regresar</button></a>


	<!--{!! Form::open( array ('url'=> 'fora', 'method'=> 'GET', 'class' => 'navbar-form navbar-left pull-right', 'roles' => 'search' ))!!}
			<div class="form-group">
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Nombre de usuario']) !!}
		</div>
		<button type="submit" class="btn btn-default">Buscar</button>
		{!! Form::close() !!}-->
	</form>

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
					<th class="col-md-2">Carrera</th>
					<th>Fecha</th>
					<!--<th>Telefono</th>
					<th>Direccion email</th>-->
					<th class="text-center">Plan de Estudios</th>
					<th>Opcion de Titulacion</th>
					<!--<th>Producto</th>
					<th>Tipo</th>-->
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
							<td  class="text-center">{{$foraneos->carrera}}</td>
							<td></td>
							<!--<td>{{$foraneos->telefono}}</td>
							<td>{{$foraneos->mail}}</td>-->
							<td class="text-center">{{$foraneos->plan_estud}}</td>
							<td>{{$foraneos->opcion_titulacion}}</td>
							<!--<td>{{$foraneos->tipo}}</td>
							<td>{{$foraneos->producto}}</td>-->
							<td>
								<!--<a href="{{ action('divisionController@ver_alumno',$foraneos->id)}}"><button class="btn btn-danger">Editar</button></a>-->
								<button class="btn btn-info" data-myname="{{$foraneos->apellido_p}} {{$foraneos->apellido_m}} {{$foraneos->nombre}}" data-carrera="{{$foraneos->carrera}}" data-noc="{{$foraneos->no_control}}" data-mail="{{$foraneos->mail}}" data-telefono="{{$foraneos->telefono}}" data-plan_estud="{{$foraneos->plan_estud}}" data-opcion_titulacion="{{$foraneos->opcion_titulacion}}"  data-tipo="{{$foraneos->tipo}}" data-catid="{{$foraneos->id}}" data-toggle="modal" data-target="#edit">Editar</button>
								@if($foraneos->registrado == "N")
								
									<a href="{{action('divisionController@aprobar',$foraneos->id)}}"><button class="btn btn-success">APROBAR</button></a>
								
								@else
								<a href="#"><button class="btn btn-success" disabled>APROBADO</button></a>
							
							@endif
								
								<!--<input type="checkbox" name="camera_video" value="{{$foraneos->id}}">-->
							</td>
						</tr>
	    			@endforeach
	    		</tbody>

    			</table>
    			<button class="btn btn-success">Enviar</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alumno</h4>
      </div>
      <form action="{{route('divestudios.update','fora')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
	      <div class="modal-body">
	      		<input type="hidden" name="alumno_id" id="cat_id" value="">
				@include('divestudios.form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Guardar</button>
	      </div>
      </form>
    </div>
  </div>
</div>





@endsection
