<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php

    $busqueda_sec=$_GET["seccion"];
    $busqueda_porig=$_GET["p_orig"];

    try{
        $base=new PDO('mysql:host=localhost; dbname=pruebas','root','');

        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql="SELECT id,seccion,nombre_articulo,pais_de_origen,precio FROM productos WHERE seccion = :secc AND pais_de_origen = :porig";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":secc"=>$busqueda_sec,":porig"=>$busqueda_porig));

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            echo "ID: " . $registro['id'] . " Sección: " . $registro['seccion'] . " Nombre Artículo: " . $registro['nombre_articulo'] . 
            " País de Origen: " . $registro['pais_de_origen'] . " Precio: " . $registro['precio'] . "<br>";
        }

        $resultado->closeCursor();



    }catch(Exception $e){
        die("Error:" . $e->GetMessage());
    }finally{
        $base=null;
    }

?>



</body>
</html>