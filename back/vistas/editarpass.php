<?php 
    require_once 'header.php';
?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Cambiar Contraseña</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6" id="actual">
                                <div class="form-group">
                                  <label>Introducir Contraseña Actual</label>
                                  <div class="input-group">
                                    <input type="password" class="form-control" name="clavei" id="clavei" placeholder="Introducir contraseña">
                                  </div>
                                    <div class="card-footer">
                                      <button type="submit" onclick="verificar()" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6" id="cambiar">
                            <form id="cambiar">
                              <div class="card card-primary">
                                <div class="card-body">
                                    <div class="form-group">
                                      <label>Introducir Nueva Contraseña</label>
                                      <div class="input-group">
                                        <input type="password" class="form-control" name="clavec1" id="clavec1" placeholder="Introducir contraseña">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label>Repita la contraseña</label>
                                      <div class="input-group">
                                        <input type="password" class="form-control" name="clavec2" id="clavec2" placeholder="Introducir contraseña" >
                                      </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" onclick="cambiar()" class="btn btn-primary">Editar</button>
                                  </div>
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
<script src="../js/editperfil.js"></script>
        