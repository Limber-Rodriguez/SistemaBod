<?php
    if(session_id() === "")
        session_start();
    
    require_once '../modelos/moProveedor.php';
    $proveedor = new Proveedor();
    $iduser = $_SESSION["id_usuario"];
    $proveedor->listar_sesion($iduser);

    require_once 'header.php';
?>

<div class="content-wrapper">
    <div class="container">
        <div class="row mb-4">
            <h3 class="ml-4 m-auto p-2">Cambiar contraseña</h3>
        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-12">
                <div class="container">
                    <form id="form_recuperarPass" method="POST">
                        <div class="row px-2 recuperarPass m-auto">
                            <div class="col-12 form-group">
                                <label for="">Contraseña actual(*):</label>
                                <input type="password" class="form-control" name="clave_actual" id="clave_actual"
                                    placeholder="Contraseña actual *" title="Introduzca su contraseña actual" required maxlength="50">
                                <input type="hidden" name="idproveedor" id="idproveedor" value="<?=isset($_SESSION['id_proveedor'])?$_SESSION['id_proveedor']:0;?>">
                                <input type="hidden" name="idproveedor" id="idusuario" value="<?=isset($_SESSION['id_usuario'])?$_SESSION['id_usuario']:0;?>">
                            </div>
                        
                            <div class="col-12 form-group">
                                <label for="">Contraseña nueva(*):</label>
                                <input type="password" class="form-control" name="clave1" id="clave1"
                                    placeholder="Contraseña nueva *" title="Introduzca la nueva contraseña" required maxlength="50">
                            </div>
                            <div class="col-12 form-group">
                                <label for="">Repetir contraseña(*):</label>
                                <input type="password" class="form-control" name="clave2" id="clave2"
                                    placeholder="Repita contraseña *" title="Introduzca nuevamente la nueva contraseña" required maxlength="50">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mb-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
</div>

<?php
    require_once 'footer.php';
?>
<script src="../js/jsproveedor.js"></script>

