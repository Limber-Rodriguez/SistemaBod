<?php 
    require_once '../config/conexion.php';

    Class Registroboda{
        public function __construct(){}
        public function insertar( $idusuario,$novio,$novia,$opinion,$apnovia,$apnovio,$ceremonia,$recepcion,$fecha,$invitados,$pais,$ciudad){
            $sql = "INSERT INTO boda( idusuario,nombre_novio,apellidos_novio,nombre_novia,apellidos_novia,direccion_misa,direccion_evento,fecha,numero_personas,pais,ciudad,opinion_boda)
                                VALUES( '$idusuario','$novio','$apnovio','$novia','$apnovia','$ceremonia','$recepcion','$fecha','$invitados','$pais','$ciudad','$opinion')";
            return ejecutarConsulta($sql);
        }
        public function ver($idusuario){
            $sql = "SELECT * FROM boda WHERE idusuario = '$idusuario'";
            return ejecutarConsulta($sql);
        }
    }
?>