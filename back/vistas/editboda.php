<?php 
  session_start();
  if(!isset($_SESSION["nombre"])){
    header ("Locatio: ../../front/vistas/login.php");
  }
  else{
    require_once 'header.php';
?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Editar Perfil de Usuario</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                    <div class="container-fluid">
                    <div class="row">
              <div class="col-md-6">
                <form id="edit">
                  <div class="card card-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group">
                              <label>Nombre Novio</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="novio" value="<?php echo $_SESSION['nombre_novio'];?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Apellido Novio</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="apnovio" value="<?php echo $_SESSION['apellidos_novio'];?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Nombre Novia</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="novia" value="<?php echo $_SESSION['nombre_novia'];?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Apellido Novia</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="apnovia" value="<?php echo $_SESSION['apellidos_novia']?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Lugar De Ceremonia</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="ceremonia" value="<?php echo $_SESSION['direccion_misa'];?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Lugar De Recepcion</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="recepcion" value="<?php echo $_SESSION['direccion_evento'];?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Fecha</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="fecha" value="<?php echo $_SESSION['fecha'];?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Numero de Invitados</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="invitados" value="<?php echo $_SESSION['numero_personas'];?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Pais</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="pais" value="<?php echo $_SESSION['pais'];?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Ciudad</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="ciudad" value="<?php echo $_SESSION['ciudad'];?>">
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Opinion </label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-edit"></i></span>
                                </div>
                                <input type="text" class="form-control" name="opinion" value="<?php echo $_SESSION['opinion_boda'];?>">
                              </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                      </div>
                  </div>
                  
                </form>
              </div>
            </div>
            <!-- /.row -->
                    </div>
            </section>
        </div>
<?php 
  }
    require_once 'footer.php';
?>
<script src="../js/editboda.js"></script>
        