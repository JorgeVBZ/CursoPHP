<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Blog</h1>
<hr/>
    
<?php

    //Establezco la conexion con la BBDD
    $mi_conexion=mysqli_connect("localhost","root","","bbdd_blog");

    //Comprobar conexion a BBDD
    if(!$mi_conexion){
        echo "La conexión ha fallado" . mysqli_error();
        exit();
    }

    $miconsulta="SELECT * FROM contenido ORDER BY FECHA DESC";

    if($resultado=mysqli_query($mi_conexion,$miconsulta)){

        while($registro=mysqli_fetch_assoc($resultado)){

            echo "<h3>" . $registro["titulo"] . "</h3>";

            echo "<h4>" . $registro["fecha"] . "</h4>";

            echo "<div style='width:400px'>" . $registro["comentario"] . "</div><br/><br/>";
              
            if($registro["imagen"]!=""){
                echo "<img src='imagenes/" . $registro["imagen"] . "' width='300px'/>";
            }

            echo "<hr/>";

        }

    }


?>



</body>
</html>