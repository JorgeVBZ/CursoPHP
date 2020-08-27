<?php

    require "devuelve_productos.php";

    $productos=new DevuelveProductos();

    $array_productos=$productos->get_productos();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<?php

    foreach($array_productos as $elemento){

        echo "<table><tr><td>";
        echo $elemento['id'] . "</td><td>";
        echo $elemento['seccion'] . "</td><td>";
        echo $elemento['nombre_articulo'] . "</td><td>";
        echo $elemento['fecha'] . "</td><td>";
        echo $elemento['pais_de_origen'] . "</td><td>";
        echo $elemento['precio'] . "</td><td></tr></table>";
        echo "<br><br>";


    }
    
?>
    


</body>
</html>
