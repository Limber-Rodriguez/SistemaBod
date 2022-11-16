<?php
    if(session_id() === "")
        session_start();

    require_once '../modelos/moProveedor.php';

    $proveedor = new Proveedor();

    $login = isset($_POST["loginProveedor"]) ? limpiarCadena($_POST["loginProveedor"]) : "";
    $password = isset($_POST["claveProveedor"]) ? limpiarCadena($_POST["claveProveedor"]) : "";
    $nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";
    $apellidos = isset($_POST["apellidos"]) ? limpiarCadena($_POST["apellidos"]) : "";
    $nombre_empresa = isset($_POST["empresa"]) ? limpiarCadena($_POST["empresa"]) : "";
    $tipo = isset($_POST["tipoServicio"]) ? limpiarCadena($_POST["tipoServicio"]) : "";
    $email = isset($_POST["email"]) ? limpiarCadena($_POST["email"]) : "";
    $telefono = isset($_POST["telefono"]) ? limpiarCadena($_POST["telefono"]) : "";

    switch($_GET["op"]) {
        case 'guardar':
            $hash_pass = hash("SHA256", $password);
            $rspta = $proveedor->guardar($login, $hash_pass, $nombre, $apellidos, $nombre_empresa, $tipo, $email, $telefono);
            
            $_SESSION['id_usuario']= $rspta["iduser"];
            $rspta2 = $proveedor->obtener_usuario($_SESSION["id_usuario"]);
            $_SESSION["nombre"] = $rspta2["nombre"];
            $_SESSION['tipo_usuario']=$rspta2["tipo_usuario"];

            echo $rspta["respuesta"] ? "Proveedor registrado corréctamente." : "Ocurrio un error vuelva a intentarlo.";
        break;

        case 'listar_tipos':
            $rspta = $proveedor->listar_tipoProveedor();
            while($reg = $rspta->fetch_object()) {
                echo '<option value="'.$reg->nombre.'">'.$reg->nombre.'</option>';
            }
        break;
    }

?>