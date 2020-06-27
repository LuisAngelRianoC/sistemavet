<?php

$server = 'localhost:3307';
$user = 'root';
$password = '';
$database = 'sistema_vet';

$conn=@mysqli_connect($server,$user,$password,$database);
if (!$conn ) {
	echo "Error en la conexion";
}

?>
