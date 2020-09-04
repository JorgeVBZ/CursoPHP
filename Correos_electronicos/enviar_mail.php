<?php

    if($_POST["nombre"] == "" || $_POST["apellido"] == "" || $_POST["email"] == "" || $_POST["comentarios"] == ""){

        echo "Completa los campos requeridos.";

        die();
    }

    $texto_mail=$_POST["comentarios"];

    $destinatario=$_POST["email"];

    $asunto=$_POST["asunto"];

    $headers="MIME-Version: 1.0\r\n";

    $headers.= "Content-type: text/html; charset=utf8\r\n";

    $headers.= "From: Prueba Jorge <rmiwwogx@hl109.lucushost.org>\r\n";

    $exito = mail($destinatario,$asunto,$texto_mail,$headers);

    if($exito){
        echo "Mensaje enviado con éxito";
    }else{
        echo "No se ha podido enviar el mensaje.";
    }

?>