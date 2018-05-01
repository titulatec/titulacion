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
<div class="container centrado-porcentual" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio de Sesión</div>

                <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::open() !!}
                        {!! Field::text('no_control' , ['label'=>'No. Control'] )!!}
                        {!! Field::password('password' , ['label'=>'Contraseña'] )!!}
                       
                       
                        {!! Form::submit('Acceso', ['class' => 'btn btn-success']) !!}
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection