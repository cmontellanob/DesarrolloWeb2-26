<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="esilos.css">
</head>
<body>

    <?php
  $nota = 95;

  if ($nota >= 90) {
      echo '<div class="excelente">Excelente</div>';
  } elseif ($nota >= 70) {
      echo '<div class="bueno">Bueno</div>';
  } elseif ($nota >= 51) {
      echo '<div class="suficiente">Suficiente</div>';
  } else {
      echo '<div class="reprobado">Reprobado</div>';
  }
?>
</body>
</html>