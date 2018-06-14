@extends('layouts.app')

@section('content')

<script type="text/javascript">

function borrar() {
  tab = document.getElementById('tablita');
  for (i=tab.getElementsByTagName('input').length-1; i>=0; i--) {
    chk = tab.getElementsByTagName('input')[i];
    if (chk.checked)
      tab.removeChild(chk.parentNode.parentNode);
  }
}
</script>


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
            
<!--<div>
<table>
<tbody id="tablita">
<tr>
<td>aaa</td><td>aaa</td><td><input type="checkbox" /></td>
<tr>
<tr>
<td>bbb</td><td>bbb</td><td><input type="checkbox" /></td>
<tr>
<tr>
<td>ccc</td><td>ccc</td><td><input type="checkbox" /></td>
<tr>
</tbody>
</table>
<input type="button" value="Borrar" onclick="borrar()" />
</div> -->

<!------------------------.. -->

<div class="tab-content">
@include('flash::message')
<!-- -->
<div id="menu1" class="tab-pane fade">

<div class="container centrado-porcentual">
  <div class="panel panel-primary">
    <div class="page-heading">
            <h1>Proyectos</h1>
    </div>

  <div class="row">
      <div class="col-md-6">
        <table class="table">
          <thead>
            <tr>
              <th>Nombre de Proyecto</th>
              <th>Producto</th>
              <th>Asesor</th>
              <th>Revisor</th>
              <th>Revisor 2</th>
            </tr>
          </thead>
          <tbody>
            
              @foreach( $solicitud as $solicituds)
              <tr>
                <th>{{$solicituds->nombre_proyecto}}</th>
                <th>{{$solicituds->producto}}</th>
                <th>{{$solicituds->asesor}}</th>
                <th>{{$solicituds->revisor1}}</th>
                <th>{{$solicituds->revisor2}}</th>
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>  

      <div class="col-md-2">
      <div class="container col-md-12 col-md-offset-12">
        
          
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
                
                <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::open( array ('url'=> 'residencias_registro', 'method'=> 'POST'))!!}
                        {!! Field::text('no_control' , ['label'=>'Número de control'] )!!}
                        {!! Field::text('nombre_proyecto' , ['label'=>'Nombre del Proyecto'] )!!}
                        {!! Field::text('asesor' , ['label'=>'Asesor'] )!!}
                        {!! Field::text('revisor1' , ['label'=>'Revisor 1'] )!!}
                        {!! Field::text('revisor2' , ['label'=>'Revisor 2'] )!!}
                        {!! Field::text('optitulacion' , ['label'=>'Opción de Titulación'] )!!}
                        {{ Form::label('Producto') }}<br>
                        {{ Form::select('producto', ['Residencias' =>'Residencias', 'Tesis' =>'Tesis', 'Proyecto' =>'Proyecto'], null, ['class' => 'form-control']) }}<br>
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


<!--  -->
<div id="menu3" class="tab-pane fade">
<div class="container centrado-porcentual">
  <div class="panel panel-primary">


    <div class="page-heading">
            <h1>Profesores</h1>
    </div>

    <div class="row">
    <div class="col-md-1">
      <div class="container col-md-3 col-md-offset-1">
      
             <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::open( array ('url'=> 'nuevabusqueda', 'method'=> 'POST'))!!}
                        {!! Field::text('buscar' , ['label'=>'Profesor'] )!!}
                       
                        {!! Form::submit('Buscar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                    
              </div>
      </div>
    </div>   <br>
  </div>

  <div class="row">
      <div class="col-md-7">
        <table class="table">
          <thead>
            <tr>
              <th>RFC</th>
              <th>Nombre Profesor</th>
              <th>Categoría</th>
              <th>Clave Depto</th>
            </tr>
          </thead>
          <tbody>
              @foreach( $profesor as $profesors)
              <tr>
                <th>{{$profesors->RFC}}</th>
                <th>{{$profesors->nombre_profe}}</th>
                <th>{{$profesors->categoria}}</th>
                <th>{{$profesors->cve_depto}}</th>
              </tr>
              @endforeach
            
          </tbody>
        </table>
        
      </div>

      

  </div>
</div>
</div>

<!--  -->
</div>
@endsection