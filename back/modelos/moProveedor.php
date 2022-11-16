<?php

    require_once '../config/conexion.php';

    class Proveedor{
        
        public function __construct() {
        }

        public function editar($idproveedor, $nombre_empresa, $descripcion, $rango_minimo, $rango_maximo, $departamento, $municipio,
            $barrio, $calle, $latitud, $longitud, $telefono, $email, $especialidad, $descuento, $pagina_web, $logo) {

            $sql = "UPDATE proveedor
                SET nombre_empresa = '$nombre_empresa', descripcion = '$descripcion', rango_minimo = '$rango_minimo',
                 rango_maximo = '$rango_maximo', departamento = '$departamento', municipio = '$municipio', barrio = '$barrio', 
                calle = '$calle', latitud = '$latitud', longitud = '$longitud', telefono = '$telefono', email = '$email',
                especialidad = '$especialidad', descuento = '$descuento', pagina_web = '$pagina_web', logo = '$logo'
                WHERE idproveedor = '$idproveedor'";
            return ejecutarConsulta($sql);
        }

        public function get_proveedor($idproveedor) {
            $sql = "SELECT * 
                FROM proveedor
                WHERE idproveedor = '$idproveedor'";
            return ejecutarConsulta_simpleFila($sql);
        }

        public function listar_tipoProveedor() {
            $sql = "SELECT *
                FROM tipo_proveedor
                WHERE condicion = 1";
            return ejecutarConsulta($sql);
        }

        public function get_departamento($iddepartamento) {
            $sql = "SELECT *
                FROM departamento
                WHERE iddepartamento = '$iddepartamento'";
            return ejecutarConsulta_simpleFila($sql);
        }

        public function get_municipio($idmunicipio) {
            $sql = "SELECT *
                FROM municipio
                WHERE idmunicipio = '$idmunicipio'";
            return ejecutarConsulta_simpleFila($sql);
        }

        public function get_barrio($idbarrio) {
            $sql = "SELECT *
                FROM barrio
                WHERE idbarrio = '$idbarrio'";
            return ejecutarConsulta_simpleFila($sql);
        }

        public function listar_sesion($idusuario) {
            $sql = "SELECT *
                FROM proveedor
                WHERE idusuario = '$idusuario'";
            $rspta = ejecutarConsulta_simpleFila($sql);
            $_SESSION["id_proveedor"] = $rspta["idproveedor"];
            $_SESSION["logo"] = $rspta["logo"] == ""? "no-imagen.jpg": $rspta["logo"];
        }

        public function verificar_password($idusuario, $password) {
            $sql = "SELECT *
                FROM usuario
                WHERE idusuario = '$idusuario' AND password = '$password'";

            return ejecutarConsulta_simpleFila($sql);
        }

        public function modificar_password($idusuario, $passwordA, $passwordN) {
            $sql = "UPDATE usuario
                SET password = '$passwordN'
                WHERE idusuario = '$idusuario' AND password = '$passwordA'";

            return ejecutarConsulta($sql);
        }
    }

?>