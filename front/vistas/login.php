<?php require_once 'header.php'; ?>

<div class="wrapper section-padding mt-5 ">
  <div class="inner mt-5 animate-box" id="inner" data-animate-effect="fadeIn">
    <div class="image-holder">
      <img src="../files/images/login/flor.png" alt="" class="img-fluid">
    </div>
    <!-- Registro -->
    <form class="mi-form" id="registro" action="">
      <h3 class="mi-h3">Registrarce</h3>
      <div class="form-holder active">
        <input type="text" placeholder="Nombre" name="nombre" class="mi-form-control" required>
      </div>
      <div class="form-holder">
        <input type="text" placeholder="Apellido" name="apellido" class="mi-form-control" required>
      </div>
      <div class="form-holder">
        <input type="email" placeholder="e-mail" name="email" class="mi-form-control" required>
      </div>
      <div class="form-holder">
        <input type="text" placeholder="Usuario" name="usuario" class="mi-form-control" required>
      </div>
      <div class="form-holder">
        <input type="password" placeholder="Contraseña" name="pasword" class="mi-form-control" required style="font-size: 15px;">
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" checked> I agree all statement in <a href="#" class="mi-a">terminos y condiciones</a>
          <span class="checkmark"></span>
        </label>
      </div>
      <div class="form-login">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <button>Enviar</button>
          </div>
          <div class="col-12 pt-5">
            <p>Ya tienes una cuenta? <a class="mi-a" href="#" onclick="login();">Iniciar Sesion</a></p>
            <p>quieres ser un proveedor? <a class="mi-a" href="#" onclick="proveedor();">Registrar como proveedor</a></p>
          </div>
        </div>
      </div>
    </form>
    <!--  -->
    <!--Login-->
    <form class="mi-form" id="login" action="">
      <h3 class="mi-h3">Login</h3>
      <div class="form-holder active">
        <input type="text" placeholder="Usuario o Nombre" name="logina" id="logina" class="mi-form-control" required>
      </div>
      <div class="form-holder">
        <input type="password" placeholder="Contraseña" name="clavea" id="clavea" class="mi-form-control" style="font-size: 15px;" required>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" checked> I agree all statement in <a href="#" class="mi-a">terminos y condiciones</a>
          <span class="checkmark"></span>
        </label>
      </div>
      <div class="form-login">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <button type="button" onclick="verificar()">Enviar</button>
          </div>
          <div class="col-12 pt-5">
            <p>No tienes una cuenta? <a class="mi-a" href="#" onclick="registra();">Registrar</a></p>
            <p>Olvidaste tu contraseña? <a class="mi-a" href="#" onclick="recuperar_pass(true)">Recuperar Contraseña</a></p>
          </div>
        </div>
      </div>
    </form>

    <!-- Registro PROVEEDOR -->
    <form class="mi-form" id="proveedor" action="">
      <h3 class="mi-h3">Registrarse</h3>
      <div class="form-holder active">
        <input type="text" placeholder="Login" name="loginProveedor" class="mi-form-control" required>
      </div>
      <div class="form-holder active">
        <input type="password" placeholder="Contraseña" name="claveProveedor" class="mi-form-control" required>
      </div>
      <div class="form-holder active">
        <input type="text" placeholder="Nombre" name="nombre" class="mi-form-control" required>
      </div>
      <div class="form-holder">
        <input type="text" placeholder="Apellidos" name="apellidos" class="mi-form-control" required>
      </div>
      <div class="form-holder">
        <input type="text" placeholder="Empresa" name="empresa" class="mi-form-control" required>
      </div>
      <div class="form-holder">
        <select name="tipoServicio" class="mi-form-control" id="tipoServicio" required>
        </select>
      </div>
      <div class="form-holder">
        <input type="email" placeholder="e-mail" name="email" class="mi-form-control" required>
      </div>
      <div class="form-holder">
        <input type="text" placeholder="Telefono" name="telefono" class="mi-form-control" required>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" checked> I agree all statement in <a href="#" class="mi-a">terminos y condiciones</a>
          <span class="checkmark"></span>
        </label>
      </div>
      <div class="form-login">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <button>Enviar</button>
          </div>
          <div class="col-12 pt-5">
            <p>Ya tienes una cuenta? <a class="mi-a" href="#" onclick="login();">Iniciar Sesion</a></p>
            <p>quieres ser un proveedor? <a class="mi-a" href="#">Registrar como proveedor</a></p>
          </div>
        </div>
      </div>
    </form>
    <!--  -->

  </div>
