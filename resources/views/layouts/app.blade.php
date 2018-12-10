<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--<title>{{ config('app.name', 'Titulaciones') }}</title>-->
    <title>Titulatec</title>
    <!-- Styles -->
    <style>
            html, body {
                height: 100%;
                width: 100%;
                background-image: url('../images/fondo.JPG');
                background-origin: content-box;
                background-attachment: relative;
                background-position: center center;
                min-height: 650px;
                width: 100%;    
                -webkit-background-size: 100%;
                -moz-background-size: 100%;
                -o-background-size: 100%;
                background-size: 100%;
                font-family: 'Roboto', sans-serif;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-repeat: no-repeat;
                background-color: #398393; }
                
                <style >.centrado-porcentual {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                -webkit-transform: translate(-50%, -50%);
            }

</style>

        
    </style>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @if (Auth::guest())
        @else
        @include('layouts.nav')
        @endif


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<!--    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'"></script>
    -->


<script>

  $('#edit').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 
      var nombre = button.data('myname') 
      var carrera = button.data('carrera') 
      var no_control = button.data('noc') 
      var telefono = button.data('telefono') 
      var mail = button.data('mail') 
      var plan_estud = button.data('plan_estud')
      var opcion_titulacion = button.data('opcion_titulacion')  
      var tipo = button.data('tipo')  
      var cat_id = button.data('catid') 
      var modal = $(this)

      modal.find('.modal-body #name').val(nombre);
      modal.find('.modal-body #carrera').val(carrera);
      modal.find('.modal-body #noc').val(no_control);
      modal.find('.modal-body #telefono').val(telefono);
      modal.find('.modal-body #mail').val(mail);
      modal.find('.modal-body #plan_estud').val(plan_estud);      
      modal.find('.modal-body #opcion_titulacion').val(opcion_titulacion);
      modal.find('.modal-body #tipo').val(tipo);
      modal.find('.modal-body #cat_id').val(cat_id);
})
    $('#delete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 

      var fechaid = button.data('fechaid') 
      var modal = $(this)

      modal.find('.modal-body #fechaid').val(fechaid);
})


</script>
</body>
</html>
