<?php

require_once 'conexion.php';

class Usuario extends Conexion
{
    public function registrarUsuario($nombre,$apellido, $email, $clave)
    {
        $sql = "INSERT INTO usuarios (nombre, apellido, email, clave) VALUES (:nombre, :apellido, :email, :clave)";
        $stmt = $this->conn->prepare($sql);

        // Encriptamos la clave
        $claveEncriptada = password_hash($clave, PASSWORD_DEFAULT);

        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':clave', $claveEncriptada);
        $stmt->execute();
    }

    public function usuarioExiste($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}

