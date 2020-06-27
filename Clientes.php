<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clientes</title>
	<link rel="stylesheet" type="text/css" href="css/estilos_menu.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_cajas.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_tablas.css">
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
				<h1 class="h1">Clientes</h1>
			</center>
		</div>

		<div class="cajatabla">
			<center>
				<table style="width: 90%" class="tablacliente">
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>APELLIDOP</th>
						<TH>APELLIDOM</TH>
						<th>TELEFONO</th>
						<TH>DIRECCION</TH>
						<th>IDUSUARIO</th>
					</tr>
					<?php 
					if (isset($_POST['consulta'])) {
						include ("conexionbd.php");
						$nombre=$_POST['consulta'];

						$resultados=mysqli_query($conn,'SELECT * FROM cliente');
						while ($consulta=mysqli_fetch_array($resultados)) {
							?>
							<tr>
								<td><?php echo $consulta['IdCliente'] ?></td>
								<td><?php echo $consulta['Nombre'] ?></td>
								<td><?php echo $consulta['ApellidoP'] ?></td>
								<td><?php echo $consulta['ApellidoM'] ?></td>
								<td><?php echo $consulta['Telefono'] ?></td>
								<td><?php echo $consulta['Direccion'] ?></td>
								<td><?php echo $consulta['IdUsuario'] ?></td>
							</tr>
							<?php 
						}
					}
					?>
				</table>
			</center>
			
		</div>
		
		<div class="cajabotton">
			<form action="" method="POST">
				<input class="btn" type="submit" name="consulta" value="Mostrar">
			</form>
		</div>	
	</body>
	</html>