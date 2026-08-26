<?php 
include ("Alumno.php");
$nombre=$_GET['nombre'];
$edad=$_GET['edad'];
$carrera=$_GET['carrera'];
$a=new Alumno($nombre,$edad,$carrera);
echo $a->mostrar();
