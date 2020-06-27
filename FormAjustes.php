<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajustes</title>
	<link rel="stylesheet" type="text/css" href="css/estilos_menu.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_tablas.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_cajas.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_form.css">
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
				<h1 class="h1">Formulario de Ajustes</h1>
			</center>
		</div>

		<div class="cajatabla">
			<center>
				<form class="formdatos" action="">
					<input class="input" name="" type="text" placeholder="Nombre Medico"required autofocus>
					<input class="input" name="" type="text" placeholder="Direccion"required>
					<input class="input" name="" type="tel" placeholder="&#128222; Telefono"required>
					<input class="input" name="" type="email" placeholder="&#128231; Correo"required>
					<input class="input" name="" type="password" placeholder="&#128274; Contraseña"required>
				</form>
				<div class="btonform">
					<input class="btnsubmit" name="actualizar" type="submit" value="Actualizar">
					<input class="btnreset" type="reset" value="Limpiar">
				</div>
			</center>
		</div>
		
		<div class="cajabotton">
			<center>
				<a class="btn" href="Ajustes.php">Regresar</a>
			</center>
		</div>
	</div>	
</body>
</html>