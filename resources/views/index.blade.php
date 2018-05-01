@extends('layouts.app')
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                 color: #fff;
            }

            .centrado-porcentual {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                -webkit-transform: translate(-50%, -50%);
            }
        </style>
@section('content')
<div class="centrado-porcentual">
<div class="row">
     <div >
        
        <div class="title m-b-md">
             Titulaciones ITSJR
        </div>

     </div>
     <div class=" text-center">
        <div class="btn-group btn-group-lg ">
          
          @if (Auth::guest())
          <a href="{{ route('register') }}" class="btn btn-default">Aspirante</a>

          <a href="{{ route('login') }}" class="btn btn-default">Alumno</a>

          
         <a href="{{ route('login') }}" class="btn btn-default">Personal</a>
         @else
         @endif

        </div>

     </div>

</div>
</div>

@endsection