<?php 
include ("funciones.php");
$nombre=$_GET['nombre'];
$base=$_GET["base"];
$exponente=$_GET["exponente"];
echo saludar($nombre)."<br>";

echo potencia($base);?> <br> 
<?php
echo potencia($base,$exponente); 
?>