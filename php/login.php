<?php
  session_start();
   
  
  if(isset($_SESSION['email'])){
    
    echo 'Bienvenido <strong>' . $_SESSION['email'] . '</strong>, <a href="cerrar-sesion.php">cerrar sesión</a>';
  }else{
    
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: Login.html"); 
  }
?>