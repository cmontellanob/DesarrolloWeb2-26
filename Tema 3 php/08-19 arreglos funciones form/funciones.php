<?php
// Funcion basica
  function saludar($nombre) {
      return "Hola, $nombre!";
  }
  // Con parametro por defecto
  function potencia($base, $exp = 2) {
      return $base ** $exp;
  }
?>