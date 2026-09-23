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
    $sql = "SELECT id,fotografia,nombres,apellidos,cargo_id,ambito_id from candidatos where id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $candidato = $stmt->get_result()->fetch_assoc();
    $sql2 = "SELECT id,nombre from cargos";
    $resultado2 = $conn->query($sql2);
    $sql3 = "SELECT id,nombre from ambitos";
    $resultado3 = $conn->query($sql3);


    ?>

    <form action="update.php" method="post" enctype="multipart/form-data">
        <label for="nombres">Foto</label>
        <img width="100px" src="images/<?php echo $candidato["fotografia"];  ?>" >
        <input type="file" name="fotografia" > <br>
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" value="<?php echo $candidato["nombres"]; ?>"><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?php echo $candidato["apellidos"]; ?>"><br>
        <label for="cargo">Cargo</label>
        <select name="cargo_id">
            <?php
            while ($cargo = $resultado2->fetch_assoc()) {
            ?><tr>
                    <option value="<?php echo $cargo["id"] ?>"
                        <?php
                        echo $cargo["id"] == $candidato["cargo_id"] ? "selected" : "";
                        ?>><?php echo $cargo["nombre"]; ?></option>
                <?php }   ?>
        </select> <br>
        <label for="ambito">Ambito</label>
        <select name="ambito_id">
            <?php
            while ($ambito = $resultado3->fetch_assoc()) {
            ?><tr>
                    <option value="<?php echo $ambito["id"] ?>"
                        <?php
                        echo $ambito["id"] == $candidato["ambito_id"] ? "selected" : "";
                        ?>><?php echo $ambito["nombre"]; ?></option>
                <?php }   ?>
        </select> <br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="Subir">

    </form>

</body>

</html>