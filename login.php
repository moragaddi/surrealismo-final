<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Iniciar sesión - Vanguardia Minimalista</title>
</head>

<body>

<?php
$usuario=$_POST['usuario'];
$clave=md5($_POST['clave']);

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT nombre, email FROM usuarios WHERE usuario='$usuario' AND clave='$clave'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_assoc($consulta);
	
	$_SESSION['nombre']=$respuesta['nombre'];		
		
		echo "<a href='panel.php'>Panel</a>";	

}else{
	echo "No es un usuario registrado";
	include ("form_registro.php");
}


header("Location:panel.php");


?>

</body>
</html>