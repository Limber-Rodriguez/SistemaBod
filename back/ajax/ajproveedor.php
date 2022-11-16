<?php

    require_once '../modelos/moProveedor.php';
    $proveedor = new Proveedor();

    $idproveedor = isset($_POST["idproveedor"]) ? limpiarCadena($_POST["idproveedor"]) : "";
    $idusuario = isset($_POST["idusuario"]) ? limpiarCadena($_POST["idusuario"]) : "";
    $nombre_empresa = isset($_POST["nombre_empresa"]) ? limpiarCadena($_POST["nombre_empresa"]) : "";
    $tipo = isset($_POST["tipo"]) ? limpiarCadena($_POST["tipo"]) : "";
    $descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";
    $rango_minimo = isset($_POST["rango_minimo"]) ? limpiarCadena($_POST["rango_minimo"]) : "";
    $rango_maximo = isset($_POST["rango_maximo"]) ? limpiarCadena($_POST["rango_maximo"]) : "";
    $departamento = isset($_POST["departamento"]) ? limpiarCadena($_POST["departamento"]) : "";
    $municipio = isset($_POST["municipio"]) ? limpiarCadena($_POST["municipio"]) : "";
    $barrio = isset($_POST["barrio"]) ? limpiarCadena($_POST["barrio"]) : "";
    $calle = isset($_POST["calle"]) ? limpiarCadena($_POST["calle"]) : "";
    $latitud = isset($_POST["latitud"]) ? limpiarCadena($_POST["latitud"]) : "";
    $longitud = isset($_POST["longitud"]) ? limpiarCadena($_POST["longitud"]) : "";
    $telefono = isset($_POST["telefono"]) ? limpiarCadena($_POST["telefono"]) : "";
    $email = isset($_POST["email"]) ? limpiarCadena($_POST["email"]) : "";
    $especialidad = isset($_POST["especialidad"]) ? limpiarCadena($_POST["especialidad"]) : "";
    $descuento = isset($_POST["descuento"]) ? limpiarCadena($_POST["descuento"]) : "";
    $pagina_web = isset($_POST["pagina_web"]) ? limpiarCadena($_POST["pagina_web"]) : "";
    $imagen = isset($_POST["imagen"]) ? limpiarCadena($_POST["imagen"]) : "";

    switch($_GET["op"]) {
        case 'editar':
            if(!file_exists($_FILES["imagen"]["tmp_name"]) || !is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
                $imagen = $_POST["imagenActual"];
            }else {
                $ext = explode(".", $_FILES["imagen"]["name"]);
                if($_FILES["imagen"]["type"] == "image/jpeg" || $_FILES["imagen"]["type"] == "image/jpg"
                     || $_FILES["imagen"]["type"] == "image/png") {
                    
                    $imagen = round(microtime(true)).'.'.end($ext);
                    move_uploaded_file($_FILES["imagen"]["tmp_name"], "../../front/files/images/proveedor/perfil/".$imagen);
                }
            }
           $rspta = $proveedor->editar($idproveedor, $nombre_empresa, $descripcion, $rango_minimo, $rango_maximo,
                $departamento, $municipio, $barrio, $calle, $latitud, $longitud, $telefono, $email, $especialidad,
                $descuento, $pagina_web, $imagen);
                echo $rspta ? "Datos modificados correctamente" : "Error no se pudo modificar los datos";
        break;

        case 'obtener_datosProveedor':
            $rspta = $proveedor->get_proveedor($idproveedor);
            echo json_encode($rspta);
        break;

        case 'select_tipos':
            $rspta = $proveedor->listar_tipoProveedor();
            while($reg = $rspta->fetch_object()) {
                echo '<option value="'.$reg->nombre.'">'.$reg->nombre.'</option>';
            }
        break;

        case 'selectDEP':
            $iddepartamento = isset($_POST["iddepartamento"]) ? limpiarCadena($_POST["iddepartamento"]) : "";
            $rspta = $proveedor->get_departamento($iddepartamento);
            echo json_encode($rspta);
        break;

        case 'selectMUN':
            $idmunicipio = isset($_POST["idmunicipio"]) ? limpiarCadena($_POST["idmunicipio"]) : "";
            $rspta = $proveedor->get_municipio($idmunicipio);
            echo json_encode($rspta);
        break;

        case 'selectBAR':
            $idbarrio = isset($_POST["idbarrio"]) ? limpiarCadena($_POST["idbarrio"]) : "";
            $rspta = $proveedor->get_barrio($idbarrio);
            echo json_encode($rspta);
        break;

        case 'modificar_pass':
            $password = isset($_POST["clave"]) ? limpiarCadena($_POST["clave"]) : "";
            $password_new = isset($_POST["clave_new"]) ? limpiarCadena($_POST["clave_new"]) : "";
            $password = hash("SHA256", $password);
            $password_new = hash("SHA256", $password_new);
            $rspta = $proveedor->verificar_password($idusuario, $password);
            if($rspta["idusuario"] != "") {
                $rspta = $proveedor->modificar_password($idusuario, $password, $password_new);
                echo $rspta ? "Contraseña modificada corréctamente" : "Ocurrio un error vuelva a intertarlo";
            }else {
                echo "La contraseña introducida actual es incorrecta !!";
            }
        break;
    }

?>