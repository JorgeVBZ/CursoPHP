<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
    
<?php

    $conexion=new mysqli("localhost","root","","pruebas");

    if($conexion->connect_errno){
        echo "Falló la conexión" . $conexion->connect_errno;
    }

    //mysqli_set_charset($conexion,"utf8"); FORMA PROCEDIMENTAL
    $conexion->set_charset("utf8"); //FORMA Orientada a Objetos

    $sql="SELECT * FROM productos";

    //$resultados=mysqli_query($conexion,$sql); FORMA PROCEDIMENTAL
    $resultado=$conexion->query($sql);

    if($conexion->errno){
        die($conexion->error);
    }
/*FORMA PROCEDIMENTAL
    while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){

    }
*/
    while($fila=$resultado->fetch_assoc()){
        echo "<table><tr><td>";
        echo $fila['seccion'] . "</td><td> ";
        echo $fila['nombre_articulo'] . "</td><td> ";
        echo $fila['precio'] . "</td><td> ";
        echo $fila['pais_de_origen'] . "</td><td></tr></table>";
        echo "<br>";
    }
    //mysqli_close($conexion);//FORMA PROCEDIMENTAL
    $conexion->close();


?>

</body>
</html>
