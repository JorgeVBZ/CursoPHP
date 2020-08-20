<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      function cambia_mayus(&$param){//paso por referencia

        $param=strtolower($param);
        $param=ucwords($param);

        return $param;
      }

      $cadena="hOlA mUnDo";

      echo cambia_mayus($cadena) . "<br>";

      echo $cadena;



     ?>
  </body>
</html>
