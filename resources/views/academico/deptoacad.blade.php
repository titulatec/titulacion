@extends('layouts.app')

@section('content')

<script type="text/javascript">

/*function borrar() {
  tab = document.getElementById('tablita');
  for (i=tab.getElementsByTagName('input').length-1; i>=0; i--) {
    chk = tab.getElementsByTagName('input')[i];
    if (chk.checked)
      tab.removeChild(chk.parentNode.parentNode);
  }
}*/
function abrir() {
      
      window.open("http://www.byspel.com","byspel","width=1200,height=750,menubar=no");
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
              <tr data-id="{{$solicituds->nombre_proyecto}}">
                <td>{{$solicituds->nombre_proyecto}}</td>
                <td>{{$solicituds->producto}}</td>
                <td>{{$solicituds->asesor}}</td>
                <td>{{$solicituds->revisor1}}</td>
                <td>{{$solicituds->revisor2}}</td>
                <td>
                  <a href="" class="bnt-primary">Asignar asesores
                    <i class="fa fa-pencil-square-o"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>  
      <!-------------------------------------->
      <div class="col-md-6">
        <div id="demo" class="collapse">

        </div>
      </div> 

<!--      -->
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

    <!--<div class="row">
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
  </div> -->

  <div class="row">
      <div class="col-md-7">
        <table class="table">
          <thead>
            <tr>
              <th>RFC</th>
              <th>Nombre Profesor</th>
              <th>Categoría</th>
              <th>Clave Depto</th>
              <th><th>
            </tr>
          </thead>
          <tbody>
              @foreach( $profesor as $profesors)
              <tr>
                <td>{{$profesors->RFC}}</td>
                <td>
                  <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1">{{$profesors->nombre_profe}}</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                      <ul class="list-group">
                        <table class="table">
                        <thead>
                          <li class="list-group-item"><tr>
                            <th>Nombre de Proyecto</th>
                            <th>Producto</th>
                            <th>Nombre</th>
                          </tr></li>
                        </thead>
                        <tbody>
                          
                            @foreach( $consulta as $consultas)
                            <li class="list-group-item"><tr data-id="{{$consultas->nombre_profe}}">
                              <th>{{$consultas->nombre_proyecto}}</th>
                              <th>{{$consultas->producto}}</th>
                              <th>{{$consultas->nombre}}</th>
                              <th>{{$consultas->apellido_p}}</th>
                              <th>{{$consultas->apellido_m}}</th>
                            @endforeach
    
                        </tbody>
                      </table>
                      </ul>
                    </div>
                  </div>
                  </div>
                </td>
                <td>{{$profesors->categoria}}</td>
                <td>{{$profesors->cve_depto}}</td>
                <td>
                  <a class="btn btn-danger btn-xs" href="{{ route('profes/destroy',['id' => $profesors->id] )}}" >Delete</a>
                </td>
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


@section('scripts')

<script>
  $(document).ready(function(){
    $('.bnt-primary').click(function(){
        alert("boton llamado");
    });
    
  });
</script>

@endsection
