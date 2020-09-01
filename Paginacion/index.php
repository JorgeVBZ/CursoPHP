<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

try {

    $base=new PDO("mysql:host=localhost;dbname=pruebas","root","");
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    $tamaño_paginas=3;

    if(isset($_GET["pagina"])){

        if($_GET["pagina"]==1){

            header("location:index.php");

        }else{

            $pagina=$_GET["pagina"];

        }
    }else{
        $pagina=1;
    }

    $empezar_desde=($pagina-1)*$tamaño_paginas;

    $sql_total="SELECT nombre_articulo,seccion,precio,pais_de_origen FROM productos WHERE seccion='Deporte'";

    $resultado=$base->prepare($sql_total);

    $resultado->execute(array());

    $num_registros=$resultado->rowCount();

    $total_paginas=ceil($num_registros/$tamaño_paginas);
    
    $resultado->closeCursor();

    $sql_limite="SELECT nombre_articulo,seccion,precio,pais_de_origen FROM productos WHERE seccion='Deporte' LIMIT $empezar_desde,$tamaño_paginas";

    $resultado=$base->prepare($sql_limite);

    $resultado->execute(array());

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

        echo "Nombre Artículo: " . $registro["nombre_articulo"] . " Sección: " . $registro["seccion"] . " Precio: " . $registro["precio"] . 
        " País: " . $registro["pais_de_origen"] . "<br>";

   }

   echo "Numero de registros de la consulta: " . $num_registros . "<br><br>";
   echo "Mostramos " . $tamaño_paginas . " registros por página <br><br>";
   echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<br><br>";

   //------------------------------------------------PAGINACION---------------------------------------------------------------------------------

   for($i=1;$i<=$total_paginas;$i++){

    echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";

   }



























} catch (Exception $e) {
    echo "Línea del error: " . $e->getLine();
}


?>


</body>
</html>