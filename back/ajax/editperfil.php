<?php 
    session_start();
    require_once '../modelos/Editperfil.php';
    $editperfil = new Editperfil();

   $idusuario =isset($_SESSION['idusuario'])?limpiarCadena($_SESSION['idusuario']):"";
   $nombre =isset($_POST['nombre'])?limpiarCadena($_POST['nombre']):"";
   $apellido =isset($_POST['apellido'])?limpiarCadena($_POST['apellido']):"";
   $email =isset($_POST['email'])?limpiarCadena($_POST['email']):"";
   $login =isset($_POST['login'])?limpiarCadena($_POST['login']):"";
   switch($_GET['op']){
       case 'editar':
        if(!empty($idusuario)){
            $resp=$editperfil->editar($idusuario,$nombre,$apellido,$email,$login);
            if($resp){
                $_SESSION['nombre']=$nombre;
                $_SESSION['apellido']=$apellido;
                $_SESSION['email']=$email;
                $_SESSION['login']=$login;
            }
            echo $resp ? "Usuario actualizado" : "Usuario no se pudo actualizar";
        }
       break;
       case 'comparar':
        $clavei=$_POST['clavei'];
        $clavehash=hash("SHA256",$clavei);
        $rspta=$editperfil->compara($clavehash);
        $fetch=$rspta->fetch_object();
        echo json_encode($fetch);
    break;
    case 'cambiar':
        $clave1 = isset($_POST['clave1'])?limpiarCadena($_POST['clave1']):"";
        $encrip =hash("SHA256",$clave1);
        $resp=$editperfil->cambiar($idusuario,$encrip);
        echo $resp?"Cambio de Contraseña exitosa" : "Fallo el cambio de contraseña";
    break;
    }
?>