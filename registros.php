<?php

$usuario="yato";
$contraseña="god";
$nombre = $_POST["nombre"];
    $cta = $_POST["cta"];

if (isset ($_POST["ingresar"]) && ($usuario==$nombre) && ($contraseña==$cta)){
    
      
      
 echo "Bienvenido " . $nombre;


}
    else{
  
        header("Refresh: 3; url=registrarse.php");
        echo "contraseña y/o user incorrectas. Intente nuevamente.";
        
        }
    
   
  

?>