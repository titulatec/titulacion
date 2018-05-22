@extends('layouts.app')

@section('content')


            <nav class="navbar navbar-inverse ">
                    <div class="inner">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    </button>
                    <a class="navbar-brand" href="#">Servicios escolares</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">complementarios <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          
                          <li><a href="{{ action('AcadControler@complementarios')}}">Ver creditos complementarios</a></li>
                          <li><a href="#">solicitar archivo creditos complementarios</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
            </nav>


<div class="container centrado-porcentual">
  <div class="panel panel-primary">


    <div class="page-heading">
            <h1>creditos</h1>
    </div>

  <div class="row">
      <div class="col-md-5">
        <table class="table">
          <thead>
            <tr>
              <th>Numero de control</th>
              <th>Cred_cultural</th>
              <th>Cred_deportipo</th>
              <th>Tutorias</th>
              <th>Congreso</th>
              <th>Otro</th>
              <th>Leng_extranjera</th>
              <th>Serv_social</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>15590083</td>
              <td>1 Credito cultural</td>
              <td>1 Credito deportivo</td>
              <td>2 Tutorias</td>
              <td>1 Congreso</td>
              <td>1 Ciencias basicas</td>
              <td> Acreditacion lengua extranjera</td>
              <td> Acreditacion seervicio social</td>
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