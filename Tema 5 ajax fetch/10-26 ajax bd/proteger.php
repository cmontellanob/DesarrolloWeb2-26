<?php  session_start();
  if (!isset($_SESSION["correo"])) {
    ?>
    <meta http-equiv="refresh" content="3;form_login.html">
    <?php  
      die("No esta autorizado para ingresar");
  }
?>