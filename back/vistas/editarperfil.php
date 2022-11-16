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
            <form id="editar">
              <div class="card card-primary">
                <div class="card-body">

                  <div class="form-group">
                    <label>Nombre</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                      </div>
                      <input type="text" class="form-control" name="nombre" value="<?php echo $_SESSION['nombre']?>">
                    </div>
                    <!-- /.input group -->
                  </div>

                  <div class="form-group">
                    <label>Apellido</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                      </div>
                      <input type="text" class="form-control" name="apellido" value="<?php echo $_SESSION['apellido']?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                      </div>
                      <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['email']?>" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Usuario</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                      </div>
                      <input type="text" class="form-control" name="login" value="<?php echo $_SESSION['login']?>" >
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Editar</button>
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
<script src="../js/editperfil.js"></script>
        