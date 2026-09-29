<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset = "UTF-8">
        <title>resultados</title>
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class = "container mt-5">
        <div class = "alert alert-success text-center">
            Registro recibido correctamente.
        </div>
        <h2>Lista de los resultados</h2>
        <hr>
        @foreach ($usuarios as $row)
            <p>
                <strong>ID:</strong> {{ $row->id }} <br>
                <strong>Nombre:</strong> {{ $row->nombre }} <br>
                <strong>Email:</strong> {{ $row->correo }} <br>
                <strong>Fecha de nacimiento:</strong> {{ $row->fechanac}}
            </p>
            <br>
        @endforeach
        <a href = "/" class="btn btn-secondary">Volver al formulario</a>
    </body>
</html>