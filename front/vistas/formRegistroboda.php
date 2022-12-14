<?php 
require_once 'header.php'; 
?>


<div class="wrapper section-padding mt-5 ">


    <div class="caja" data-animate-effect="fadeIn">
        <h4 class="mi-h3 mt-5 mb-0">Sobre Nosotros</h4>




        <form class="mx-5 p-5" id="regboda">
            <div class="row" style="">

                <div class="col-md-6">
                    <div class="form-holder active">
                        <input type="text" placeholder="Nombre del Novio" name="novio"class="mi-form-control" required>
                    </div>
                    <div class="form-holder ">
                        <input type="text" placeholder="Apellido Novio" name="apnovio" class="mi-form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-holder ">
                        <input type="text" placeholder="Nombre de la Novia" name="novia" class="mi-form-control" required>
                    </div>
                    <div class="form-holder ">
                        <input type="text" placeholder="Apellido de la Novia" name="apnovia" class="mi-form-control" required>
                    </div>

                </div>
            </div>
            <h4 class="mi-h3 mb-2">Sobre mi Boda</h4>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-holder ">
                        <input type="text" placeholder="Lugar de Ceremonia" name="ceremonia" class="mi-form-control" required>
                    </div>
                    <div class="form-holder ">
                        <input type="date" placeholder="" name="fecha" class="mi-form-control" required>
                    </div>
                    <div class="form-holder ">
                        <input type="text" placeholder="Pais" name="pais" class="mi-form-control" required>
                    </div>
                    <div class="form-holder ">
                        <input type="text" placeholder="Opinion sobre la boda" name="opinion" class="mi-form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-holder ">
                        <input type="text" placeholder="Lugar de Recepcion" name="recepcion" class="mi-form-control" required>
                    </div>
                    <div class="form-holder ">
                        <input type="text" placeholder="Numero de Invitados" name="invitados" class="mi-form-control" required>
                    </div>
                    <div class="form-holder ">
                        <input type="text" placeholder="Ciudad" name="ciudad" class="mi-form-control" required>
                    </div>
                    
                </div>

            </div>
                <div class="mb-5  d-flex justify-content-center">
                    <button type="submit" >Enviar</button>
                </div>  		   
        </form>
        <!--  -->
    </div>
</div>
</div>


<style>
    .caja {

        top: 50%;
        display: block;
        margin-left: auto;
        margin-right: auto;


        background: #fff;
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
    $("#nav-registroBoda").addClass("active");
</script>
<script src="../js/registroboda.js"></script>