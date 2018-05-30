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
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
			aria-haspopup="true" aria-expanded="false">MENU <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="{{ action('divisionController@index')}}">Solicutudes</a></li>
				<li><<a href="#">Residencias</a></li></li>
				<li><<a href="{{ action('divisionController@fora')}}">Solictud Foraneos</a></li>
                <li><<a href="{{ action('divisionController@div_interno')}}">Solictud Internos</a></li>
			</ul>
		</li>
	</ul>
</div>
</div>
</nav>


@endsection