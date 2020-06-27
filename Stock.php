<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Stock</title>
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
				<li>Stock</li>
				<li><a href="Proveedores.php">Proveedores</a></li>
				<li><a href="Ajustes.php">Ajustes</a></li>
				<li><a href="index.php">Salir</a></li>
			</ul>
		</div>
	</div>

	<div class="caja">

		<div class="cajatop">
			<center>
				<h1 class="h1">Stock</h1>
			</center>
		</div>

		<div class="cajatabla">
			<center>
				<table class="tablacliente" style="width: 90%">
					<tr>
						<th>ID</th>
						<th>NOMBRE</th>
						<th>CANTIDAD</th>
						<TH>CATEGORIA</TH>
						<th>FECHA LLEGADA</th>
						<th>COSTO</th>
						<th>PRECIO</th>
					</tr>

					<?php 
					if (isset($_POST['consulta'])) {
						include ("conexionbd.php");
						$nombre=$_POST['consulta'];

						$resultados=mysqli_query($conn,'SELECT * FROM medicamento');
						while ($consulta=mysqli_fetch_array($resultados)) {
							?>
							<tr>
								<td><?php echo $consulta['IdMedicamento'] ?></td>
								<td><?php echo $consulta['NombreMedicamento'] ?></td>
								<td>2</td>
								<!-- <td><?php echo $consulta['Cantidad'] ?></td>  -->
								<td><?php echo $consulta['IdCategoria'] ?></td>
								<td><?php echo $consulta['Fecha'] ?></td>
								<td>$<?php echo $consulta['Costo'] ?></td>
								<td>$<?php echo $consulta['Precio'] ?></td>
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
				<a class="btn" href="FormStock.php">Agregar</a>
				<a class="btn" href="FormStockAc.php">Actualizar</a>
			</form>
		</div>
	</div>	
</body>

</html>