<?php

require_once(__DIR__ . '/../Models/usuario.php');


class UsuarioController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Usuario();
    }

    public function registrar($nombre,$apellido, $email, $clave)
    {
        if ($this->modelo->usuarioExiste($email)) {
            return "El usuario ya está registrado.";
        } else {
            $this->modelo->registrarUsuario($nombre,$apellido, $email, $clave);
            header("Location: http://localhost/Formulario_Vanesa_PHP/Views/Panel.php");
            exit;
        }
    }
}

