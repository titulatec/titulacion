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
<br>
<div class = "centrado-porcentual">
    <div class="row">
        <div class="container col-md-4 col-md-offset-4">
            <div class="panel panel-primary">

                <div class="panel-heading">Registrar Personal</div>
                @include('flash::message')
                
<div class="panel-body">
     <form  id="f_cargar_datos_usuarios" name="f_cargar_datos_usuarios" method="post"  action="cargar_datos_usuario" enctype="multipart/form-data" >                
      
      
       <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 

      <div class="box-body">

     

      <div class="form-group col-xs-12"  >
             <label>Agregar Archivo de Excel </label>
              <input name="archivo" id="archivo" type="file"   class="archivo form-control"  required/><br /><br />
      </div>

     
      <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Cargar Datos</button>
      </div>

       


      </div>

      </form>
  </div>
                
            </div>
        </div>



    </div>
</div>

@endsection