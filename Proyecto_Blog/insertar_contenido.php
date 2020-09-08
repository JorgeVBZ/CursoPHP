<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    //Establezco la conexion con la BBDD
    $mi_conexion=mysqli_connect("localhost","root","","bbdd_blog");

    //Comprobar conexion a BBDD
    if(!$mi_conexion){
        echo "La conexión ha fallado" . mysqli_error();
        exit();
    }

    if($_FILES["imagen"]["error"]){

        switch($_FILES["imagen"]["error"]){

            case 1: //Error exceso de tamaño de fichero en php.ini
                
                echo "El tamaño del fichero excede lo permitido por el servidor.";

            break;

            case 2: //Error tamaño fichero marcado desde formulario

                echo "El tamaño del fichero excede 2 MB.";
                
            break;

            case 3: //Corrupción de fichero

                echo "El envío de fichero se interrumpió inesperadamente.";

            break;

            case 4: //No existe fichero

                echo "No se ha enviado ningún fichero.";

            break;

        }

    }else{

        echo "Entrada subida con éxito.<br>";

        if((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK))){

            $destino_ruta="imagenes/";

            move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);

            echo "El fichero " . $_FILES["imagen"]["name"] . " se ha copiado en el directorio de imágenes.";

        }else{
            echo "El fichero no se ha podido copiar al directorio de imágenes.";
        }

    }

    $eltitulo=$_POST["campo_titulo"];
    $lafecha=date("Y-m-d H:i:s");
    $elcomentario=$_POST["area_comentarios"];
    $laimagen=$_FILES["imagen"]["name"];

    $mi_consulta="INSERT INTO contenido (titulo,fecha,comentario,imagen) VALUES ('" . $eltitulo . "','" . $lafecha . "','" . 
    $elcomentario . "','" . $laimagen . "')";

    $resultado=mysqli_query($mi_conexion,$mi_consulta);

    //Cerramos la conexion

    mysqli_close($mi_conexion);

    echo "<br>Se ha agregado la entrada con éxito.<br><br>";

?>

<a href="formulario.php">Añadir nueva entrada</a>
<a href="mostrar_blog.php">Ver blog</a>


</body>
</html>