<?php 
require_once '../config/conexion.php';

class Editperfil{
    public function __construct(){}
    public function editar($idusuario,$nombre,$apellido,$email,$login){
        $sql = "UPDATE usuario SET nombre='$nombre',apellido='$apellido',email='$email',login='$login'
                WHERE idusuario = '$idusuario'";
        return ejecutarConsulta($sql);
    }
    public function compara($clavehash){
        $sql="SELECT *FROM usuario WHERE password='$clavehash'"; 
        return ejecutarConsulta($sql);  
    }
    public function cambiar($idusuario,$clave){
        $sql = "UPDATE usuario SET password='$clave' WHERE idusuario=$idusuario";
        return ejecutarConsulta($sql);
    }
}

?>