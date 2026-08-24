<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .casilla{
        background-color: black;
    }
        table{
            border-collapse: collapse;

        }
        tr{height: 50px;}
        td{width: 50px;}
    </style>
</head>
<body>
    <table border="1">
    <?php
    $filas=$_GET["filas"];
    $columnas=$_GET["columnas"];

    for($i=0; $i<$filas; $i++){
    echo"<tr>";
    for($j=0; $j<$columnas; $j++){
        if (($i + $j)%2==1){
        echo'<td class="casilla"> &nbsp;</td>';     
        }else{
            echo"<td> &nbsp;</td>";
        }
    }
    }
    ?>
    </table>
</body>
</html>