<?php 
session_start();
    require_once '../modelos/Usuario.php';

    $usuario = new Usuario();

    $idusuario=isset($_POST['idusuario'])?limpiarCadena($_POST['idusuario']):"";
    $nombre = isset($_POST['nombre'])?limpiarCadena($_POST['nombre']):"";
    $apellido = isset($_POST['apellido'])?limpiarCadena($_POST['apellido']):"";
    $email= isset($_POST['email'])?limpiarCadena($_POST['email']):"";
    $user=isset($_POST['usuario'])?limpiarCadena($_POST['usuario']):"";
    $pasword=isset($_POST['pasword'])?limpiarCadena($_POST['pasword']):"";
    switch ($_GET['op']) {
        case 'registrar':
            $clavehash=hash("SHA256",$pasword);
            if(empty($idusuario)){
                $resp = $usuario->insertar($nombre,$apellido,$email,$user,$clavehash);
                if($resp != 0) {
                    $_SESSION['id_usuario']= $resp;
                    $rspta = $usuario->obtener_usuario($_SESSION["id_usuario"]);
                    $_SESSION["nombre"] = $rspta["nombre"];
                    $_SESSION['tipo_usuario']=$rspta["tipo_usuario"];
                }
                echo $resp != 0 ? "Usuario Registrado" : "No se pudo registrar el usuario";
            }
            break;
        case 'verificar':
            $login=$_POST['logina'];
            $clave=$_POST['clavea'];
            $clavehash=hash("SHA256",$clave);
            $resp = $usuario->verificar($login,$clavehash);
            $fetch=$resp->fetch_object();
            if (isset($fetch))
            {
                $_SESSION['nombre']=$fetch->nombre;
                $_SESSION['id_usuario']=$fetch->idusuario;
                $_SESSION['tipo_usuario']=$fetch->tipo;
            }
            echo json_encode($fetch);
        break;
    case 'salir':
        session_unset();
            session_destroy();
            header("Location: ../vistas/principal.php");
    break;
    case 'enviaremail':
        $emailr=isset($_POST["emailr"])? limpiarCadena($_POST["emailr"]):"";
        echo $usuario->validar_email($emailr);
    break;
    case 'restablecerpassword':
        $id = isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
        $token = isset($_POST["token"])? limpiarCadena($_POST["token"]):"";
        $claver = isset($_POST["claver"])? limpiarCadena($_POST["claver"]):"";
        $clavehash=hash("SHA256",$claver);
        $resp = $usuario->restablecer_password($id,$clavehash,$token);
        echo $resp? "Contraseña restablecida": "No se pudo restablecer contraseña";
    break;
    case 'validartoken':
        $id = isset($_POST["idv"])? limpiarCadena($_POST["idv"]):"";
        $token = isset($_POST["tokenv"])? limpiarCadena($_POST["tokenv"]):"";
        $resp = $usuario->validar_token($id,$token);
        $fetch= $resp->fetch_object();
        echo json_encode($fetch);
    break;
    }
?>