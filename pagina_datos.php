<?php

$usuario=$_GET["usu"];
$contra=$_GET["con"];

require("datos_conexion.php");

$conexion=mysqli_connect($db_host,$db_user,$db_pass);

if(mysqli_connect_errno()){

  echo "Fallo al conectar con la BBDD";

  exit();

}
mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

mysqli_set_charset($conexion,"utf8");

//$query="SELECT * FROM productos WHERE nombre_articulo LIKE '%$busqueda%'";
$query="SELECT * FROM usuarios WHERE usuario = '$usuario' and contra = '$contra'";
echo "$query<br><br>";

$resultados=mysqli_query($conexion,$query);//record set ó resulset

while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

    echo "Bienvenido $usuario,<br>Estos son tus datos:<br>";

  echo "<table><tr><td>";

  echo $fila['usuario'] . "</td><td> ";
  echo $fila['contra'] . "</td><td> ";
  echo $fila['tfno'] . "</td><td> ";
  echo $fila['direccion'] . "</td><td></tr></table>";
  echo "<br>";

}

mysqli_close($conexion);

?>
