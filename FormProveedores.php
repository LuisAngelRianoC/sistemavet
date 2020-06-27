<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Proveedores</title>
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
				<h1 class="h1">Formulario de Proveedores</h1>
			</center>
		</div>

		<div class="cajatabla">
			<center>
				<form class="formdatos" method="POST" action="">
					<input class="input" name="nom" type="text" placeholder="Nombre" required autofocus>
					<input class="input" name="dir" type="text" placeholder="Direccion"required>
					<input class="input" name="correo" type="email" placeholder="&#128231; Correo"required>
					<input class="input" name="tel" type="tel" placeholder="&#128222; Telefono"required>

					<?php 

					include("conexionbd.php");

					if (isset($_POST['agregar'])) {
						if (strlen($_POST['nom']) >= 1 && strlen($_POST['tel']) >= 1) {

							$nom=$_POST['nom'];
							$dir=$_POST['dir'];
							$correo=$_POST['correo'];
							$tel=$_POST['tel'];

							$consulta= "INSERT INTO proveedor (NombrePro,Telefono,Direccion,Correo) VALUES ('$nom','$tel','$dir','$correo')";
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
							echo "Ingresar la nombre y el telefono";
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
				<a class="btn" href="Proveedores.php">Regresar</a>
			</center>
		</div>
	</div>	
</body>
</html>