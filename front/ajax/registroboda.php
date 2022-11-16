<?php 
    session_start();
    require_once '../modelos/Registroboda.php';
    $registroboda = new Registroboda();

    $idusuario =isset($_SESSION['id_usuario'])?limpiarCadena($_SESSION['id_usuario']):"";
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
        case 'registro':
            if($idusuario != 0){
                $resp=$registroboda->insertar( $idusuario,$novio,$novia,$opinion,$apnovia,$apnovio,$ceremonia,$recepcion,$fecha,$invitados,$pais,$ciudad);
                echo $resp?"Boda Registrada":"No se pudo registrar la Boda";
            }else{
                echo "No Inicio Sesion";
            }
        break;
        case 'mostrar':
            $respues =$registroboda->ver($idusuario);
            $fetch=$respues->fetch_object();
            if (isset($fetch))
            {
                $_SESSION['idboda']=$fetch->idboda;
                $_SESSION['nombre_novio']=$fetch->nombre_novio;
                $_SESSION['apellidos_novio']=$fetch->apellidos_novio;
                $_SESSION['nombre_novia']=$fetch->nombre_novia;
                $_SESSION['apellidos_novia']=$fetch->apellidos_novia;  
                $_SESSION['direccion_misa']=$fetch->direccion_misa;
                $_SESSION['direccion_evento']=$fetch->direccion_evento;
                $_SESSION['fecha']=$fetch->fecha;
                $_SESSION['numero_personas']=$fetch->numero_personas;
                $_SESSION['pais']=$fetch->pais;
                $_SESSION['ciudad']=$fetch->ciudad;
                $_SESSION['opinion_boda']=$fetch->opinion_boda;
            }
        break;

        
    }
?>