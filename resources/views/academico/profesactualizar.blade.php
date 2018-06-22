@extends('layouts.app')
@section('content')
 <nav class="navbar navbar-inverse ">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    </button>
                    <a class="navbar-brand" href="#">Departamento Académico</a>
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          
                          <li><a data-toggle="tab" href="#menu1">Ver Proyectos</a></li>
                          <li><a data-toggle="tab" href="#menu2">Residencias</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profesores <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a data-toggle="tab" href="#menu3">Lista de Profesores</a></li>
                          <li><a href="#">Agregar Asesores</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
</nav>


<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 {!! Form::model($profesor,['route' => 'profesor.update', 'method' => 'put', 'novalidate']) !!}
            
                {!! Form::hidden('id', $profesor->id) !!}
            
                <div class="form-group">
                      {!! Form::label('nombrep', 'Nombre') !!}
                      {!! Form::text('nombre_profe', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
 
                  <div class="form-group">
                      {!! Form::label('proyecto', 'Descripcion') !!}
                      {!! Form::text('nombre_proyecto', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
            
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
 </div>
 </div>
</div>
@endsection