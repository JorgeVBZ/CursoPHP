<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php

        $pais=$_GET["buscar"];

        require("datos_conexion.php");

        $conexion=mysqli_connect($db_host,$db_user,$db_pass);

        if(mysqli_connect_errno()){

            echo "Fallo al conectar con la BBDD";

            exit();

        }

        mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

        mysqli_set_charset($conexion,"utf8");

        $sql="SELECT id,seccion,nombre_articulo,pais_de_origen,precio FROM productos WHERE pais_de_origen=?";

        $resultado=mysqli_prepare($conexion,$sql);

        $ok=mysqli_stmt_bind_param($resultado,"s",$pais);

        $ok=mysqli_stmt_execute($resultado);

        if($ok==false){
            echo "Error al ejecutar la consulta";
        }else{
            $ok=mysqli_stmt_bind_result($resultado,$id,$sec,$nom,$pais,$pre);
            echo "Artículos encontrados:<br><br>";

            while(mysqli_stmt_fetch($resultado)){
                echo $id . " " . $sec . " " . $nom . " " . $pais . " " . $pre . "<br>";
            }
            mysqli_stmt_close($resultado);
            
        }


      ?>



  </body>
</html>
