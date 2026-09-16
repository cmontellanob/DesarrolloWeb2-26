<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
require_once "estante.php";
session_start();
$_SESSION['estante']->MostrarEstante();
?>
<meta http-equiv="refresh" content="3; url=menu3.php">    
</body>
</html>
