<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<?php

session_start();

if(!isset($_SESSION["usuario"])){
    header("location:login.php");
}

?>

<h1>Bienvenidos usuarios!!</h1>

<?php


    echo "Usuario: " . $_SESSION["usuario"] . "<br><br>";

?>
<p>ESTO ES INFORMACIÓN EXLUSIVA PARA LOS USUARIOS REGISTRADOS :D</p>

<p><a href="cerrar_sesion.php">Cierra sesión</a></p>

<p><a href="usuarios_registrados_1.php">Volver</a></p>

</body>
</html>