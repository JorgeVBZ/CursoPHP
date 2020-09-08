<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    include_once ("objeto_blog.php");

    class Manejo_Objetos{

        private $conexion;

        public function __construct($conexion){

            $this->setConexion($conexion);

        }

        public function setConexion(PDO $conexion){

            $this->conexion=$conexion;

        }

        public function getContenidoPorFecha(){

            $matriz=array();

            $contador=0;

            $resultado=$this->conexion->query("SELECT * FROM contenido ORDER BY fecha");

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

                $blog= new Objeto_Blog();

                $blog->set_id($registro["id"]);
                $blog->set_titulo($registro["titulo"]);
                $blog->set_fecha($registro["fecha"]);
                $blog->set_comentarios($registro["comentario"]);
                $blog->set_imagen($registro["imagen"]);

                $matriz[$contador]=$blog;

                $contador++;


            }

            return $matriz;

        }

        public function insertaContenido(Objeto_Blog $blog){

            $sql="INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES ('" . $blog->get_titulo() . "','" . $blog->get_fecha() . "','" . 
            $blog->get_comentarios() . "','" . $blog->get_imagen() . "')";

            $this->conexion->exec($sql);

        }


    }




?>



</body>
</html>