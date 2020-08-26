<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php

    function ejecuta_consulta($labusqueda){

      require("datos_conexion.php");

      $conexion=mysqli_connect($db_host,$db_user,$db_pass);

      if(mysqli_connect_errno()){

        echo "Fallo al conectar con la BBDD";

        exit();

      }

      mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

      mysqli_set_charset($conexion,"utf8");

      $query="SELECT * FROM productos WHERE nombre_articulo LIKE '%$labusqueda%'";

      $resultados=mysqli_query($conexion,$query);//record set ó resulset

      while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

        echo "<table><tr><td>";

        echo $fila['seccion'] . "</td><td> ";
        echo $fila['nombre_articulo'] . "</td><td> ";
        echo $fila['precio'] . "</td><td> ";
        echo $fila['pais_de_origen'] . "</td><td></tr></table>";
        echo "<br>";

      }

      mysqli_close($conexion);

    }

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
