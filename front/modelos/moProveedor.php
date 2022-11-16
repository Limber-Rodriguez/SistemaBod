<?php
    require_once '../config/conexion.php';

    class Proveedor{

        public function __construct() {}

        public function guardar($login, $password, $nombre, $apellidos, $nombre_empresa, $tipo, $email, $telefono) {
            $token = $this->getToken();
            $sql = "INSERT INTO usuario(nombre, apellido, login, password, email, tipo_usuario, token, fecha_token)
                VALUES('$nombre', '$apellidos', '$login', '$password', '$email', '$tipo', '$token', CURDATE())";

            $id_usuario = ejecutarConsulta_retornarId($sql);
            $vacio = "";

            $sql2 = "INSERT INTO proveedor(idusuario, nombre_empresa, tipo, descripcion, rango_minimo, rango_maximo,
                departamento, municipio, barrio, calle, latitud, longitud, telefono, email, especialidad, descuento,
                pagina_web, logo)
                VALUES($id_usuario, '$nombre_empresa', '$tipo', '$vacio', '0.0', '0.0',
                    '$vacio', '$vacio', '$vacio', '$vacio', '$vacio', '$vacio', '$telefono', '$email', '$vacio', 0,
                    '$vacio', '$vacio')";
            return ejecutarConsulta($sql2);
        }

        public function listar_tipoProveedor() {
            $sql = "SELECT *
                FROM tipo_proveedor
                WHERE condicion = 1";
            return ejecutarConsulta($sql);
        }

        public function getToken() {
            $alpha = "123qwertyuiopa456sdfghjklzxcvbnm789";
            $qrrand="";
            $longitud=20;
            for($i=0;$i<$longitud;$i++) {      
                $qrrand .= $alpha[rand(0, strlen($alpha)-1)];
            }
            return $qrrand;
        }
    }

?>