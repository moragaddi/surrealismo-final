<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro - Surrealismo</title>
</head>

<body>

<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$clave = md5($_POST['clave']);



	include("conexion.php");


	$consulta = mysqli_query($conexion, "INSERT INTO usuarios (nombre, email, usuario, clave) VALUES('$nombre','$email','$usuario', '$clave')");


	header("Location:form_login.php");

?>	
    

</body>
</html>