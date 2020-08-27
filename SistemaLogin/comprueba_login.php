<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
    
<?php

try{

    $base=new PDO("mysql:host=localhost;dbname=pruebas","root","");

    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM usuarios_pass WHERE usuarios=:user AND password=:password";

    $resultado=$base->prepare($sql);

    $user=htmlentities(addslashes($_POST["user"]));

    $password=htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":user",$user);

    $resultado->bindValue(":password",$password);

    $resultado->execute();

    $numero_registro=$resultado->rowCount();

    if($numero_registro!=0){

        session_start();

        $_SESSION["usuario"]=$_POST["user"];
                
        header("location:usuarios_registrados_1.php");

    }else{
        header("location:login.php");
    }

}catch(Exception $e){
    die("Error: " . $e->getMessage());
}

?>
    

</body>
</html>



