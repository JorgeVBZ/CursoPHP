<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    table{
        width:300px;
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

      <form action="pagina_busqueda_pdo.php" method="get">

      <table><tr><td> 
      Sección:</td><td><input type="text" name="seccion"></td></tr>

      <tr><td>País de Origen: </td><td><input type="text" name="p_orig"></td></tr>

      <tr><td colspan="2"><input type="submit" name="enviando" value="Dale!">
      </td></tr></table>

      </form>


  </body>
</html>
