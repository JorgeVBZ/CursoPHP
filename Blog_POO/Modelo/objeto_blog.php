<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


    class Objeto_Blog{

        //PROPIEDADES DEL OBJETO BLOG

        private $id;

        private $titulo;

        private $fecha;

        private $comentarios;

        private $imagen;

        
    

        //METODOS DE ACCESO GETTERS Y SETTERS

        public function get_id(){

            return $this->id;

        }

        public function set_id($id){

            $this->id=$id;

        }

        public function get_titulo(){

            return $this->titulo;

        }

        public function set_titulo($titulo){

            $this->titulo=$titulo;

        }

        public function get_fecha(){

            return $this->fecha;

        }

        public function set_fecha($fecha){

            $this->fecha=$fecha;

        }

        public function get_comentarios(){

            return $this->comentarios;

        }

        public function set_comentarios($comentarios){

            $this->comentarios=$comentarios;

        }

        public function get_imagen(){

            return $this->imagen;

        }

        public function set_imagen($imagen){

            $this->imagen=$imagen;

        }

    }



?>



</body>
</html>