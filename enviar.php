<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar - Surrealismo</title>
</head>

<body>
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST["telefono"];
$tema=$_POST["tema"];
$mensaje=$_POST["mensaje"];

$destino="mail@mail.com";
$asunto="Contacto desde el sitio";
$mensaje="Nombre: ".$nombre." Email: ".$email. "Telefono: ".$telefono. "Tema: ".$tema." Mensaje: ".$mensaje;

$header="From: ".$nombre."<".$email.">";

/*
$enviado = mail($destino,$asunto,$mensaje,$header);
*/

/*
if($enviado == true){
	echo "Su correo ha sido enviado.";
}else{
	echo "Hubo un error en el envio del mail.";
}
*/

include ("conexion.php");


// $consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$mensaje')");

$consulta = mysqli_query($conexion, "INSERT INTO contacto (nombre,email,telefono,tema, mensaje) VALUES ( '$nombre','$email','$telefono','$tema','$mensaje')") or die(mysqli_error($conexion));

header("Location:enviado.html")

?>
</body>
</html>