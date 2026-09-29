<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <!-- Cargamos Bootstrap directamente desde CDN para facilitar la prueba -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="container mt-4">
        <h1 class="text-center bg-danger text-white p-2">Formulario</h1>
        
        <!-- Apuntamos al procesador de Laravel y agregamos método POST -->
        <form action="/procesar" method="POST">
            @csrf <!-- IMPORTANTE: Sin esto, Laravel bloquea el formulario por seguridad -->
            
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="correo" placeholder="name@example.com" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingName" name="nombre" placeholder="Name" required>
                <label for="floatingName">Name</label>
            </div>
            <div class="mb-3">
                <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </body>
</html>