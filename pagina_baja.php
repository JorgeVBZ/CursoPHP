<?php

require("datos_conexion.php");

$conexion=mysqli_connect($db_host,$db_user,$db_pass);

$usuario=mysqli_real_escape_string($conexion,$_GET["usu"]);
$contra=mysqli_real_escape_string($conexion,$_GET["con"]);

if(mysqli_connect_errno()){

  echo "Fallo al conectar con la BBDD";

  exit();

}
mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

mysqli_set_charset($conexion,"utf8");

//$query="SELECT * FROM productos WHERE nombre_articulo LIKE '%$busqueda%'";
$query="DELETE FROM usuarios WHERE usuario = '$usuario' and contra = '$contra'";
echo "$query<br><br>";

mysqli_query($conexion,$query);

if (mysqli_affected_rows($conexion)>0) {
    echo "Baja procesada.";
}else{
    echo "No se han encontrado registros que borrar";
}


mysqli_close($conexion);

?>
