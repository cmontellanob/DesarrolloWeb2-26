<?php
  // login.php
  $usuario = $_POST["usuario"];
  $clave = $_POST["clave"];

  if ($usuario == "admin" && $clave == "123") {
      echo "Bienvenido!";
  } else {
      echo "Credenciales incorrectas";
  }
