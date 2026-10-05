<?php 
include_once("votacion.php");
session_start();
$titulo = $_GET['titulo'];
$_SESSION['votacion'] = new Votacion($titulo);
?>
<p>Se ha creado la eleccio correctamente</p>
<meta http-equiv="refresh" content="3; url=menu3.php">
?>