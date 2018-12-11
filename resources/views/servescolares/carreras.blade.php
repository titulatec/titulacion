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
        	<a class="navbar-brand" href="{{ action('divisionController@index')}}">Servicios Escolares</a>
        </div>

		<div class="collapse navbar-collapse" id="bs-example-nabar-collage-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inicio</a>
					<ul class="dropdown-menu">
						<li><a href="{{ action('EscolaresController@carreras')}}">Solictudes</a></li>
						<li><a href="#">Residencias</a></li></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<br><br>

<div class="col-md-3 col-md-offset-4">
	<div class="panel panel-primary">
        <div class="panel-heading text-center">CARRERAS</div>
        <table class="table table-hover table-responsive table-striped table-condensed">
    </div>
    	<thead>
    		<tr>
				<th class="text-center"></th>				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="text-center"><a href="{{ action('EscolaresController@industrial')}}">Ing.Industrial</a></td>
			</tr>
			<tr>
				<td class="text-center"><a href="#">Ing.Gestion</a></td>
			</tr>
			<tr>
				<td class="text-center"><a href="#">Ing. Sistemas</a></td>
			</tr>
			<tr>
				<td class="text-center"><a href="#">Ing. Tecnologias</a></td>
			</tr>
			<tr>
				<td class="text-center"><a href="#">Ing. Electronica</a></td>
			</tr>
		</tbody>
	</table>
	</div>
</div>

@endsection