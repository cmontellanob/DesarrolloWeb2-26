<?php 
  // LEER cookie
  if (isset($_COOKIE["usuario"])) {
      echo "Hola " . $_COOKIE["usuario"];
  }

  // VERIFICAR si existe
  if (isset($_COOKIE["tema"])) {
      echo "Tema: " . $_COOKIE["tema"];
  }

  // ELIMINAR cookie (tiempo pasado)
  setcookie("usuario", "", time() - 3600);
  ?>