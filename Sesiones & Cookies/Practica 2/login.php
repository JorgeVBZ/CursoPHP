<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      h1,h2{
        text-align:center;
      }
      table{
        width:25%;
        background-color:#FFC;
        border:2px dotted #F00;
        margin:auto;
      }
      .izq{
        text-align:right;
      }
      .der{
        text-align:left;
      }
      td{
        text-align:center;
        padding:10px;
      }

    </style>
  </head>
  <body>

  <?php

  $autenticado=false;

  if(isset($_POST["enviar"])){

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

           $autenticado=true;
           
           if(isset($_POST["recordar"])){
              setcookie("nombre_usuario",$_POST["user"],time()+86400);
           }
                    
            

        }else{
            echo "Usuario o contraseña incorrectos.<br>";
        }

    }catch(Exception $e){
        die("Error: " . $e->getMessage());
    }

  }

?>
    
<?php

  if($autenticado==false){
    if(!isset($_COOKIE["nombre_usuario"])){

      include("formulario.html");

    }
  }

  if(isset($_COOKIE["nombre_usuario"])){

    echo "¡HOLA " . $_COOKIE["nombre_usuario"] . "!";

  }else if($autenticado==true){

    echo "¡HOLA " . $_POST["user"] . "!";
    
  }

  

?>
    
<h2>CONTENIDO DE LA WEB</h2>
<table width="800" border="0">
<tr>
    <td><img src="images/smacks.jpg" width="300" height="400"></td>
    <td><img src="images/mickey.jpg" width="300" height="400"></td>
</tr>
<tr>
    <td><img src="images/minion.jpg" width="300" height="166"></td>
    <td><img src="images/linux.jpg" width="300" height="171"></td>
</tr>
</table>

<?php

  if($autenticado== true || isset($_COOKIE["nombre_usuario"])){

    include("zona_registrados.html");

  }

?>

</body>
</html>

