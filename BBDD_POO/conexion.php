<?php
    require('config.php');
    class Conexion{
        protected $conexion_db;

        public function Conexion(){

            //conexion libreria mysqli 
            /*************************************************************************************** 
            $this->conexion_db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            if($this->conexion_db->connect_errno){
                echo "Fallo al conectar a MySQL" . $this->conexion_db->connect_error;
                return;
            }
            $this->conexion_db->set_charset(DB_CHARSET);
            //echo "Conexion realizada con éxito a la base de datos llamada " . DB_NAME . "<br>";
            *******************************************************************************************/

            try{

                $this->conexion_db = new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->conexion_db->exec("SET CHARACTER SET utf8");

                return $this->conexion_db;

            }catch(Exception $e){
                echo "La línea del error es: " . $e->getLine();
            }

        }

    }
?>