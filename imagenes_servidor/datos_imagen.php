<?php

    //Recibimos los datos de la imagen
    $nombre_imagen=$_FILES["imagen"]["name"];
    $tipo_imagen=$_FILES["imagen"]["type"];
    $size_imagen=$_FILES["imagen"]["size"];

    //echo $tipo_imagen;

    if($size_imagen<=1000000){
        if ($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){
            //Ruta del directorio destino en servidor
            $carpeta_destino=$_SERVER["DOCUMENT_ROOT"] . "/uploads";

            //Movemos la imagen del directorio tmp al directorio escogido
            move_uploaded_file($_FILES["imagen"]["tmp_name"],$carpeta_destino . "/" . $nombre_imagen);
        }else{
            echo "Error: Sólo se pueden subir imágenes.";
        }
        
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

      //$query="INSERT INTO productos (foto) VALUES ('$nombre_imagen')";//Insertar articulo solo con foto
      $query="UPDATE productos SET foto='$nombre_imagen' WHERE id=1";

      $resultados=mysqli_query($conexion,$query);//record set ó resulset









    
    

?>