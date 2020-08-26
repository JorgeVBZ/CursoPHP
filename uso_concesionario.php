<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      include ("concesionario.php");

      //Compra_vehiculo::$ayuda=10000;
      Compra_vehiculo::descuento_gobierno();

      $compra_Jaime=new Compra_vehiculo("compacto");
      $compra_Jaime->climatizador();
      $compra_Jaime->tapiceria_cuero("blanco");
      echo $compra_Jaime->precio_final() . "<br>";

      $compra_Maria=new Compra_vehiculo("compacto");
      $compra_Maria->climatizador();
      $compra_Maria->tapiceria_cuero("rojo");
      echo $compra_Maria->precio_final() . "<br>";

     ?>
  </body>
</html>
