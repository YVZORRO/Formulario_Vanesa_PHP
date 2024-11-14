<?php
require_once 'Controlers/user_controller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];

    $controller = new UsuarioController();
    $mensaje = $controller->registrar($nombre,$apellido, $email, $clave);

    if ($mensaje) {
        echo "<p>$mensaje</p>";
    }
} else {
    header("Location: http://localhost/Formulario_Vanesa_PHP/Views/registro.php");
}


