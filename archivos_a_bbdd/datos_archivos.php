<?php

    //Recibimos los datos de la imagen
    $nombre_archivo=$_FILES["archivo"]["name"];
    $tipo_archivo=$_FILES["archivo"]["type"];
    $tam_archivo=$_FILES["archivo"]["size"];

    if($tam_archivo<=1000000){

        $carpeta_destino=$_SERVER["DOCUMENT_ROOT"] . "/uploads";

        //Movemos el archivo del directorio tmp al directorio escogido
        move_uploaded_file($_FILES["archivo"]["tmp_name"],$carpeta_destino . "/" . $nombre_archivo);
                
    }else{
        echo "Error: Se ha excedido el tamaño de imagen admitido.";
    }

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_user,$db_pass);

      if(mysqli_connect_errno()){

        echo "Fallo al conectar con la BBDD";

        exit();

    }
    mysqli_select_db($conexion,$db_name) or die ("No se encuentra la base de datos");

    mysqli_set_charset($conexion,"utf8");

    $archivo_objetivo=fopen($carpeta_destino . "/" . $nombre_archivo,"r");

    $contenido=fread($archivo_objetivo,$tam_archivo);

    $contenido=addslashes($contenido);

    fclose($archivo_objetivo);

    $query="INSERT INTO archivos (id,nombre,tipo,contenido) VALUES (0,'$nombre_archivo','$tipo_archivo','$contenido')";
    //$query="UPDATE productos SET foto='$nombre_imagen' WHERE id=1";

    $resultados=mysqli_query($conexion,$query);//record set ó resulset

    if(mysqli_affected_rows($conexion)>0){
        echo "Registro insertado con éxito.";
    }else{
        echo "No se ha podido insertar el registro.";
    }
    

?>