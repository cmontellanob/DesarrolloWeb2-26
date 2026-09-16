<?php

require_once "estante.php";

session_start();

$nivel= $_GET["nivel"];
$elemento= $_GET["elemento"];

$_SESSION["estante"]->insertar($nivel,$elemento);
?>

<p>se inserto con exito</p>

<meta http-equiv="refresh" content="3; url=menu3.php">


