<?php

    require_once("conexion.php");

    $base=Conectar::conexion();

    //----------------------------------------------PAGINACION--------------------------------------------------------------------

    $tamaño_paginas=3;

    if(isset($_GET["pagina"])){

        if($_GET["pagina"]==1){

            header("location:index.php");

        }else{

            $pagina=$_GET["pagina"];

        }
    }else{
        $pagina=1;
    }

    $empezar_desde=($pagina-1)*$tamaño_paginas;

    $sql_total="SELECT * FROM datos_usuarios";

    $resultado=$base->prepare($sql_total);

    $resultado->execute(array());

    $num_registros=$resultado->rowCount();

    $total_paginas=ceil($num_registros/$tamaño_paginas);

    //------------------------------------------------------------------------------------------------------------------------------


?>