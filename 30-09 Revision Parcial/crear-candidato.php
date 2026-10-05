<?php
require_once("votacion.php");
session_start();
$candidato = $_GET['candidato'];
$_SESSION['votacion']->registrar($candidato);
?>
<p>Candidato registrado correctamente</p>
<meta http-equiv="refresh" content="3; url=menu3.php">