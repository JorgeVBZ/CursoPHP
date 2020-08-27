<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php

    $busqueda_sec=$_POST["seccion"];
    $busqueda_nart=$_POST["n_art"];
    $busqueda_fec=$_POST["fecha"];
    $busqueda_porig=$_POST["p_orig"];
    $busqueda_precio=$_POST["precio"];
    

    try{
        $base=new PDO('mysql:host=localhost; dbname=pruebas','root','');

        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql="INSERT INTO productos (seccion,nombre_articulo,fecha,pais_de_origen,precio) VALUES (:seccion,:n_art,:fecha,:p_orig,:precio)";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":seccion"=>$busqueda_sec,":n_art"=>$busqueda_nart,":fecha"=>$busqueda_fec,":p_orig"=>$busqueda_porig,
        ":precio"=>$busqueda_precio));

        echo "Registro insertado con éxito.";

        $resultado->closeCursor();

    }catch(Exception $e){
        die("Error:" . $e->GetMessage());
    }finally{
        $base=null;
    }

?>



</body>
</html>