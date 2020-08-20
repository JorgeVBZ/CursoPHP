<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .resaltar{
        color:#F00;
        font-weight:bold;
      }
    </style>
  </head>
  <body>
    <?php
    /*
      $nombre="Jorge";
      //No se admiten comillas igualkes dentro de unas comiilas,
      //simples o dobles
      echo "<p class='resaltar'>Esto es un ejemplo de frase<p/>";
      echo "<p class=\"resaltar\">Esto es un ejemplo de frase<p/>";
      echo "Hola $nombre <br/>";
*/
      $variable1="Casa";
      $variable2="CASA";

      $resultado=strcmp($variable1,$variable2);//return 1(true) !=,0 =
      //$resultado=strcasecmp($variable1,$variable2);//return 1 !=, 0 =


      if(!$resultado){//0
        echo "Coinciden";
      }else{
        echo "No coinciden";
      }


     ?>
  </body>
</html>
