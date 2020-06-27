
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Proveedores</title>
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
				<li><a href="Clientes.php">Clientes</a></li>
				<li><a href="Citas.php">Citas</a></li>
				<li><a href="Diagnosticos.php">Diagnosticos</a></li>
				<li><a href="Stock.php">Stock</a></li>
				<li>Proveedores</li>
				<li><a href="Ajustes.php">Ajustes</a></li>
				<li><a href="index.php">Salir</a></li>
			</ul>
		</div>
	</div>

	<div class="caja">

		<div class="cajatop">
			<!-- <input type="text" name="buscar" placeholder="Buscar"> Barra buscadora actualizacion-->
			<center>
				<h1 class="h1">Proveedores</h1>
			</center>

		</div>

		<div class="cajatabla">
			<center>
				<table style="width: 90%" class="tablacliente">


					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>DIRECCION</th>
						<TH>CORREO</TH>
						<th>TELEFONO</th>
					</tr>

					<?php 
					if (isset($_POST['consulta'])) {
						include ("conexionbd.php");

						$nombre=$_POST['consulta'];


						$resultados=mysqli_query($conn,'SELECT * FROM proveedor');
						while ($consulta=mysqli_fetch_array($resultados)) {
							?>

							<tr>
								<td><?php echo $consulta['IdPro'] ?></td>
								<td><?php echo $consulta['NombrePro'] ?></td>
								<td><?php echo $consulta['Telefono'] ?></td>
								<td><?php echo $consulta['Direccion'] ?></td>
								<td><?php echo $consulta['Correo'] ?></td>
							</tr>
							<?php 
						}
					}
					?>
				</table>
			</center>
			
		</div>
		
		<div class="cajabotton" >
			
			<form action="" method="POST">
				<input class="btn" type="submit" name="consulta" value="Mostrar">
				<a class="btn" href="FormProveedores.php">Agregar</a>
			</form>
		</div>	
	</body>
	</html>

	
	