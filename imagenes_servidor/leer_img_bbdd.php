<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_user,$db_pass);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la BBDD";

        exit();

    }
      
    mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

    mysqli_set_charset($conexion,"utf8");

    $consulta="SELECT foto FROM productos WHERE id=1";

    $resultado=mysqli_query($conexion,$consulta);

    while($fila=mysqli_fetch_array($resultado)){
        
        $ruta_img=$fila["foto"];

    }


?>

<div>

    <img src="/uploads/<?php echo $ruta_img?>" alt="Imagen del primer artículo" width="50%">

</div>



</body>
</html>