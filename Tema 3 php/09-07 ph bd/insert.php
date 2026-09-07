<?php
require "conexion.php";

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cargo = $_POST['cargo'];
$ambito = $_POST['ambito'];

$sql = "INSERT INTO candidatos (nombres, apellidos, cargo, ambito)
VALUES(?,?,?,?)";


$stmt = $conn->prepare($sql);

  // Vincular parametros
  // s=string, i=integer, d=double
$stmt->bind_param("ssss",
  $nombres, $apellidos, $cargo, $ambito);
    $stmt->execute();


?>
Se insertó con éxito
<meta http-equiv="refresh" content="5; url=read.php">