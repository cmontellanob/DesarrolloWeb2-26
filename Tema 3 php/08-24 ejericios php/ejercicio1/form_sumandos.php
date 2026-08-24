<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = $_GET["n"];
    ?>
    <form action="resultado.php" method="post">
        <?php
        for($i=0; $i<$n; $i++){
        ?>
        <input type="number" name="num<?php echo $i?>"><br>
        <?php   
        }
        ?>
        <input type="hidden" name="n" value="<?php echo $n?>">
        <input type="submit" value="sumar">
    </form>
</body>
</html>