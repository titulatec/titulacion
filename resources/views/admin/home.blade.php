@extends('layouts.app')

@section('content')

<div class="container">
      @include('flash::message')
</div>

<div class="container centrado-porcentual">
    <div class="row">

        <div class="container col-md-4 col-md-offset-1">
            <div class="panel panel-primary">

                <div class="panel-heading">Registrar Personal</div>
                
                <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::open( array ('url'=> 'admin_registro', 'method'=> 'POST'))!!}
                        {!! Field::text('name' , ['label'=>'Nombre'] )!!}
                        {!! Field::email('email' , ['label'=>'E-Mail'] )!!}
                        {!! Field::text('rol' , ['label'=>'Rol'] )!!}


                        {!! Field::password('password' , ['label'=>'Contraseña'] )!!}
                        {!! Field::password('password_confirmation' , ['label'=>'Confirmar contraseña'] )!!}
                       
                        {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>


        <div class="container col-md-4 col-md-offset-1">
            <div class="panel panel-primary">

                <div class="panel-heading">Registrar Alumno</div>
                
                <div class="panel-body">
                    {{ csrf_field() }}
                    {{ Form::open(array('action' => 'AdminController@agregar_alumnos')) }}
                        {!! Field::text('nocontrol' , ['label'=>'No. Control'] )!!}
                        {!! Field::text('nombre' , ['label'=>'Nombre'] )!!}
                        {!! Field::text('paterno' , ['label'=>'Apellido Paterno'] )!!}
                        {!! Field::text('materno' , ['label'=>'Apellido Materno'] )!!}
                        {{ Form::label('Carrera') }}<br>
                        {{ Form::select('carrera', ['Electronica' =>'Electronica', 'Gestión Empresarial' =>'Gestión Empresarial', 'Industrial' =>'Industrial', 'Sistemas Computacionales' =>'Sistemas Computacionales', 'Tecnologías de la Información y Comunicación' =>'Tecnologías de la Información y Comunicación' ], null, ['class' => 'form-control']) }}
                        <br>
                        {!! Field::text('telefono' , ['label'=>'Telefono'] )!!}
                        {!! Field::email('email' , ['label'=>'E-Mail'] )!!}
                        {{ Form::select('tipo', ['Interno', 'Foráneo'], null, ['class' => 'form-control']) }}
                        <br>
                        {!! Field::text('plan' , ['label'=>'Plan de Estudios'] )!!}
                        
                        {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>



    </div>
</div>

@endsection