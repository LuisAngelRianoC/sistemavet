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
					<input class="input" name="nombre" type="search" placeholder="Nombre" required autofocus>
					<input class="input" name="cantidad" type="number" placeholder="Cantidad" required>
					<input class="input" name="categoria" list="Categoria" placeholder="Categoria"required>
					Fecha de Entrada 
					<input class="input" name="fecha" type="date" placeholder="Fecha" required>
					<label>$<input class="input" name="costo" type="number" placeholder="Costo"required></label>
					<label>$<input class="input" name="precio" type="number" placeholder="Precio"required></label>

					<!--listado de categorias-->

						<datalist id="Categoria">
						<option value="Desinflamatorios">
						<option value="Analgésicos">
						<option value="Antiemetico">
						<option value="Antitusigenos">
						<option value="Expectorantes">
						<option value="Vitaminas">
						<option value="Antidiarreicos">
						<option value="Protectores gástricos">
						<option value="Hepatoprotectoctores">
						<option value="Sueros">
						<option value="Hormonas">
						<option value="Antihistaminico">
						<option value="Productos dermatologicos">
						</datalist>

					<?php 

					include("conexionbd.php");

					if (isset($_POST['agregar'])) {
						if (strlen($_POST['nombre']) >= 1 && strlen($_POST['categoria']) >= 1  && strlen($_POST['fecha']) >= 1) {

							$nombre=$_POST['nombre'];
							$cantidad=$_POST['cantidad'];
							$categoria=$_POST['categoria'];
							$fecha=$_POST['fecha'];
							$costo=$_POST['costo'];
							$precio=$_POST['precio'];

							$consulta= "INSERT INTO medicamento (NombreMedicamento,Cantidad,IdCategoria,Fecha,Costo,Precio) 
							VALUES ('$nombre',$cantidad,'$categoria','$fecha','$costo','$precio')";

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
						<input class="btnsubmit" name="agregar" type="submit" value="Agregar">
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