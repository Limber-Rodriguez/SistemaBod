<?php 
    require_once '../config/conexion.php';

    Class Editboda{
        public function editar($idboda,$novio,$novia,$opinion,$apnovia,$apnovio,$ceremonia,$recepcion,$fecha,$invitados,$pais,$ciudad){
            $sql = "UPDATE boda SET nombre_novio='$novio',apellidos_novio='$apnovio',nombre_novia='$novia',apellidos_novia='$apnovia',direccion_misa='$ceremonia',
                                    direccion_evento='$recepcion',fecha='$fecha',numero_personas='$invitados',pais='$pais',ciudad='$ciudad',opinion_boda='$opinion'
                                    WHERE idboda='$idboda'";
            return ejecutarConsulta($sql);
        }
    }
?>