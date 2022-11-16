<?php require_once 'header.php'; ?>

<div class="fh5co-section section-padding wrapper" style="background:#FBD2D0;">
	<div class="container">
		<div class="row">
			<div class="rounded-lg col-md-6 animate-box" style="background: #fff;
    margin-top: 50px;
	padding-top: 20px;
	box-shadow:0px 0px 10px 0px rgba(0, 0, 0, 0.4);">
				<h3>Contáctenos</h3>
				<form name="formularioContacto" id="formularioContacto">
					<div class="row form-group">
						<div class="col-md-6 ">
							<label for="fname">Nombre: </label>
							<input type="text" name="fname" id="fname" class="form-control" placeholder="Nombre" required>
						</div>
						<div class="col-md-6">
							<label for="lname">Apellidos: </label>
							<input type="text" name="lname" id="lname" class="form-control" placeholder="Apellidos" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-7">
							<label for="email">Email: </label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
						</div>
						<div class="col-md-">
							<label for="phone">Teléfono: </label>
							<input type="text" name="phone" id="phone" class="form-control" placeholder="Teléfono">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="message">Mensaje: </label>
							<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Escribe tu mensaje" required></textarea>
						</div>
					</div>

					<div class="form-group">
						<input type="submit" value="Enviar Mensaje" class="btn btn-primary">
					</div>

				</form>
			</div>
			<div class="offset-md-1 rounded col-md-4 animate-box " style="background: #fff; 
    padding-top: 20px;
    margin-top: 50px;
	box-shadow:0px 0px 10px 0px rgba(0, 0, 0, 0.4);
	">

				<div class="fh5co-contact-info">
					<h3>Informacion de contacto</h3>
					<ul>
						<li class="address">Srcre-Bolivia, <br>Calle Loa 45 </li>
						<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
					</ul>
				</div>

			</div>
		</div>

	</div>
</div>

<?php require_once 'footer.php'; ?>

<script src="../js/contacto.js"></script>

<script>
	$("#nav-contacto").addClass("active");
</script>