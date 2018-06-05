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
                          <li><a href="{{ action('AcadControler@profesores')}}">Lista de Profesores</a></li>
                          <li><a href="#">Agregar Asesores</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
            </nav>

<!------------------------.. -->

<div class="tab-content">

<!-- -->
<div id="menu1" class="tab-pane fade">

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
</div>
<!-- -->

<!--   -->
<div id="menu2" class="tab-pane fade">
<div class="container centrado-porcentual">
    <div class="row">
        <div class="container col-md-4 col-md-offset-4">
            <div class="panel panel-primary">

                <div class="panel-heading">Registrar Residencias</div>
                @include('flash::message')
                <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::open( array ('url'=> 'residencias_registro', 'method'=> 'POST'))!!}
                        {!! Field::text('no_control' , ['label'=>'Número de control'] )!!}
                        {!! Field::text('nombre_proyecto' , ['label'=>'Nombre del Proyecto'] )!!}
                        {!! Field::text('asesor' , ['label'=>'Asesor'] )!!}
                        {!! Field::text('revisor1' , ['label'=>'Revisor 1'] )!!}
                        {!! Field::text('arevisor2' , ['label'=>'Revisor 2'] )!!}
                        {!! Field::text('optitulacion' , ['label'=>'Opción de Titulación'] )!!}
                        {!! Field::text('Producto' , ['label'=>'Producto'] )!!}
                        {!! Field::text('status' , ['label'=>'Estado'] )!!}
                       
                        {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--  -->

</div>
@endsection