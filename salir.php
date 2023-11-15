<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cerrar sesión - Surrealismo</title>
    <link rel="stylesheet"  href="css/estilos.css">
</head>

<?php
session_start();
session_destroy();

header("Location:form_login.php");
?>