<?php
session_start();

require 'conexionbd.php';

if (isset($_SESSION['user_id'])) 
{
	$records = $conn->prepare('SELECT IdUsuario, NombreUsuario, Contraseña FROM usuario WHERE IdUsuario = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = null;

	if (count($results) > 0) 
	{
		$user = $results;
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">		
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/estilos_menu.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_tablas.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_cajas.css">
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
				<li><a href="Clientes.php">Clientes</a></li>
				<li><a href="Citas.php">Citas</a></li>
				<li><a href="Diagnosticos.php">Diagnosticos</a></li>
				<li><a href="Stock.php">Stock</a></li>
				<li><a href="Proveedores.php">Proveedores</a></li>
				<li><a href="Ajustes.php">Ajustes</a></li>
				<li><a href="index.php">Salir</a></li>
			</ul>
		</div>
	</div>

	<div class="caja">

		<div class="cajatop">
			<center>
				<h1 class="h1">Inicio</h1>
			</center>
		</div>

		<div class="cajatabla">

			<?php if(!empty($user)): ?>
				<br> Welcome. <?= $user['email']; ?>
				<br>You are Successfully Logged In
				<a href="logout.php">Logout</a>
				
			</div>
			
			<div class="cajabotton">
				
			</div>
		</div>	
	</body>
	</html>