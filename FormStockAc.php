<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Stock</title>
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
				<h1 class="h1">Formulario de Stock</h1>
			</center>
		</div>

		<div class="cajatabla">
			<center>
				<form class="formdatos" action="" method="POST">
					<input class="input" name="id" type="number" placeholder="Id" required autofocus>
					<input class="input" name="cantidad" type="number" placeholder="Cantidad" required>
					Fecha de Entrada 
					<input class="input" name="fecha" type="date" placeholder="Fecha" required>
					<label>$<input class="input" name="costo" type="number" placeholder="Costo"required></label>
					<label>$<input class="input" name="precio" type="number" placeholder="Precio"required></label>

					<?php 

					include("conexionbd.php");

					if (isset($_POST['actualizar'])) {
						if (strlen($_POST['cantidad']) >= 1  && strlen($_POST['id']) >= 1) {

							$id=$_POST['id'];
							$cantidad=$_POST['cantidad'];
							$fecha=$_POST['fecha'];
							$costo=$_POST['costo'];
							$precio=$_POST['precio'];

							$consulta= "INSERT INTO medicamento (IdMedicamento,Cantidad,Fecha,Costo,Precio) 
							VALUES ($id,'$cantidad','$fecha','$costo','$precio')";

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
						}
					}

					?>

					<div class="btonform">
						<input class="btnsubmit" name="actualizar" type="submit" value="Actualizar">
						<input class="btnreset" type="reset" value="Limpiar">
					</div>
				</center>
			</form>
		</div>

		<div class="cajabotton">
			<center>
				<a class="btn" href="Stock.php">Regresar</a>
			</center>
		</div>
	</div>	
</body>
</html>