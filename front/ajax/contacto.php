<?php
    session_start();
    require_once '../modelos/Contacto.php';

    $contacto = new Contacto();

    $fname = isset($_POST['fname'])?limpiarCadena($_POST['fname']):"";
    $lname = isset($_POST['lname'])?limpiarCadena($_POST['lname']):"";
    $email = isset($_POST['email'])?limpiarCadena($_POST['email']):"";
    $phone = isset($_POST['phone'])?limpiarCadena($_POST['phone']):"";
    $message = isset($_POST['message'])?limpiarCadena($_POST['message']):"";

    switch($_GET["op"]) {
        case "enviar":
            $rsp = $contacto->enviar($fname, $email, $phone, $message);
            echo $rsp? "Mensaje Enviado" : "No se pudo enviar un mensaje";
        break;
    }

?>