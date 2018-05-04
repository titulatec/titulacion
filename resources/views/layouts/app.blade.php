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
</body>
</html>
