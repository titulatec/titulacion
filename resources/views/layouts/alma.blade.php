@extends('layouts.app')

@section('content')<br><br><br>
    <div class="container col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
                <div class="panel-heading">Listado de alumnos</div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No. Control</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($products as $producto)
            <tr>
                <td>{{ $producto->no_control }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->apellido_p }}</td>
                <td>{{ $producto->apellido_m}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <p>
        <a href="{{ route('alma-alumnos.pdf') }}" class="btn btn-sm btn-primary">
            Descargar productos en PDF
        </a>
    </p>

</div>

</div>




@endsection