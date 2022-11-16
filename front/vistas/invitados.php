<?php require_once 'header.php'; ?>

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(../files/images/bg.jpg); height:490px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="">
            <div class="">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>NombreNovio &amp; NombreNovia</h1>
                        <h2>Nos Vamos a casar</h2>
                        <div class="simply-countdown simply-countdown-one"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mt-5" id="">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center" data-aos="fade-up">
            <div class="col-7 text-center  mb-5">
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-3" data-aos="fade-up">

                <div class="unit-4 d-block">
                    <div class="unit-4-icon mb-3">
                        <span class="icon-wrap"><span class="text-primary icon-autorenew"></span></span>
                    </div>
                    <div>
                        <h3>Mis Proveedores</h3>

                    </div>
                </div>

            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-3" data-aos="fade-up" data-aos-delay="100">

                <div class="unit-4 d-block">
                    <div class="unit-4-icon mb-3">
                        <span class="icon-wrap"><span class="text-primary icon-store_mall_directory"></span></span>
                    </div>
                    <div>
                        <h3>Mi presupuesto</h3>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="unit-4 d-block">
                    <div class="unit-4-icon mb-3">
                        <span class="icon-wrap"><span class="text-primary icon-shopping_basket"></span></span>
                    </div>
                    <div>
                        <h3>Mis invitados</h3>

                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-3 mb-4 mb-lg-3" data-aos="fade-up">
                <div class="unit-4 d-block">
                    <div class="unit-4-icon mb-3">
                        <span class="icon-wrap"><span class="text-primary icon-settings_backup_restore"></span></span>
                    </div>
                    <div>
                        <h3>Mi invitacion</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <table class="table">
            <thead class="thead-light" style="height:100px;">
                <tr>
                    <th scope="col" class="py-5">#</th>
                    <th scope="col" class="py-5">Nombre</th>
                    <th scope="col" class="py-5">Asistencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>

                        <select class="custom-select" style="height:40px; width:25%; border:2px solid #ff9a9c;   ">

                            <option value="1">Confirmado</option>
                            <option value="2">Pendiente</option>
                            <option value="3">Cancelado</option>
                        </select>

                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>
                        <select class="custom-select"style="height:40px; width:25%; border:2px solid #ff9a9c; ">

                            <option value="1">Confirmado</option>
                            <option value="2">Pendiente</option>
                            <option value="3">Cancelado</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>
                        <select class="custom-select " style="height:40px; width:25%; border:2px solid #ff9a9c;   ">

                            <option value="1">Confirmado</option>
                            <option value="2">Pendiente</option>
                            <option value="3">Cancelado</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<style>
    .unit-4 {
        padding: 30px;
        background: #f1f1f1;
        border-radius: 5px;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
        position: relative;
        top: 0;
        margin-bottom: 4em;
        text-align: center;
        padding-top: 50px;
    }

    .unit-4 .unit-4-icon {
        position: absolute;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        left: 50%;
        top: -50px;
    }

    .unit-4 .unit-4-icon .icon-wrap {
        width: 80px;
        height: 80px;
        position: relative;
        border-radius: 50%;
        display: inline-block;
        background-color: #ff9a9c;
        -webkit-box-shadow: 0 4px 20px -5px rgba(66, 133, 244, 0.4);
        box-shadow: 0 4px 20px -5px rgba(66, 133, 244, 0.4);
    }

    .unit-4 .unit-4-icon .icon-wrap span {
        font-size: 2rem;
        position: absolute;
        top: 50%;
        color: #fff !important;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .unit-4 h3 {
        font-size: 18px;
        color: #000;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
    }

    .unit-4 p {
        font-weight: 300;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
    }

    .unit-4 *:last-child {
        margin-bottom: 0;
    }

    .unit-4:hover {
        background: #ff9a9c;
        -webkit-box-shadow: 0 4px 20px -5px rgba(66, 133, 244, 0.4);
        box-shadow: 0 4px 20px -5px rgba(66, 133, 244, 0.4);
        top: -7px;
    }

    .unit-4:hover .icon-wrap {
        background-color: #fff;
    }

    .unit-4:hover .icon-wrap span {
        color: #ff9a9c !important;
    }

    .unit-4:hover h3 {
        color: #fff;
    }

    .unit-4:hover p {
        font-weight: 300;
        color: rgba(255, 255, 255, 0.7);
    }

    .unit-4:hover p a {
        color: #fff;
    }

    @media (max-width: 991.98px) {
        .section-title {
            font-size: 30px;
        }
    }
</style>

<?php require_once 'footer.php'; ?>
<script>
    $("#nav-registroBoda").addClass("active");
</script>