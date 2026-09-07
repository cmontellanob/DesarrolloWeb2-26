<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "conexion.php";
    $id = $_GET['id'];
    $sql = "SELECT id,nomres,apellidos,cargo,ambito from candidatos where id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $candito = $stmt->get_result()->fetch_assoc();
    ?>

    <form action="insert.php" method="post">
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres"><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos"><br>
        <label for="cargo">Cargo</label>
        <input type="text" name="cargo"><br>
        <label for="ambito">Ambito</label>
        <input type="text" name="ambito"><br>
        <input type="submit" value="Subir">

    </form>

</body>

</html>