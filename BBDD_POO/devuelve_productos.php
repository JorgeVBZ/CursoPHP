<?php
    require("conexion.php");
    class DevuelveProductos extends Conexion{
        public function __construct(){
            parent::__construct();//Ejecuta el constructor del padre (Conexion con base de datos)

        }

        public function get_productos($dato){
            //Libreria mysqli
        /*********************************************************************************************************** 
            $resultados=$this->conexion_db->query("SELECT * FROM productos");
            $resultados=$this->conexion_db->query("SELECT * FROM productos WHERE pais_de_origen='" . $dato . "'");
            $productos=$resultados->fetch_all(MYSQLI_ASSOC);
            return $productos;
        }
        *///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //PDO

            $sql="SELECT * FROM productos WHERE pais_de_origen='" . $dato . "'";

            $sentencia=$this->conexion_db->prepare($sql);

            $sentencia->execute(array());

            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

            $sentencia->closeCursor();

            return $resultado;

            $this->conexion_db=null;
        }


    }

?>