<?php
require_once "../config/conexion.php";

class Contacto
{
    public function __construct()
    {
    }

    public function enviar($nombre, $correo, $telefono, $comentario)
    {
        $sql = "INSERT INTO contacto(nombre, correo, telefono, comentario) VALUES('$nombre', '$correo', '$telefono', '$comentario')";
        return ejecutarConsulta($sql);
    }
}
