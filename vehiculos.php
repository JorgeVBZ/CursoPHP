<?php

  class Coche{

    protected $ruedas;
    var $color;
    var $motor;

    function Coche(){//Metodo constructor
      $this->ruedas=4;
      $this->color="";
      $this->motor=1600;
    }

    function arrancar(){
      echo "Estoy arrancando<br>";
    }

    function girar(){
      echo "Estoy girando<br>";
    }

    function frenar(){
      echo "Estoy frenando<br>";
    }

    function set_color($color_coche,$nombre_coche){
      $this->color=$color_coche;
      echo "El color del " . $nombre_coche . " es: " . $this->color . "<br>";
    }

    function get_ruedas()
    {
        return $this->ruedas;
    }
    function get_motor(){
      return $this->motor;
    }
  }

//------------------------------------------------------------------------------//

  class Camion extends Coche{

    function Camion(){//Metodo constructor
      $this->ruedas=8;
      $this->color="gris";
      $this->motor=2600;
    }
    //Sobreescritura de metodos
    function establece_color($color_camion,$nombre_camion){
      $this->color=$color_camion;
      echo "El color del " . $nombre_camion . " es: " . $this->color . "<br>";
    }

    function arrancar(){

      parent::arrancar();
      echo "Camion arrancado<br>";

    }

  }



 ?>
