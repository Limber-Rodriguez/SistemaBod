<?php 
	session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="../files/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../files/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../files/css/bootstrap.css">
	
	<link rel="stylesheet" href="../files/css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../files/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../files/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../files/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../files/css/style.css">

	<!-- Modernizr JS -->
	<script src="../files/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<style>
	@media (min-width: 767px) {
		.mi-clase-dropdown {
			position: fixed !important;
			left: 0 !important;
			right: 0 !important;
			top: 90px !important;
			width: 100% !important;
		}
	}
</style>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav  bg-white " role="navigation">
			<div class="container">
				<div class="row  ">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html" class="text-dark">Wedding<strong>.</strong></a></div>
					</div>
					<div class="col-xs-10 text-right text-dark menu-1">
						<ul>
							<li id="nav-principal"><a href="principal.php">INICIO</a></li>
							<li id="nav-consejos"><a href="consejos.php">CONSEJOS</a></li>

							<li id="nav-proveedores" class="has-dropdown">
								<a href="proveedores.php">PROVEEDORES</a>
								<ul class="dropdown mi-clase-dropdown">
									<div class="row container">
										<div class="col-12 col-md-3">
											<li><a href="#">invitaciones</a></li>
											<li><a href="#">fotografos</a></li>
											<li><a href="#">videos</a></li>
											<li><a href="#">Musica</a></li>
										</div>
										<div class="col-12 col-md-3">
											<li><a href="#">invitaciones</a></li>
											<li><a href="#">fotografos</a></li>
											<li><a href="#">videos</a></li>
											<li><a href="#">Musica</a></li>
										</div>
										<div class="col-12 col-md-3">
											<li><a href="#">invitaciones</a></li>
											<li><a href="#">fotografos</a></li>
											<li><a href="#">videos</a></li>
											<li><a href="#">Musica</a></li>
										</div>
										<div class="col-12 col-md-3">
											<li><a href="#">invitaciones</a></li>
											<li><a href="#">fotografos</a></li>
											<li><a href="#">videos</a></li>
											<li><a href="#">Musica</a></li>
										</div>
									</div>
								</ul>
							</li>
							<?php if((!isset($_SESSION['nombre'])) || (!isset($_SESSION['nombre_novio'])) ) {?>
								<li id="nav-registroBoda" class="has-dropdown">
									<a href="formRegistroboda.php">REGISTRO DE BODA</a>
								</li>						
							<?php }else{?>
								<li id="nav-registroBoda" class="has-dropdown">
									<a href="registroBoda.php">MI BODA</a>
								</li>
							<?php }?>

							<li id="nav-contacto"><a href="contacto.php">CONTACTO</a></li>

							<input type="hidden" name="idUser" value="<?=isset($_SESSION["id_usuario"])?$_SESSION["id_usuario"] : 0;?>">
							<?php if(!isset($_SESSION['id_usuario'])) {?>
								<li id="nav-login"><a href="login.php">LOGIN</a></li>
							<?php }else {?>
								<li id="" class="has-dropdown">
									<a href="#"><?=$_SESSION["nombre"];?></a>
									<ul class="dropdown" style="width:15rem">
										<?php if(isset($_SESSION["tipo_usuario"]) && $_SESSION["tipo_usuario"] == "proveedor"): ?>
											<li><a href="../../back/vistas/viperfil_proveedor.php">Ir a mi espacio</a></li>
										<?php endif;?>
										<li><a href="../ajax/usuario.php?op=salir">Cerrar Sesion</a></li>						
									</ul>
								</li>
							<?php }?>
							
						</ul>
					</div>
				</div>

			</div>
		</nav>

