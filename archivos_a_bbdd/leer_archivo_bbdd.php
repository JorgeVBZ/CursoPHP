<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $id="";
    $contenido="";
    $tipo="";

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_user,$db_pass);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la BBDD";

        exit();

    }
      
    mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

    mysqli_set_charset($conexion,"utf8");

    $consulta="SELECT * FROM archivos WHERE id=2";

    $resultado=mysqli_query($conexion,$consulta);

    while($fila=mysqli_fetch_array($resultado)){
        
        $id=$fila["id"];
        $contenido=$fila["contenido"];//Codificado en base64
        $tipo=$fila["tipo"];

    }

    echo "Id: " . $id . "<br>";
    echo "Tipo: " . $tipo . "<br>";
    echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "'>";


?>


</body>
</html>