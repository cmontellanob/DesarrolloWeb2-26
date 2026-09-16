<?php

require "conexion.php";

$id = $_GET['id'];
$sql = "DELETE from libros where id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

?>
Se eliminó con éxito
<meta http-equiv="refresh" content="3; url=listar.php">