<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../Views/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<form action="../index.php" method="POST" class="p-4" style="max-width: 400px; margin: auto; background-color: rgba(205, 191, 232, 0.6); border-radius: 8px;">

    <div class="mb-3">
        <label for="nombre" class="form-label"><i class="fas fa-user"></i> Nombre:</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="apellido" class="form-label"><i class="fas fa-user-tag"></i> Apellido:</label>
        <input type="text" name="apellido" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="clave" class="form-label"><i class="fas fa-lock"></i> Contraseña:</label>
        <input type="password" name="clave" class="form-control" required>
    </div>

    <button type="submit"> Registrar</button>
</form>
</body>
</html>
