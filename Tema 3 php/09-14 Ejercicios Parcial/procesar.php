<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="color.css">
</head>

<body>
    <h1>a</h1>
    <?php
    $texto = $_GET["cadena"];
    $n = $_GET["n"];

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];
        echo $letra;
        if ($i < strlen($texto) - 1) {
            for ($j = 0; $j < $n; $j++) {
                echo "-";
            }
        }
    }
    ?>
    <table border="1"  style="border-collapse:collapse">
        <tr >
            <?php
            for ($i = 0; $i < strlen($texto); $i++) {
                $residuo = $i % 3;
                $estilo="";
                switch ($residuo) {
                    case 0:
                        $estilo = "rojo";
                        break;
                    case 1:
                        $estilo = "amarillo";
                        break;
                    case 2:
                        $estilo = "verde";
                        break;
                }
            ?>
                <td class="<?php echo $estilo; ?>">
                    <?php
                    echo substr($texto, $i, 1);
                    ?>
                </td>
            <?php
            }
            ?>
        </tr>


    </table>

    ?>
    <h1>c</h1>

    <?php echo strrev($texto);
    ?>
</body>

</html>