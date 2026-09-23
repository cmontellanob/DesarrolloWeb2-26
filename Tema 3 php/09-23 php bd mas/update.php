<?php
require "proteger.php";
require "permiso.php";
require "conexion.php";
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cargo_id = $_POST['cargo_id'];
$ambito_id = $_POST['ambito_id'];
$nuevo="";
if (isset($_FILES['fotografia']['tmp_name'])) {
    $temporal= $_FILES['fotografia']['tmp_name'];
    $datos_archivo= explode(".",$_FILES['fotografia']['name']);
    $nuevo = uniqid() . '.' . $datos_archivo[1];
    copy($temporal, "images/" . $nuevo);
}



$id = $_POST['id'];
$sql = "UPDATE  candidatos  set fotografia=?, nombres=?, apellidos=?, cargo_id=?, ambito_id=? 
WHERE id=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi",
  $nuevo,$nombres, $apellidos, $cargo_id, $ambito_id,$id);
    $stmt->execute();
?>
Se edito con éxito
<meta http-equiv="refresh" content="5; url=read.php">