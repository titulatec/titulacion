@extends('layouts.app')

@section('content')
<style >
.centrado-porcentual {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                -webkit-transform: translate(-50%, -50%);
            }
</style>
<div class="container centrado-porcentual">
    <div class="row">
        <div class="container col-md-10 col-md-offset-1">
            
            <div class="panel panel-primary">
                <div class="panel-heading">Proceso de Titulación</div>

                 @include('flash::message')
                <div class="panel-body">
                    {{ csrf_field() }}
                    
                    <fieldset enabled>
                    {!! Form::open( array ('url'=> 'registrar_proyecto', 'method'=> 'POST', 'class'=>'form-inline'))!!}
                        
                        {!! Field::text('nocontrol' , '14590571',['label'=>'No. Control'] )!!}
                        {!! Field::text('nombre' , 'Jose Jaime Rodriguez Pedraza', ['label'=>'Nombre'] )!!}
                        {!! Field::text('carrera' , 'Ing Sistemas', ['label'=>'Carrera'] )!!}

                        <h5>Producto</h5>
                        <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Seleccione una opción
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            @foreach($productos as $category)
                            <li><a href="{{$category->id}}">{{$category->producto}}</a></li>
                            @endforeach
                        </ul>
                        </div>
                        {!! Field::text('nombre_proyecto' , ['label'=>'Nombre del Proyecto'] )!!}
                        {!! Field::text('asesor' , ['label'=>'Asesor'] )!!}
                        {!! Field::text('revisor1' , ['label'=>'Revisor 1'] )!!}
                        {!! Field::text('revisor2' , ['label'=>'Revisor 2'] )!!}
                        
                        {!! Form::submit('Registrar Proyecto', ['class' => 'btn btn-success']) !!}
                    {!! Form::close() !!}
                </fieldset>
            </div>
        </div>
    </div>
</div>
@endsection