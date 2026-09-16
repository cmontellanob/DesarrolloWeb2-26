<?php
  $servidor = "localhost";
  $usuario  = "root";
  $clave    = "";
  $bd       = "bd_biblioteca";
  $conn = new mysqli($servidor, $usuario, $clave, $bd);

  if ($conn->connect_error) {
      die("Error: " . $conn->connect_error);
  }
  $conn->set_charset("utf8"); // opcional para no tener problemas con acentos 
?>
