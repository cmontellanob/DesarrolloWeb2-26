<?php
require_once("votacion.php");
session_start();
echo $_SESSION['votacion']->resultados();
?>
<meta http-equiv="refresh" content="5; url=menu3.php">