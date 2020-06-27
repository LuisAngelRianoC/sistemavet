<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Citas</title>
	<link rel="stylesheet" type="text/css" href="css/estilos_menu.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_tablas.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_cajas.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_form.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_mensaje.css">
		<link rel="stylesheet" type="text/css" href="css/estilos_botones.css">
	<link rel="icon" type="image/png" href="img/logo/logo1.png"/>

</head>
<!--CUERPO-->
<body>

	<div class="cajamenu">
		<div>
			<center>
				<img class="imagen" src="img/logo/logo1.png" >	
			</center>
			
		</div>

		<div id="menu">
			<ul>
				<li>Clientes</li>
				<li>Citas</li>
				<li>Diagnosticos</li>
				<li>Stock</li>
				<li>Proveedores</li>
				<li>Ajustes</li>
				<li>Salir</li>
			</ul>
		</div>
	</div>

	<div class="caja">

		<div class="cajatop">
			<center>
				<h1 class="h1">Formulario de Citas Medicas</h1>
			</center>
		</div>

		<div class="cajatabla">
			<center>
				<form class="formdatos" action="" method="POST">
					<input class="input" name="asunto" type="text" placeholder="Asunto" required autofocus>
					<input class="input" name="fecha" type="date" placeholder="&#128197; Fecha" required >
					<input class="input" name="hora" type="time" placeholder="&#128337; Hora"required>
					<input class="input" name="idcliente" type="search" placeholder="&#128100; Cliente"required>

					<?php 

					include("conexionbd.php");

					if (isset($_POST['agregar'])) {
						if (strlen($_POST['fecha']) >= 1 && strlen($_POST['idcliente']) >= 1) {
							$asunto=$_POST['asunto'];
							$fecha=$_POST['fecha'];
							$hora=$_POST['hora'];
							$idcliente=$_POST['idcliente'];

							$consulta= "INSERT INTO cita (Asunto,Fecha,Hora,IdCliente) VALUES ('$asunto','$fecha','$hora','$idcliente')";
							$resultado = mysqli_query($conn,$consulta);
							if ($resultado) {
								?> 
								<h3 class="ok">¡Registro completado correctamente!</h3>
								<?php
							} else {
								?> 
								<h3 class="bad">¡Ups ha ocurrido un error!</h3>
								<?php
							}
						}   else {

							?> 
							<h3 class="bad">¡Por favor complete los campos!</h3>
							<?php
							echo "Ingresar la fecha y el cliente";
						}
					}
					?>

					<div class="btonform">
						<input class="btnsubmit" name="agregar" type="submit" value="Agregar">
						<input class="btnreset" type="reset" value="Limpiar">
					</div>
				</form>
			</center>
		</div>
		
		<div class="cajabotton">
			<center>
				<a class="btn" href="Citas.php">Regresar</a>
			</center>
		</div>
	</div>	
</body>
</html>