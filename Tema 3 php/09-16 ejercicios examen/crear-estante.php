<?php
require_once "estante.php";
session_start();
$capacidad=$_GET["capacidad"];
$_SESSION["estante"]=new Estante($capacidad);

?>
<p> se creo con exito</p>
<meta http-equiv="refresh" content="3; url=menu3.php">