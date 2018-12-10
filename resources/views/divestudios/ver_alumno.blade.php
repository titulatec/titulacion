@extends('layouts.app')

@section('content')

<div class="container centrado-porcentual">
		<div class="page-heading">
			<h3>Alumno: {{$alumno->nombre}}</h3>
		</div>
		<div class="row">
			<div class="col-md-4">
				<form method="post" action="{{action('divisionController@update', $id)}}" >
					{{csrf_field()}}
					<input name="_method" type="hidden" value="post">
					<div class="form-group">
						<input type="hidden" value="{{csrf_token()}}" name="_token" />
						<label for="nombre">Nombre completo</label>
		            	<input type="text" class="form-control" name="nombre" value='{{$alumno->apellido_p}} {{$alumno->apellido_m}} {{$alumno->nombre}} ' disabled/>
		        	</div>
		        	<div class="form-group">
						<label for="no_control">No Control</label>
		            	<input type="text" class="form-control" name="no_control" value='{{$alumno->no_control}}' disabled/>
		        	</div>
		        	<div class="form-group">
						<label for="telefono">Telefono</label>
		            	<input type="text" class="form-control" name="no_control" value='{{$alumno->telefono}}' disabled/>
		        	</div>
		        	<div class="form-group">
						<label for="mail">E-mail@</label>
		            	<input type="text" class="form-control" name="mail" value='{{$alumno->mail}}' disabled/>
		        	</div>
		        	<div class="form-group">
						<label for="tipo">Tipo</label>
		            	<input type="text" class="form-control" name="tipo" value='{{$alumno->tipo}}' disabled/>
		        	</div>

		        	<div class="form-group">
		            	<label for="plan_estud">Plan de Estudios</label>
		           		<textarea cols="2" rows="1" class="form-control" name="plan_estud">{{$alumno->plan_estud}}</textarea>
		        	</div>
		        
		        	<button type="submit" class="btn btn-primary">Update</button>
		        </div>
		        </form>
		    </div>
		</div>
	</div>
</div>

@endsection
