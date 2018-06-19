<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <title>Laravel y data en PDF | Rimorsoft Online</title>

    </head>
    <body>
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
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->no_control }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->apellido_p }}</td>
                <td>{{ $alumno->apellido_m}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </body>
</html>