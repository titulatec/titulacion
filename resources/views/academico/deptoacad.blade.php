@extends('layouts.app')

@section('content')

<div class="container">

            <nav class="navbar navbar-default">
                  <div class="navbar-header">
                    <div class="inner">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    </button>
                    <a class="navbar-brand" href="#">Departamento Académico</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          
                          <li><a href="{{ action('AcadControler@proyectos')}}">Ver Proyectos</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profesores <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Lista de Profesores</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  </div>
            </nav>
</div>
@endsection