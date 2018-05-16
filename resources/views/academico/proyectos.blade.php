@extends('layouts.app')

@section('content')

<div class="panel panel-primary">

            <nav class="navbar navbar-default">
                  <div class="navbar-header">
                    <div class="inner">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    </button>
                    <a class="navbar-brand" href="{{ action('AcadControler@index')}}">Departamento Académico</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
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



<div class="container centrado-porcentual">
  <div class="panel panel-primary">


    <div class="page-heading">
            <h1>Proyectos</h1>
    </div>

  <div class="row">
      <div class="col-md-5">
        <table class="table">
          <thead>
            <tr>
              <th>id_proyecto</th>
              <th>NombreProyecto</th>
              <th>Numero de control</th>
              <th>ClavePlan</th>
              <th>Producto</th>
              <th>Clave Carrera</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Titulaciones</td>
              <td>14590544</td>
              <td>2010</td>
              <td>Proyecto</td>
              <td>ISC</td>
            </tr>
          </tbody>
        </table>
      </div>  

      <div class="col-md-7">
      <div class="container col-md-4 col-md-offset-4">
        
          
              @include('flash::message')
             <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::open( array ('url'=> 'nuevoreg', 'method'=> 'POST'))!!}
                        {!! Field::text('asesor' , ['label'=>'Asesor'] )!!}
                        {!! Field::text('rev1' , ['label'=>'Revisor 1'] )!!}
                        {!! Field::text('rev2' , ['label'=>'Revisor 2'] )!!}
                       
                        {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                    
              </div>
      </div>
      </div>  
    </div>
  </div>
</div>

@endsection