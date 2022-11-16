<?php 
    session_start();
    require_once '../modelos/Editboda.php';
    $editboda = new Editboda();

    $idboda =isset($_SESSION['idboda'])?limpiarCadena($_SESSION['idboda']):"";
    $novio =isset($_POST['novio'])?limpiarCadena($_POST['novio']):"";
    $novia =isset($_POST['novia'])?limpiarCadena($_POST['novia']):"";
    $apnovia =isset($_POST['apnovia'])?limpiarCadena($_POST['apnovia']):"";
    $apnovio =isset($_POST['apnovio'])?limpiarCadena($_POST['apnovio']):"";
    $ceremonia =isset($_POST['ceremonia'])?limpiarCadena($_POST['ceremonia']):"";
    $recepcion =isset($_POST['recepcion'])?limpiarCadena($_POST['recepcion']):"";
    $fecha =isset($_POST['fecha'])?limpiarCadena($_POST['fecha']):"";
    $invitados =isset($_POST['invitados'])?limpiarCadena($_POST['invitados']):"";
    $pais =isset($_POST['pais'])?limpiarCadena($_POST['pais']):"";
    $ciudad =isset($_POST['ciudad'])?limpiarCadena($_POST['ciudad']):"";
    $opinion =isset($_POST['opinion'])?limpiarCadena($_POST['opinion']):"";

    switch($_GET['op']){
        case 'edit':
            $resp=$editboda->editar($idboda,$novio,$novia,$opinion,$apnovia,$apnovio,$ceremonia,$recepcion,$fecha,$invitados,$pais,$ciudad);
            if($resp){
                $_SESSION['nombre_novio']=$novio;
                $_SESSION['apellidos_novio']=$apnovio;
                $_SESSION['nombre_novia']=$novia;
                $_SESSION['apellidos_novia']=$apnovia;
                $_SESSION['direccion_misa']=$ceremonia;
                $_SESSION['direccion_evento']=$recepcion;
                $_SESSION['fecha']=$fecha;
                $_SESSION['numero_personas']=$invitados;
                $_SESSION['pais']=$pais;
                $_SESSION['ciudad']=$ciudad;
                $_SESSION['opinion_boda']=$opinion;
            }
            echo $resp?"Boda Actualizada":"No se pudo Actualizar la Boda";
        break;
    }
?>