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
        <div class="row mb-2">
            <h3 class="ml-4 m-auto p-2">Datos generales</h3>
        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-12">
                <form id="formPerfil" method="POST">
                    <div class="logo m-auto">
                        <img src="" width="220px" height="220px" id="imagenMuestra" class="rounded-circle d-block m-auto py-1">
                        <label for="">Logo:</label>
                        <input type="file" name="imagen" id="imagen" class="form-control">
                        <input type="hidden" name="imagenActual" id="imagenActual">
                    </div>
                    <br>

                    <div class="container">
                        <div class="row px-2">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Nombre empresa(*):</label>
                                <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa"
                                    placeholder="Nombre empresa *" title="Introduzca el nombre de su empresa" required maxlength="100">
                                <input type="hidden" name="idproveedor" id="idproveedor" value="<?=isset($_SESSION['id_proveedor'])?$_SESSION['id_proveedor']:0;?>">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Tipo(*):</label>
                                <select name="tipo" id="tipo" class="form-control" required></select>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Descripción(*):</label>
                                <input type="text" class="form-control" name="descripcion" id="descripcion"
                                    placeholder="Describa el trabajo que realiza *" title="Introduzca una descripcion de su trabajo">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Precio mínimo(*):</label>
                                <input type="text" class="form-control" name="rango_minimo" id="rango_minimo"
                                    placeholder="Precio mínimo *" title="Introduzca el precio mínimo" required>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Precio máximo(*):</label>
                                <input type="text" class="form-control" name="rango_maximo" id="rango_maximo"
                                    placeholder="Precio máximo *" title="Introduzca el precio máximo" required>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Teléfono(*):</label>
                                <input type="text" class="form-control" name="telefono" id="telefono"
                                    placeholder="Teléfono *" title="Introduzca su número telefónico" required maxlength="20">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Departamento(*):</label>
                                <select name="departamento" id="departamento" class="form-control">
                                </select>
                                <input type="hidden" name="dep" id="dep">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Municipio(*):</label>
                                <select name="municipio" id="municipio" class="form-control">
                                    <option value="">Seleccione primero un departamento</option>
                                </select>
                                <input type="hidden" name="mun" id="mun">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Barrio(*):</label>
                                <select name="barrio" id="barrio" class="form-control">
                                    <option value="">Seleccione primero un municipio</option>
                                </select>
                                <input type="hidden" name="barr" id="barr">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Calle(*):</label>
                                <input type="text" class="form-control" name="calle" id="calle"
                                    placeholder="Nombre de calle *" title="Introduzca el nombre de su calle" required maxlength="100">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Latitud:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Latitud" name="latitud" id="latitud">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-info btn-flat" onclick="getAdress();">Obtener</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Longitud:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Longitud" name="longitud" id="longitud">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-info btn-flat" onclick="getAdress();">Obtener</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Email(*):</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Dirección email *" title="Introduzca la dirección de su email" required maxlength="50">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Especialidades(*):</label>
                                <input type="text" class="form-control" name="especialidad" id="especialidad"
                                    placeholder="Describe sus especialidades *" title="Introduzca las distintas especialidades que ofrecen"
                                    required maxlength="255">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Descuento:</label>
                                <input type="number" class="form-control" name="descuento" id="descuento"
                                placeholder="Descuento" title="Introduzca un descuento en porcentaje">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label for="">Página web:</label>
                                <input type="text" class="form-control" name="pagina_web" id="pagina_web"
                                placeholder="Direccion de página web" title="Introduzca la dirección de su página web" maxlength="100">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mb-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
        
    </section>
</div>

<?php
    require_once 'footer.php';
?>
<script src="../js/select_dinamico.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuCh-fARNQfZzim5qPZ3JeubCgRolgPc0"></script>
<script src="../js/coordenadas.js"></script>
<script src="../js/jsproveedor.js"></script>