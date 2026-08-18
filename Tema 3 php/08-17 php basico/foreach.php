<?php
// FOREACH (para arrays)
$frutas = ["Manzana", "Pera", "Uva"];
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
// Con clave y valor
foreach ($frutas as $i => $fruta) {
    echo "$i: $fruta<br>";
}
?>