<?php
require_once("votacion.php");
session_start();
$candidato = $_POST['candidato'];
$_SESSION['votacion']->votar($candidato);
?>
<p>Candidato votado correctamente</p>
<meta http-equiv="refresh" content="3; url=menu3.php">