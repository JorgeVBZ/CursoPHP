<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table{
        width: 50%;
        border: 1px dotted #FF0000;
        margin: auto;
      }
    </style>
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

      $query="SELECT * FROM datos_personales WHERE Edad<'30'";//Filtro

      $resultados=mysqli_query($conexion,$query);//record set ó resulset

      while($fila=mysqli_fetch_row($resultados)){

        echo "<table><tr><td>";

        echo $fila[0] . "</td><td> ";
        echo $fila[1] . "</td><td> ";
        echo $fila[2] . "</td><td> ";
        echo $fila[3] . "</td><td></tr></table>";
        echo "<br>";

      }

      mysqli_close($conexion);


     ?>
  </body>
</html>
