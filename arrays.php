<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

/*ARRAY INDEXADO
      $semana[0]="Lunes";
      $semana[1]="Martes";
      $semana[2]="Miércoles";


      $semana=array("Lunes","Martes","Miércoles","Jueves");
      //echo $semana[3];


//Array Asociativo
      $datos=array("Nombre"=>"Jorge","Apellido"=>"Villacastín","Edad"=>24);
      //$datos="Martin";
/*
      if(is_array($datos)){
        echo "Es un array<br>";
      }else{
        echo "No es un array<br>";
      }

      //echo $datos["Apellido"];

      //Recorrer array asociativo
      foreach ($datos as $key => $value) {
        echo "A $key le corresponde $value<br>";
      }

      //Recorrer array indexado
      for($i=0;$i<count($semana);$i++){
        echo $semana[$i] . "<br>";
      }

      //Agregar elementos a un array indexado
      $semana[]="Viernes";

      for($i=0;$i<count($semana);$i++){
        echo $semana[$i] . "<br>";
      }

      //Agregar elementos a un array asociativo
      $datos["País"]="España";

      //Recorrer array asociativo
      foreach ($datos as $key => $value) {
        echo "A $key le corresponde $value<br>";
      }

*/
      //Ordenar array indexado orden alfabético
      $semana=array("Lunes","Martes","Miércoles","Jueves");

      sort($semana);

      for($i=0;$i<count($semana);$i++){
        echo $semana[$i] . "<br>";
      }

     ?>
  </body>
</html>
