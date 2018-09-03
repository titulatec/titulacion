@extends('layouts.app')
@section('content')

<div class="container">
  @include('flash::message')
</div>

<div class="container centrado-porcentual">
    <div class="row">
        <div class="container col-md-7 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Registrar Fecha</div>

 {{ Form::open(array('url' => 'registra', 'method' => 'POST'), array('role' => 'form')) }}

  <div class="row">
    <div class="container form-group col-md-6">
      {{ Form::label('full_date', 'Fecha') }}
      {{ Form::text('full_date', null, array('placeholder' => 'FORMATO AAAA-MM-DD', 'class' => 'form-control')) }}
    </div>
    <div class="container form-group col-md-6">
      {{ Form::label('full_time', 'Hora') }}
      {{ Form::text('full_time', null, array('placeholder' => 'FORMATO HH:MM:SS ', 'class' => 'form-control')) }}        
    </div>
  </div>
  <div class="row">
    <div class="container form-group col-md-6">
      {{ Form::label('full_luga', 'Lugar') }}
      {{ Form::text('full_luga', null, array('placeholder' => 'Eficio M', 'class' => 'form-control')) }}
    </div>
  </div> 
  <div class="row">
    <div class="container form-group col-md-6">
      {{ Form::label('full_carre', 'Carrera') }}
      {{ Form::select('full_carre', ['Electronica' =>'Electronica', 'Gestión Empresarial' =>'Gestión Empresarial', 'Industrial' =>'Industrial', 'Sistemas Computacionales' =>'Sistemas Computacionales', 'Tecnologías de la Información y Comunicación' =>'Tecnologías de la Información y Comunicación' ], null, ['class' => 'form-control']) }}
    </div>
  </div> 
  <div class="row">
    <div class="container form-group col-md-6">
      {{ Form::label('full_espa_di', 'Asignar Espacios Disponibles') }}
      {{ Form::text('full_espa_di', null, array('placeholder' => '#', 'class' => 'form-control')) }}
    </div>
  </div> 
  

  {{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-primary')) }} 
   
  
{{ Form::close() }}

<div class="row">
  <div class="form-group col-md-6">
  <a href="{{ action('divisionController@hora_isctics')}}"><button class="btn btn-suc">REGRESAR</button></a></h3></div>
@endsection