@extends('layouts.app')

@section('content')

<h1>Crear registro Foraneo</h1>

<div class="container centrado-porcentual">
    <div class="row">
        <div class="container col-md-4 col-md-offset-4">
            <div class="panel panel-primary">

                <div class="panel-heading">Registrar Foraneos</div>
                @include('flash::message')

                <div class="panel-body">
                    {{ csrf_field() }}
                    {!! Form::open( array ('url'=> 'registro', 'method'=> 'POST'))!!}
                        {!! Field::text('nc' , ['label'=>'NC'] )!!}
                        {!! Field::text('name' , ['label'=>'Nombre'] )!!}
                        {!! Field::text('carrera' , ['label'=>'Carrera'] )!!}
                        {!! Field::text('optitulacion' , ['label'=>'Opcion Titulacion'] )!!}
                        {!! Field::text('producto' , ['label'=>'Producto'] )!!}
                        {!! Field::text('tel' , ['label'=>'Tel'] )!!}
                        {!! Field::password('carrera' , ['label'=>'Plan de Estudios'] )!!}
                        {!! Field::password('tipo' , ['label'=>'Tipo'] )!!}
                       
                        {!! Form::submit('Registrar', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>

    </div>
</div>


@endsection