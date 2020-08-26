<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
    
<?php

    try{
        $base=new PDO('mysql:host=localhost; dbname=pruebas','root','');
        echo "Conexion realizada con éxito";
    }catch(Exception $e){
        die("Error:" . $e->GetMessage());
    }finally{
        $base=null;
    }




?>

</body>
</html>
