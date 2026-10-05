<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
    require_once("votacion.php");
    session_start();?>
    <form action="votar.php" method="post">
        <label for="candidato">Seleccionar Candidato:</label>
        <select name="candidato">
            <?php 
            foreach ($_SESSION['votacion']->candidatos as $candidato=> $votos) {
            ?> <option value="<?php echo $candidato; ?>"><?php echo $candidato; ?></option>;
            <?php } ?>

        </select>
        <input type="submit" value="Votar">
    </form>
</body>
</html>