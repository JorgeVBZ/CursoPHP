<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php

    
    $busqueda_nart=$_POST["n_art"];

    try{
        $base=new PDO('mysql:host=localhost; dbname=pruebas','root','');

        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql="DELETE FROM productos WHERE nombre_articulo=:n_art";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":n_art"=>$busqueda_nart));

        echo "Registro eliminado con éxito.";

        $resultado->closeCursor();

    }catch(Exception $e){
        die("Error:" . $e->GetMessage());
    }finally{
        $base=null;
    }

?>



</body>
</html>