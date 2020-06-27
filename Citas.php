<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Citas</title>
	<link rel="stylesheet" type="text/css" href="css/estilos_menu.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_tablas.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_cajas.css">
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
				<li><a href="Clientes.php">Clientes</a></li>
				<li>Citas</li>
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
				<h1 class="h1">Citas Medicas</h1>
			</center>
		</div>
		<!-- Poner check box para validar citas-->	
		<div class="cajatabla">
			<center>
				<table class="tablacliente" style="width: 90%">
					<tr>
						<th>ID</th>
						<th>ASUNTO</th>
						<th>FECHA</th>
						<th>HORA</th>
						<TH>CLIENTE</TH>
					</tr>

					<?php 
					if (isset($_POST['consulta'])) {
						include ("conexionbd.php");
						$nombre=$_POST['consulta'];

						$resultados=mysqli_query($conn,'SELECT * FROM cita');
						while ($consulta=mysqli_fetch_array($resultados)) {
							?>
							<tr>
								<td><?php echo $consulta['IdCita'] ?></td>
								<td><?php echo $consulta['Asunto'] ?></td>
								<td><?php echo $consulta['Fecha'] ?></td>
								<td><?php echo $consulta['Hora'] ?></td>
								<td><?php echo $consulta['IdCliente'] ?></td>
							</tr>
							<?php 
						}
					}
					?>
				</table>
			</center>
		</div>
		
		<div class="cajabotton">
			<center>
			<form action="" method="POST">
				<input class="btn" type="submit" name="consulta" value="Mostrar">
				<a class="btn" href="FormCitas.php">Agregar</a>
			</form>
			</center>
									
		</div>
	</div>	
</body>
</html>