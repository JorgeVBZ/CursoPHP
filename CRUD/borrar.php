<?php

    include("conexion.php");

    $id=$_GET["id"];

    $base->query("DELETE from datos_usuarios WHERE id='$id'");

    header("location:index.php");

?>