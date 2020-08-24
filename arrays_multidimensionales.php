<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                    "citrico"=>"mandarina",
                                    "otros"=>"manzana"),

                       "leche"=>array("animal"=>"vaca",
                                   "vegetal"=>"coco"),

                      "carne"=>array("vacuno"=>"lomo",
                                   "porcino"=>"pata")
                  );

      //echo $alimentos["carne"]["vacuno"];
/*
      foreach ($alimentos as $clave_alim => $valor_alim) {

        echo "$clave_alim:<br>";
        while(list($clave,$valor)=each($valor_alim)){
          echo "$clave=$valor<br>";
        }
        echo "<br>";
      }
*/
      //Forma mas sencilla
      echo var_dump($alimentos);
















     ?>
  </body>
</html>
