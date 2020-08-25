<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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

      $query="INSERT INTO productos (seccion,nombre_articulo,precio) VALUES ('Deportes','Raqueta de Badminton',39.99)";

      $resultados=mysqli_query($conexion,$query);//record set ó resulset

      mysqli_close($conexion);



    ?>
  </head>
  <body>

    <?php

      @$mibusqueda=$_GET["buscar"];
      $mipagina=$_SERVER["PHP_SELF"];

      if($mibusqueda != NULL){
        ejecuta_consulta($mibusqueda);
      }else{
        echo("<form action='" . $mipagina . "'method='get'>
        <label>Buscar:<input type='text' name='buscar'></label>
        <input type='submit' name='enviando' value='Dale!'>
        </form>");
      }

     ?>
  </body>
</html>
