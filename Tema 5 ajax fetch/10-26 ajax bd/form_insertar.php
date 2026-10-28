
    <?php
    require "proteger.php";
    require "permiso.php";
    require "conexion.php";
    $sql = "SELECT id,nombre from cargos";
    $resultado = $conn->query($sql);
    $sql2= "SELECT id,nombre from ambitos";
    $resultado2 = $conn->query($sql2);
    ?>
    <form action="javascript:subirDatos()" method="post" enctype="multipart/form-data" id="forminsertar">
        <label for="fotografia">Foto</label>
        <input type="file" name="fotografia" ><br>
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres"><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos"><br>
        <label for="cargo">Cargo</label>
        <select name="cargo_id">
            <?php
            while ($cargo = $resultado->fetch_assoc()) {
            ?><tr>
                    <option value="<?php echo $cargo["id"] ?>"><?php echo $cargo["nombre"]; ?></option>
                <?php }   ?>
        </select> <br>
        <label for="ambito">Ambito</label>
        <select name="ambito_id">
            <?php
            while ($ambito = $resultado2->fetch_assoc()) {
            ?><tr>
                    <option value="<?php echo $ambito["id"] ?>"><?php echo $ambito["nombre"]; ?></option>
                <?php }   ?>
        </select>
        <br>
        <input type="submit" value="Subir">

    </form>
