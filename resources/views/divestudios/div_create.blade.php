@extends('layouts.app')
@section('content')



<div class="container centrado-porcentual">
    <div class="row">
        <div class="container col-md-7 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Registro Foraneo</div>

 {{ Form::open(array('url' => 'registro', 'method' => 'POST'), array('role' => 'form')) }}

  <div class="row">
    <div class="container form-group col-md-6">
      {{ Form::label('full_nc', 'No de Control') }}
      {{ Form::text('full_nc', null, array('placeholder' => 'Introduce tu NC', 'class' => 'form-control')) }}
    </div>
    <div class="container form-group col-md-6">
      {{ Form::label('full_name', 'Nombre completo') }}
      {{ Form::text('full_name', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
    </div>
  </div>
  <div class="row">
    <div class="container form-group col-md-6">
      {{ Form::label('full_apellido_p', 'Apeliido Paterno') }}
      {{ Form::text('full_apellido_p', null, array('placeholder' => 'Introduce tu Apeliido paterno', 'class' => 'form-control')) }}
    </div>
    <div class="container form-group col-md-6">
      {{ Form::label('full_apellido_m', 'Apellido Materno') }}
      {{ Form::text('full_apellido_m', null, array('placeholder' => 'Introduce tu apellido materno', 'class' => 'form-control')) }}        
    </div>
  </div>
  <div class="row">
    <div class="container form-group col-md-6">
      {{ Form::label('full_carrera', 'Carrera') }}
      <select name="role" id="role" class="form-control">
        <option>ISC</option>
        <option>TIC'S</option>
        <option>IGE</option>
        <option>INDUSTRIAL</option>
      </select>
    </div>
    <div class="container form-group col-md-6">
      {{ Form::label('full_tel', 'Telefono') }}
      {{ Form::text('full_tel', null, array('placeholder' => 'Introduce tu telefono', 'class' => 'form-control')) }}        
    </div>
  </div>
    <div class="row">
    <div class="container form-group col-md-6">
      {{ Form::label('full_email', 'Direccion e-mail') }}
      {{ Form::text('full_email', null, array('placeholder' => 'Introduce tu direccion e-mail', 'class' => 'form-control')) }}
    </div>
    <div class="container form-group col-md-6">
      {{ Form::label('full_planest', 'Plan de Estudios') }}
      {{ Form::text('full_planest', null, array('placeholder' => 'Introduce tu Plan de Estudios', 'class' => 'form-control')) }}        
    </div>
  </div>
  <div class="row">
    <div class="container form-group col-md-6">
      {{ Form::label('full_optitulacion', 'Opcion de Titulacion') }}
    <select name="role" id="role" class="form-control">
      <option>Integral</option>
      <option>Examen</option>
      <option>Tesis</option>
      <option>Otros</option>
      </select>
    </div>
    <div class="container form-group col-md-6">
      {{ Form::label('full_producto', 'Producto') }}
      {{ Form::text('full_producto', null, array('placeholder' => 'Introduce el producto', 'class' => 'form-control')) }}        
    </div>
  </div>
  <div class="row">
  <<div class="form-group col-md-6">
      {{ Form::label('full_name', 'Tipo') }}
    <select name="role" id="role" class="form-control">
      <option>I</option>
    	</select>
  	</div>
  	</div>

  {{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
  
{{ Form::close() }}


@endsection