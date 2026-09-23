<?php 
  if (($_SESSION["rol"]!='admin')) {
    ?>
    <meta http-equiv="refresh" content="3;read.php">
    <?php  
      die("No esta autorizado para hacer esta accion");
  }
?>