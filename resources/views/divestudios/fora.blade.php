@extends('layouts.app')

@section('content')

<h1>Crear registro Foraneo</h1>

<div class="container centrado-porcentual">
 
 {{ Form::open(array('url' => 'registro', 'method' => 'POST'), array('role' => 'form')) }}

  <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('nc', 'NC') }}
      {{ Form::text('nc', null, array('placeholder' => 'Introduce tu NC', 'class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('full_name', 'Nombre completo') }}
      {{ Form::text('full_name', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
    </div>
  </div>
  <div class="row">
  	<div class="form-group col-md-4">
      {{ Form::label('full_name', 'Nombre completo') }}
      {{ Form::text('full_name', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('full_name', 'Carrera') }}
    	<select name="role" id="role" class="form-control">
      	<option>ISC</option>
      	<option>TIC'S</option>
      	<option>IGE</option>
      	<option>INDUSTRIAL</option>
    	</select>
 	 </div>      
    </div>
   <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('full_name', 'Plan de Estudios') }}
    <select name="role" id="role" class="form-control">
      	<option>----</option>
      	<option>---</option>
      	<option>---</option>
      	<option>---</option>
    	</select>
  	</div>
  	<<div class="form-group col-md-4">
      {{ Form::label('full_name', 'Opcion de Titulacion') }}
    <select name="role" id="role" class="form-control">
      <option>Integral</option>
      <option>Examen</option>
      <option>Tesis</option>
      <option>Otros</option>
    	</select>
  	</div>
  	</div>
	<div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('producto', 'Producto') }}
      {{ Form::text('producto', null, array('placeholder' => 'Introduce el Producto', 'class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('email', 'Direccion e-mail') }}
      {{ Form::text('email', null, array('placeholder' => 'Introduce tu email', 'class' => 'form-control')) }}        
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('telefono', 'Telefono') }}
      {{ Form::text('telefono', null, array('placeholder' => 'Introduce tu Telefino', 'class' => 'form-control')) }}
    </div>
  <<div class="form-group col-md-4">
      {{ Form::label('full_name', 'Tipo') }}
    <select name="role" id="role" class="form-control">
      <option>I</option>
    	</select>
  	</div>
  	</div>
  {{ Form::button('Crear usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
  
{{ Form::close() }}

@endsection