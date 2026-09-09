<?php
require "proteger.php";
require "permiso.php";
require "conexion.php";

$id = $_GET['id'];
$sql = "DELETE from candidatos where id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

?>
Se eliminó con éxito
<meta http-equiv="refresh" content="5; url=read.php">