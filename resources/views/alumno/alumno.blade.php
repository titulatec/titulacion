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

<div class="container">
      @include('flash::message')
</div>

<div class="container centrado-porcentual">
    <div class="row">
        <div class="container col-md-10 col-md-offset-1">
            
            <div class="panel panel-primary">
                <div class="panel-heading">Proceso de Titulación</div>

                 @include('flash::message')
                <div class="panel-body" disable>
                    {{ csrf_field() }}
                    
                    <fieldset {{$estado}}>
                    {!! Form::open( array ('url'=> 'registrar_proyecto', 'method'=> 'POST', 'class'=>'form-inline'))!!}
                    
                    <fieldset enabled>  
                    <div class="row">
                        <div class="container form-group col-md-3">
                        {!! Field::text('nocontrol',$alumno->no_control,['label'=>'No. Control'] )!!}
                        </div>
                        <div class="container form-group col-md-3">
                        {!! Field::text('nombre' ,$alumno->nombre.' '.$alumno->apellido_p.' '.$alumno->apellido_m, ['label'=>'Nombre'], array('class'=>'col-xs-5') )!!}
                    
                        </div>
                        <div class="container form-group col-md-3">
                        {!! Field::text('carrera' , $alumno->carrera,['label'=>'Carrera'] )!!}
                        </div>

                        <fieldset enabled>
                        <div class="container form-group col-md-3">
                        {!! Field::text('tipo' , $alumno->tipo,['label'=>'Tipo'] )!!}
                        </div>
                        </fieldset>

                    </div>
                    </fieldset>
                    <div class="row">

                         <div class="container form-group col-md-3">
                        {!! Field::text('opcion','Integral', ['label'=>'Opcion de Titulación'] )!!}
                        </div>

                        <div class="container form-group col-md-3">
                        {{ Form::label('full_optitulacion', 'Producto') }}<br>
                        {{ Form::select('producto', ['Examen' =>'Examen', 'Tesis' =>'Tesis', 'Residencias' =>'Residencias', 'Otros' =>'Otros' ], null, ['class' => 'form-control']) }}
                        </div>
                        <div class="container form-group col-md-3">
                        {!! Field::text('nombre_proyecto' , ['label'=>'Nombre del Proyecto'] )!!}
                        </div>
                        <div class="container form-group col-md-3">
                        {!! Field::text('plan' , ['label'=>'Plan de estudios'] )!!}
                        </div>
            
                    </div>
                    <fieldset disabled>
                    <div class="row">
                        <div class="container form-group col-md-4">
                        {!! Field::text('asesor' , ['label'=>'Asesor'] )!!}
                        </div>
                        <div class="container form-group col-md-4">
                        {!! Field::text('revisor1' , ['label'=>'Revisor 1'] )!!}
                        </div>
                        <div class="container form-group col-md-4">
                        {!! Field::text('revisor2' , ['label'=>'Revisor 2'] )!!}
                        </div>
                    </div>
                    </fieldset>
                    
                    <div class="row">
                        <div class="container form-group col-md-4"><br><br>
                        {!! Form::submit('Registrar Proyecto', ['class' => 'btn btn-success']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </fieldset>
            </div>
        </div>
    </div>
</div>
@endsection