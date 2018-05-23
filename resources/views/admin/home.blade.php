@extends('layouts.app')

@section('content')

<div class="container centrado-porcentual">
    <div class="row">
        <div class="container col-md-4 col-md-offset-4">
            <div class="panel panel-primary">

                <div class="panel-heading">Registrar Personal</div>
                @include('flash::message')
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



    </div>
</div>

@endsection