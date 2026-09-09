<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "proteger.php";
    require "conexion.php";
    $id = $_GET['id'];
    $sql = "SELECT id,nombres,apellidos,cargo,ambito from candidatos where id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $candidato = $stmt->get_result()->fetch_assoc();
    ?>

    <form action="update.php" method="post">
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" value="<?php echo $candidato["nombres"]; ?>"><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?php echo $candidato["apellidos"]; ?>"><br>
        <label for="cargo">Cargo</label>
        <input type="text" name="cargo" value="<?php echo $candidato["cargo"]; ?>"><br>
        <label for="ambito">Ambito</label>
        <input type="text" name="ambito" value="<?php echo $candidato["ambito"]; ?>"><br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="Subir">

    </form>

</body>

</html>