
<h1>  Arreglo Normal</h1>
<?php
$frutas=['Manzna','Pera','Uva','Naanja','Kiwi'];
echo $frutas[2],' ';
echo $frutas[4];
echo '<ol>';
foreach ($frutas as $fruta)
    {
        echo "<li>$fruta </li>";

    }
echo '</ol>';
?>
<h1> Arreglo Asociativo</h1>
<?php
$alumno = [
      "nombre"  => "Maria Lopez",
      "edad"    => 21,
      "carrera" => "Sistemas",
      "semestre" => 5
  ];

  // Acceder por clave
  echo $alumno["nombre"];   // Maria Lopez
  echo $alumno["carrera"];  // Sistemas

  // Agregar nuevo par
  $alumno["email"] = "maria@mail.com";

  // Recorrer con foreach
  foreach ($alumno as $clave => $valor) {
      echo "$clave: $valor<br>";
  }
?>