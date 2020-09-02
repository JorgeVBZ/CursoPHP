<?php

    require_once("Modelo/productos_modelo.php");

    $producto=new Productos_modelo();

    $matriz_productos=$producto->get_productos();

    require_once("Vista/productos_view.php");




?>


