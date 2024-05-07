<?php



if (isset ($_POST["ingresar"]) ){
  for ($i=0;$i<1;$i++){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre[$i] = $_POST["nombre"];
      $cta[$i] = $_POST["cta"];
      
      
    echo "Bienvenido " . $nombre[$i] ;
    }
  }
    
  
  }
      
  
      
  else{
  
  header("Refresh: 3; url=login.html");
  echo "contraseña y/o user incorrectas. Intente nuevamente.";
  
  }
  

?>