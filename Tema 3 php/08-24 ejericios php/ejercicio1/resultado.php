<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            border: 1px solid black;
            padding: 10px;
            width: 150px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <?php
    $n = $_POST["n"];
    $suma = 0;
    for ($i = 0; $i < $n; $i++) {
        $suma += $_POST["num" . $i];
    }
    ?>
    <p>El resultado es: <?php echo $suma ?></p>
</body>
</html>