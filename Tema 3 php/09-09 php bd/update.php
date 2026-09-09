<?php
require "proteger.php";
require "permiso.php";
require "conexion.php";
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cargo = $_POST['cargo'];
$ambito = $_POST['ambito'];
$id = $_POST['id'];
$sql = "UPDATE  candidatos  set nombres=?, apellidos=?, cargo=?, ambito=? 
WHERE id=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi",
  $nombres, $apellidos, $cargo, $ambito,$id);
    $stmt->execute();
?>
Se edito con éxito
<meta http-equiv="refresh" content="5; url=read.php">