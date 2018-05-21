@extends('layouts.app')

@section('content')


            <nav class="navbar navbar-inverse ">
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
                          <li><a href="#">Agregar Asesores</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
            </nav>


<div class="container centrado-porcentual">
  <div class="panel panel-primary">


    <div class="page-heading">
            <h1>Profesores</h1>
    </div>

  <div class="row">
      <div class="col-md-5">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>RFC</th>
              <th>Nombre Profesor</th>
              <th>Tipo</th>
              <th>Clave Departamento</th>
              <th>Producto</th>
              <th>No de control</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>CUCE12354f</td>
              <td>Elsa Cuevas</td>
              <td>A</td>
              <td>ISC</td>
              <td>Proyecto</td>
              <td>14590544</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-md-7">
      <div class="container col-md-4 col-md-offset-4">
      
             <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::open( array ('url'=> 'nuevabusqueda', 'method'=> 'POST'))!!}
                        {!! Field::text('buscar' , ['label'=>'Asesor'] )!!}
                       
                        {!! Form::submit('Buscar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                    
              </div>
      </div>
      </div>   

  </div>
</div>
@endsection