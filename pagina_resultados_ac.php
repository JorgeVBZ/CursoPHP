<?php

$busqueda=$_GET["buscar"];

require("datos_conexion.php");

$conexion=mysqli_connect($db_host,$db_user,$db_pass);

if(mysqli_connect_errno()){

  echo "Fallo al conectar con la BBDD";

  exit();

}
mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

mysqli_set_charset($conexion,"utf8");

$query="SELECT * FROM productos WHERE nombre_articulo LIKE '%$busqueda%'";

$resultados=mysqli_query($conexion,$query);//record set ó resulset

while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

  //echo "<table><tr><td>";

  echo "<form action='actualizar.php' method='get'>";

  echo "<input type='int' name='id' value=' ". $fila['id'] . "'><br>";
  echo "<input type='text' name='seccion' value=' ". $fila['seccion'] . "'><br>";
  echo "<input type='text' name='n_art' value=' ". $fila['nombre_articulo'] . "'><br>";
  echo "<input type='float' name='precio' value=' ". $fila['precio'] . "'><br>";
  echo "<input type='text' name='p_orig' value=' ". $fila['pais_de_origen'] . "'><br>";
  echo "<input type='text' name='fecha' value=' ". $fila['fecha'] . "'><br>";

  echo "<input type='submit' name='enviando' value='Actualizar!'>";
  echo "</form>";

}

mysqli_close($conexion);


?>
