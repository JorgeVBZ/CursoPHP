<?php

    require("conexion.php");

    class DevuelveProductos extends Conexion{

        public function __construct(){

            parent::__construct();//Ejecuta el constructor del padre (Conexion con base de datos)

        }

        public function get_productos(){

            $resultados=$this->conexion_db->query("SELECT * FROM productos");

            $productos=$resultados->fetch_all(MYSQLI_ASSOC);

            return $productos;

        }

    }

?>