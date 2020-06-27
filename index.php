
<?php

$alerta='';

if (empty($_POST['usuario'])||empty($_POST['clave'])) 
{
	echo $alerta='ingrese ambos campos';

}else{

	if (isset($_POST['entrar'])) {
		include ("conexionbd.php");

		$user=$_POST['usuario'];
		$pass=$_POST['clave'];


		$query=mysqli_query($conn,'SELECT * FROM usuario WHERE NombreUsuario =$user');

		while ($result=mysqli_fetch_array($query)) {
			echo $result['NombreUsuario'];
		}

	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<title>Sistema Veterinario</title>
	<link rel="stylesheet" type="text/css" href="css/estilos_body.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_header.css">
	<link rel="icon" type="image/png" href="img/logo/logo1.png"/>
</head>
<!--CUERPO-->
<body>
	<!--ENCABEZADO-->
	<header>
		<center>
			<div class="logo">Bienvenido </div>	
		</center>
	</header>

	<div class="login-main">
		<center>
			<img class="logo" src="img/logo/logo1.png">
		</center>

		<form action="" method="POST">
			<img  src="img/iconos/user.png" width="30px" >
			<input type="text" name="usuario" placeholder="Usuario" class="text_input">

			<br>	
			<img src="img/iconos/pass1.png" width="30px">
			<input type="password" name="clave" placeholder="Contraseña" class="text_input">

			<center>
				<input type="submit" name="entrar" id="boton" value="Iniciar sesión">
			</center>
		</form>

	</div>	

</body>
</html>
