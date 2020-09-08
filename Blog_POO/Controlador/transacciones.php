<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    include_once ("../Modelo/objeto_blog.php");
    include_once ("../Modelo/manejo_objetos.php");

    
    try{

        //Establezco la conexion con la BBDD

        $miconexion=new PDO('mysql:host=localhost;dbname=bbdd_blog','root','');

        $miconexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

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
    
                $destino_ruta="../imagenes/";
    
                move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);
    
                echo "El fichero " . $_FILES["imagen"]["name"] . " se ha copiado en el directorio de imágenes.";
    
            }else{
                echo "El fichero no se ha podido copiar al directorio de imágenes.";
            }
    
        }

        $manejo_objetos=new Manejo_Objetos($miconexion);

        $blog= new Objeto_Blog();

        $blog->set_titulo(htmlentities(addslashes($_POST["campo_titulo"]),ENT_QUOTES));
        $blog->set_fecha(Date("Y-m-d H:i:s"));
        $blog->set_comentarios(htmlentities(addslashes($_POST["area_comentarios"]),ENT_QUOTES));
        $blog->set_imagen($_FILES["imagen"]["name"]);

        $manejo_objetos->insertaContenido($blog);

        echo "<br> Entrada de blog agregada con éxito <br>";

    }catch(Exception $e){

        die("Error: " . $e->getMessage());
    }       

?>


</body>
</html>