<?php

require_once "../modelos/select_dinamico.php";

$select_dinamico=new Select_dinamico();

$rspta=$select_dinamico->departamento();

if(isset($_GET['op'])) {

    switch($_GET["op"]) {
        case 'select_dimaticoDepartamento':
        if($rspta->num_rows > 0){
            while($row = $rspta->fetch_assoc()){
                echo '<option value="'.$row['iddepartamento'].'">'.$row['nombre'].'</option>';
            }
        }else{
            echo '<option value="">departamento no disponible</option>';
        }
    break;
    }
}


if(!empty($_POST["iddepartamento"])){

$rspta=$select_dinamico->municipio();

    if($rspta->num_rows > 0){
        echo '<option value="">Selecione municipio</option>';
        while($row = $rspta->fetch_assoc()){
            echo '<option value="'.$row['idmunicipio'].'">'.$row['nombre'].'</option>';
        }
    }else{
        echo '<option value="">municipio no disponible</option>';
    }
}elseif(!empty($_POST["idmunicipio"])){

    $rspta=$select_dinamico->barrio();

    if($rspta->num_rows > 0){
        echo '<option value="">Selecione barrio</option>';
        while($row = $rspta->fetch_assoc()){
            echo '<option value="'.$row['idbarrio'].'">'.$row['nombre'].'</option>';
        }
    }else{
        echo '<option value="">barrio no disponible</option>';
    }
}
?>
