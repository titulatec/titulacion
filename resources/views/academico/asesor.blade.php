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
                  </div>
            </nav>
</div>


<div class="container centrado-porcentual">
  <div class="panel panel-primary">


    <div class="page-heading">
            <h1>Mis Proyectos</h1>
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

    </div>
  </div>
</div>
@endsection