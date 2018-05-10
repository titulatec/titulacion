@extends('layouts.app')
<style >
    .centrado-porcentual {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                -webkit-transform: translate(-50%, -50%);
            }

</style>
@section('content')
<div class="container centrado-porcentual">
    <div class="row">
        <div class="container col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Registro para aspirantes</div>
                @include('flash::message')
                <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::open() !!}
                        {!! Field::text('no_control' , ['label'=>'No. Control'] )!!}
                        {!! Field::text('nombre' , ['label'=>'Nombre'] )!!}
                        {!! Field::email('email' , ['label'=>'Email'] )!!}
                        {!! Field::password('password' , ['label'=>'Contraseña'] )!!}
                        {!! Field::password('password_confirmation' , ['label'=>'Confirmar contraseña'] )!!}
                       
                        {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                    {!! Form::open( array ('url'=> '/', 'method'=> 'GET'))!!}
                    {!! Form::submit('Regresar', ['class' => 'btn btn-danger pull-right']) !!}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
