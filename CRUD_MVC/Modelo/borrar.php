<?php

    include("conexion.php");

    $id=$_GET["id"];

    $conexion->query("DELETE from datos_usuarios WHERE id='$id'");

    header("location:index.php");

?>