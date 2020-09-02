<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>

<?php

    require ("Modelo/paginacion.php");

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
    <?php

        foreach($matriz_personas as $persona):?>
  
   	<tr>
      <td><?php echo $persona['id']?></td>
      <td><?php echo $persona['nombre']?></td>
      <td><?php echo $persona['apellido']?></td>
      <td><?php echo $persona['direccion']?></td>
 
      <td class="bot"><a href="Modelo/borrar.php?id=<?php echo $persona['id']?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar.php?id=<?php echo $persona['id']?> & nom=<?php echo $persona['nombre']?> & 
      ape=<?php echo $persona['apellido']?> & dir=<?php echo $persona['direccion']?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>   

    <?php

        endforeach;

    ?>
    
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>  
      <tr><td>

      <?php

        //echo "Numero de registros de la consulta: " . $num_registros . "<br><br>";
        //echo "Mostramos " . $tamaño_paginas . " registros por página <br><br>";
        //echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<br><br>";

//------------------------------------------------PAGINACION---------------------------------------------------------------------------------

        for($i=1;$i<=$total_paginas;$i++){

        echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";

        }
    

      ?>

      </td></tr>  
  </table>

  </form>
    
</body>
</html>