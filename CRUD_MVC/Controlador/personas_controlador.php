<?php

    require_once("Modelo/personas_modelo.php");

    $persona=new Personas_modelo();

    $matriz_personas=$persona->get_personas();

    require_once("Vista/personas_view.php");

?>
