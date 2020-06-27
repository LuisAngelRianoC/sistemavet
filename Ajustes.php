<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajustes</title>
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
				<li><a href="Proveedores.php">Proveedores</a></li>
				<li>Ajustes</li>
				<li><a href="index.php">Salir</a></li>
			</ul>
		</div>
	</div>

	<div class="caja">

		<div class="cajatop">
			<center>
				<h1 class="h1">Ajustes</h1>
			</center>
		</div>

		<div class="cajatabla">
			<center>
				<table style="width: 90%" class="tablacliente">
					<tr>
						<th>NOMBRE</th>
						<td>VET.MENDOZA</td>
					</tr>
					<TR>
						<th>TELEFONO</th>
						<td>7441767228</td>
					</TR>
					<tr>
						<th>DIRECCION</th>
						<td>NABOR OJEDA</td>
					</tr>
					<tr>
						<th>MEDICO</th>
						<td>JOSE PARRA MENDOZA</td>
					</tr>
					<TR>
						<th>CORREO</th>
						<td>VETMENDOZA.COM</td>
					</TR>
					<TR>
						<th>CONTRASEÑA</th>
						<td>123456</td>
					</TR>
				</table>
			</center>	
		</div>
		
		<div class="cajabotton">
			<form action="" method="POST">
				<a class="btn" href="FormAjustes.html">Modificar</a>
			</form>
			
		</div>	
	</div>
</body>
</html>