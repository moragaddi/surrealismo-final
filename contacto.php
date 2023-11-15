<?php
$conexion = mysqli_connect ("localhost", "root", "", "pd3") or die ('No se pudo conectar al servidor')

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$tema = $_POST['tema'];
$mensaje = $_POST['mensaje'];

// Configurar los detalles del correo electrónico
$destinatario = 'morigaddi@hotmail.com';
$asunto = 'Nuevo mensaje de contacto';
$cuerpo = "Nombre: $nombre\n\nEmail: $email\n\nTelefono: $telefono\n\nTema: $tema\n\nMensaje:\n$mensaje";

// Enviar el correo electrónico
mail($destinatario, $asunto, $cuerpo);

// Redirigir al usuario a una página de confirmación
header('Location: enviado.html');
?>
