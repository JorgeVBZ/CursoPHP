<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php

        
        $seccion=$_GET["secc"];
        $n_art=$_GET["n_art"];
        $precio=$_GET["pre"];
        $fecha=$_GET["fec"];
        $p_ori=$_GET["p_ori"];

        require("datos_conexion.php");

        $conexion=mysqli_connect($db_host,$db_user,$db_pass);

        if(mysqli_connect_errno()){

            echo "Fallo al conectar con la BBDD";

            exit();

        }

        mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

        mysqli_set_charset($conexion,"utf8");

        $sql="INSERT INTO productos (seccion,nombre_articulo,precio,fecha,pais_de_origen) VALUES (?,?,?,?,?)";

        $resultado=mysqli_prepare($conexion,$sql);
        
        $ok=mysqli_stmt_bind_param($resultado,"ssdss",$seccion,$n_art,$precio,$fecha,$p_ori);

        $ok=mysqli_stmt_execute($resultado);

        if($ok==false){
            echo "Error al ejecutar la consulta";
        }else{
            
            echo "Agregado nuevo registro<br>";

            echo "Artículo añadido:<br>";

            echo "Sección: $seccion <br>
            Nombre: $n_art <br>
            Precio: $precio <br>
            Fecha: $fecha <br>
            País de origen: $p_ori";

            mysqli_stmt_close($resultado);
            
        }


      ?>



  </body>
</html>
