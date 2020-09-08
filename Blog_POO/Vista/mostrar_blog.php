<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    include "../Modelo/manejo_objetos.php";

    try{

        //Establezco la conexion con la BBDD

        $miconexion=new PDO('mysql:host=localhost;dbname=bbdd_blog','root','');

        $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $manejo_objetos=new Manejo_objetos($miconexion);

        $tabla_blog=$manejo_objetos->getContenidoPorFecha();

        if(empty($tabla_blog)){
            echo "Aún no existen entradas de blog";
        }else{

            foreach ($tabla_blog as $valor) {
                echo "<h3>" . $valor->get_titulo() . "</h3>";
                echo "<h4>" . $valor->get_fecha() . "</h4>";
                echo "<div style='width:400px'>";
                echo $valor->get_comentarios() . "</div>";

                if($valor->get_imagen() != ""){
                    echo "<img src='../imagenes/";
                    echo $valor->get_imagen() . "'width='200px' height='300px'/>";
                }

                echo "<hr/>";
                
            }
        }

    }catch(Exception $e){

        die("Error: " . $e->getMessage());
    }



?>

<br/>

<a href="formulario.php">Volver a la página de inserción</a>


</body>
</html>