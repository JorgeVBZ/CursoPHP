<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $nombre="Jorge";

    //include ("datos_otros.php");

    function dameNombre(){

      global $nombre;//Importante para que sea global y sobreescriba.

      $nombre="El nombre es " . $nombre;
    }

    dameNombre();//no reasigna "Maria" a la variable $nombre global

    echo $nombre;

     ?>
  </body>
</html>