</div>
<!-- recuperar -->
<div class="modal" tabindex="-1" role="dialog" id="recuperar_pass">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Envio de Email</h5>
        <button type="button" class="close" onclick="recuperar_pass(false)" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" id="recuperar">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="emailr" name="emailr" aria-describedby="emailHelp" placeholder="Ingrese su email">
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-6 offset-md-3">
              <button type="submit" class="btn mi-clase-boton btn-block p-2">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--  -->
<!-- cambiar -->
<div class="modal" tabindex="-1" role="dialog" id="cambiar_password">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cambio de contraseña</h5>
        <button type="button" class="close" onclick="modal_cambiar_password(false)" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" id="formCambiarPassword">
          <div class="form-row">
            <input type="hidden" id="idrecuperar" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
            <input type="hidden" id="tokenrecuperar" value="<?php echo isset($_GET['token']) ? $_GET['token'] : ''; ?>">
            <div class="form-group col-md-6">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" class="form-control" id="clavec1" name="clavec1" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Repita Contraseña</label>
              <input type="password" class="form-control" id="clavec2" name="clavec2" placeholder="Password">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
  <!--  -->


  <script>
    var x = document.getElementById('login');
    var y = document.getElementById('registro');
    var z = document.getElementById('proveedor');
    var i = document.getElementById('inner');
    var p = document.getElementById('page');

    p.classList.add("ocultar");

    function login() {
      x.style.opacity = "1";
      x.style.zIndex = "100";
      y.style.opacity = "0";
      z.style.opacity = "0";
      z.style.zIndex = "1";
      // i.style.height="550px";
      i.classList.remove("unpinchetamano");
    }

    function proveedor() {
      z.style.opacity = "1";
      z.style.zIndex = "101";
      y.style.opacity = "0";
      //i.style.height="1000px";
      x.style.opacity = "0";
      i.classList.add("unpinchetamano");

    }


    function registra() {
      x.style.opacity = "0";
      x.style.zIndex = "0";
      y.style.opacity = "1";
      i.classList.remove("unpinchetamano");

    }
  </script>

  <style>
    .ocultar {
      overflow: hidden;
    }

    .unpinchetamano {
      height: 955px;
    }

    #proveedor {
      height: 50px;
      opacity: 0;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 425px;
      right: 0;
    }

    #login {
      height: 50px;
      opacity: 0;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 425px;
      right: 0;
    }

    #registro {
      position: relative;
      z-index: 99;


    }

    @font-face {
      font-family: "ElMessiri-SemiBold";
      src: url("../files/fonts/el_messiri/ElMessiri-SemiBold.ttf");
    }

    @font-face {
      font-family: "Montserrat-Regular";
      src: url("../files/fonts/montserrat/Montserrat-Regular.ttf");
    }

    @font-face {
      font-family: "Montserrat-SemiBold";
      src: url("../files/fonts/montserrat/Montserrat-SemiBold.ttf");
    }

    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    body {
      font-family: "Montserrat-Regular";
      color: #999;
      font-size: 12px;
      margin: 0;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    ul {
      margin: 0;
    }

    img {
      max-width: 100%;
    }

    ul {
      padding-left: 0;
      margin-bottom: 0;
    }

    .mi-a {
      text-decoration: none;
      color: #ff9a9c;
      transition: all 0.3s ease;
    }

    .mi-a:hover {
      text-decoration: none;
      color: #fe4447;
    }

    :focus {
      outline: none;
    }

    .wrapper {
      min-height: 100vh;
      display: flex;
      align-items: center;
      background: #FBD2D0;
      background-size: cover;
    }

    .inner {
      max-width: 850px;
      margin: auto;
      background: #fff;
      display: flex;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
      -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
      -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
      -ms-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
      -o-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    }

    .image-holder {
      width: 50%;
      padding-right: 15px;
    }

    .mi-form {
      width: 50%;
      min-height: 60%;
      padding-top: 77px;
      padding-right: 60px;
      padding-left: 15px;
      padding-bottom: 80px;
    }

    .mi-h3 {
      font-size: 35px;
      font-family: "ElMessiri-SemiBold";
      text-align: center;
      margin-bottom: 27px;
      color: #ff9a9c;
    }

    .form-holder {
      padding-left: 24px;
      position: relative;
    }

    .form-holder:before {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      content: "";
      width: 10px;
      height: 10px;
      border-radius: 50%;
      border: 2px solid #ff9a9c;
      position: absolute;
      left: 1px;
      top: 50%;
      transform: translateY(-50%);
    }

    .form-holder.active:before {
      border: 2px solid transparent;
      background: #ff9a9c;
    }

    .mi-form-control {
      display: block;
      width: 100%;
      border-radius: 23.5px;
      height: 47px;
      padding: 0 24px;
      color: #808080;
      font-size: 13px;
      border: none;
      background: #f7f7f7;
      margin-bottom: 25px;
    }

    .form-control::-webkit-input-placeholder {
      font-size: 13px;
      color: #808080;
      text-transform: uppercase;
      font-family: "Montserrat-Regular";
    }

    .form-control::-moz-placeholder {
      font-size: 13px;
      color: #808080;
      text-transform: uppercase;
      font-family: "Montserrat-Regular";
    }

    .form-control:-ms-input-placeholder {
      font-size: 13px;
      color: #808080;
      text-transform: uppercase;
      font-family: "Montserrat-Regular";
    }

    .form-control:-moz-placeholder {
      font-size: 13px;
      color: #808080;
      text-transform: uppercase;
      font-family: "Montserrat-Regular";
    }

    @-webkit-keyframes hvr-wobble-horizontal {
      16.65% {
        -webkit-transform: translateX(8px);
        transform: translateX(8px);
      }

      33.3% {
        -webkit-transform: translateX(-6px);
        transform: translateX(-6px);
      }

      49.95% {
        -webkit-transform: translateX(4px);
        transform: translateX(4px);
      }

      66.6% {
        -webkit-transform: translateX(-2px);
        transform: translateX(-2px);
      }

      83.25% {
        -webkit-transform: translateX(1px);
        transform: translateX(1px);
      }

      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
      }
    }

    @keyframes hvr-wobble-horizontal {
      16.65% {
        -webkit-transform: translateX(8px);
        transform: translateX(8px);
      }

      33.3% {
        -webkit-transform: translateX(-6px);
        transform: translateX(-6px);
      }

      49.95% {
        -webkit-transform: translateX(4px);
        transform: translateX(4px);
      }

      66.6% {
        -webkit-transform: translateX(-2px);
        transform: translateX(-2px);
      }

      83.25% {
        -webkit-transform: translateX(1px);
        transform: translateX(1px);
      }

      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
      }
    }

    button {
      letter-spacing: 2px;
      border: none;
      width: 133px;
      height: 47px;
      margin-right: 19px;
      border-radius: 23.5px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
      background: #ff9a9c;
      font-size: 15px;
      color: #fff;
      text-transform: uppercase;
      font-family: "Montserrat-SemiBold";
      -webkit-transform: perspective(1px) translateZ(0);
      transform: perspective(1px) translateZ(0);
      box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    }

    button:hover {
      -webkit-animation-name: hvr-wobble-horizontal;
      animation-name: hvr-wobble-horizontal;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-timing-function: ease-in-out;
      animation-timing-function: ease-in-out;
      -webkit-animation-iteration-count: 1;
      animation-iteration-count: 1;
    }

    .checkbox {
      position: relative;
      padding-left: 19px;
      margin-bottom: 37px;
      margin-left: 26px;
    }

    .checkbox label {
      cursor: pointer;
      color: #999;
    }

    .checkbox input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    .checkbox input:checked~.checkmark:after {
      display: block;
    }

    .checkmark {
      position: absolute;
      top: 2px;
      left: 0;
      height: 10px;
      width: 10px;
      border-radius: 50%;
      border: 1px solid #e7e7e7;
    }

    .checkmark:after {
      content: "";
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 4px;
      height: 4px;
      border-radius: 50%;
      background: #ff9a9c;
      position: absolute;
      display: none;
    }

    .form-login {
      display: flex;
      align-items: center;
      margin-left: 23px;
    }

    @media (max-width: 767px) {
      .inner {
        display: block;
      }

      .image-holder {
        width: 100%;
        padding-right: 0;
      }

      .mi-form {
        width: 100%;
        padding: 0px 15px 70px;
      }

      .wrapper {
        background: none;
      }

      #login {
        position: absolute;
        opacity: 0;
        top: 428px;
        left: 0;
        bottom: 0;
        right: 0;
        height: 50px;
      }

      #proveedor {
        position: absolute;
        opacity: 0;
        top: 428px;
        left: 0;
        bottom: 0;
        right: 0;
        height: 50px;
      }

      #registro {
        position: relative;
      }

      .unpinchetamano {
        height: 1500px;
      }


    }

    /*# sourceMappingURL=style.css.map */
  </style>

  <?php require_once 'footer.php'; ?>
  <script>
    $(function() {
      $('.form-holder').delegate("input", "focus", function() {
        $('.form-holder').removeClass("active");
        $(this).parent().addClass("active");
      })
    })
    $("#nav-login").addClass("active");
  </script>
  <script src="../js/login.js"></script>
  <script src="../js/jsproveedor.js"></script>