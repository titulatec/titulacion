@extends('layouts.app')

@section('content')
<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
	<div class="panel panel-primary">
        <div class="panel-heading">SOLICITUDES ENVIADAS</div>
        <table class="table table-hover table-responsive">
    </div>
    	<thead>
    		<tr>
	    		<th>Id</th>
	    		<th>Nombre de Alumno</th>
	    		<th>No. Alumno</th>
				<th>Constancia Ini/Term</th>
				<th>Cred. Cultural</th>
				<th>Cred. Deport</th>
				<th>Cred. Tutorias</th>
				<th>Cred. Congreso</th>
				<th>Cred. Otros</th>
				<th>Lib. Servicio Social</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="checkbox" name="camera_video" value=""></td>
				<td><input type="checkbox" name="camera_video" value=""></td>
				<td><input type="checkbox" name="camera_video" value=""></td>
				<td><input type="checkbox" name="camera_video" value=""></td>
				<td><input type="checkbox" name="camera_video" value=""></td>
				<td><input type="checkbox" name="camera_video" value=""></td>
				<td><input type="checkbox" name="camera_video" value=""></td>
			</tr>
		</tbody>
	</table>
	</div>
</div>



@endsection