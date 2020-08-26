<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $id=$_GET["id"];
      $sec=$_GET["seccion"];
      $nom=$_GET["n_art"];
      $pre=$_GET["precio"];
      $fec=$_GET["fecha"];
      $por=$_GET["p_orig"];

      require("datos_conexion.php");

      $conexion=mysqli_connect($db_host,$db_user,$db_pass);

      if(mysqli_connect_errno()){

        echo "Fallo al conectar con la BBDD";

        exit();

      }

      mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

      mysqli_set_charset($conexion,"utf8");

      $query="DELETE FROM productos WHERE id=$id";

      $resultados=mysqli_query($conexion,$query);//record set ó resulset

      if($resultados==false){
        echo "Error en la consulta :(";
      }else{
        //echo "Registro eliminado con éxito :)<br><br>";
        //echo mysqli_affected_rows($conexion);
        if(mysqli_affected_rows($conexion)==0){
          echo "No hay registros que eliminar con dicho ID<br>";

        }else if(mysqli_affected_rows($conexion)==1){
          echo "Se ha eliminado " . mysqli_affected_rows($conexion) . " registro";
        }
        else{
          echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros";
        }
      }

      mysqli_close($conexion);



    ?>
  </body>
</html>
