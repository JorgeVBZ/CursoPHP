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

      $query="UPDATE `productos` SET id=$id,seccion='$sec',nombre_articulo='$nom',precio=$pre,fecha='$fec',pais_de_origen='$por' WHERE id=$id";

      $resultados=mysqli_query($conexion,$query);//record set ó resulset

      if($resultados==false){
        echo "Error en la consulta :(";
      }else{
        echo "Registro guardado con éxito :)<br><br>";
        echo "<table><tr><td>$sec</td></tr>";
        echo "<tr><td>$nom</td></tr>";
        echo "<tr><td>$pre</td></tr>";
        echo "<tr><td>$fec</td></tr>";
        echo "<tr><td>$por</td></tr></table>";

      }

      mysqli_close($conexion);



    ?>
  </body>
</html>
