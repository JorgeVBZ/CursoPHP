<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      echo "Este es el primer mensaje<br/>";

      include ("proporciona_datos.php");//Tambien require, mas estricto

      echo "Este es el segundo mensaje<br/>";

      dameDatos();

    ?>
  </body>
</html>
