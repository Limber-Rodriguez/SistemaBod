<?php
require "../config/conexion.php";

class Select_dinamico{
  public function departamento()
  {
    $sql = "SELECT * FROM departamento WHERE condicion = 1 ORDER BY nombre ASC";
    return ejecutarConsulta($sql);
  }
  public function municipio()
  {
    $sql = "SELECT * FROM municipio WHERE iddepartamento = " . $_POST['iddepartamento'] . " AND condicion = 1 ORDER BY nombre ASC";
    return ejecutarConsulta($sql);
  }
  public function barrio()
  {
    $sql = "SELECT * FROM barrio WHERE idmunicipio = " . $_POST['idmunicipio'] . " AND condicion = 1 ORDER BY nombre ASC";
    return ejecutarConsulta($sql);
  }
}
?>
