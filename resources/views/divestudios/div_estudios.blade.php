@extends('layouts.app')

@section('content')

<h1>Si entro a division de estudios</h1>]

<div class="collapse navbar-collapse" id="bs-example-nabar-collage-1">
	<ul class="nav navbar-nav">
		

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
			aria-haspopup="true" aria-expanded="false">MENU <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Solicutudes</a></li>
				<li><<a href="#">Residencias</a></li>
				</li>
				<li><<a href="#">Solictud Foraneos</a></li>
			</ul>
		</li>
	</ul>
</div>
</div>
</nav>


<div class="container centrado-porcentual">
    <div class="row">
        <div class="container col-md-4 col-md-offset-4">
            <div class="panel panel-primary">

                <div class="panel-heading">Registrar Foraneos</div>
                @include('flash::message')

                <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::open( array ('url'=> 'registro', 'method'=> 'POST'))!!}
                        {!! Field::text('nc' , ['label'=>'NC'] )!!}
                        {!! Field::text('name' , ['label'=>'Nombre'] )!!}
                        {!! Field::text('carrera' , ['label'=>'Carrera'] )!!}
                        {!! Field::text('optitulacion' , ['label'=>'Opciontitulacion'] )!!}
                        {!! Field::email('solicitud' , ['label'=>'Solicitud'] )!!}
                        {!! Field::text('tel' , ['label'=>'Tel'] )!!}



                        {!! Field::password('carrera' , ['label'=>'Carrera'] )!!}
                        {!! Field::password('tipo' , ['label'=>'Tipo'] )!!}
                       
                        {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>



    </div>
</div>

@endsection