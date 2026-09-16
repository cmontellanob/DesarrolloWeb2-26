<?php

require_once "estante.php";

session_start();

$nivel= $_GET["nivel"];

$_SESSION["estante"]->quitar($nivel);
?>

<p>se elimino con exito</p>

<meta http-equiv="refresh" content="3; url=menu3.php">


