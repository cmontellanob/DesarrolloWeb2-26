<?php
require "proteger.php";
require "permiso.php";
require "conexion.php";

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cargo_id = $_POST['cargo_id'];
$ambito_id= $_POST['ambito_id'];
$nuevo="";
if (isset($_FILES['fotografia']['tmp_name'])) {
    $temporal= $_FILES['fotografia']['tmp_name'];
    $datos_archivo= explode(".",$_FILES['fotografia']['name']);
    $nuevo = uniqid() . '.' . $datos_archivo[1];
    copy($temporal, "images/" . $nuevo);
}





$sql = "INSERT INTO candidatos (fotografia,nombres, apellidos, cargo_id, ambito_id)
VALUES(?,?,?,?,?)";


$stmt = $conn->prepare($sql);

  // Vincular parametros
  // s=string, i=integer, d=double
$stmt->bind_param("sssss",
  $nuevo,$nombres, $apellidos, $cargo_id, $ambito_id);
    $stmt->execute();


?>
Se insertó con éxito
<meta http-equiv="refresh" content="5; url=read.php">