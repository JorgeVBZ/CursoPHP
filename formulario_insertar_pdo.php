<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    table{
        width:500px;
        margin:auto;
        background-color:#FFC;
        border:2px solid #F00;
        padding:5px;
    }
    td{
        text-align=center;
    }

    </style>
  </head>
  <body>

      <form action="pagina_insertar_pdo.php" method="post">

      <table><tr><td> 
      Sección:</td><td><input type="text" name="seccion"></td></tr>
      <tr><td>Nombre Artículo: </td><td><input type="text" name="n_art"></td></tr>
      <tr><td>Fecha: </td><td><input type="text" name="fecha"></td></tr>
      <tr><td>País de Origen: </td><td><input type="text" name="p_orig"></td></tr>
      <tr><td>Precio: </td><td><input type="text" name="precio"></td></tr>

      <tr><td colspan="2"><input type="submit" name="enviando" value="Dale!">
      </td></tr></table>

      </form>


  </body>
</html>
