<?php
require "proteger.php";
require_once "conexion.php";
if (!isset($_GET['orden'])) {
    $orden="c.id";
}
else{
    $orden=$_GET['orden'];
}
if (!isset($_GET['buscar'])) {
    $buscar="%";
}
else{
    $buscar="%".$_GET['buscar']."%";
}
?>
<form action="read.php">
    <label for="buscar">buscar</label>
    <input type="text" name="buscar" value="<?php echo $buscar; ?>">
    <input type="submit" value="buscar">
</form>

<?php

$sql = "SELECT c.id,fotografia,nombres,apellidos,ca.nombre as cargo,a.nombre as ambito FROM candidatos c
LEFT JOIN cargos ca on c.cargo_id=ca.id
LEFT JOIN ambitos a on c.ambito_id=a.id
where c.nombres like '$buscar' or c.apellidos like '$buscar' or ca.nombre like '$buscar' or a.nombre like '$buscar'
order by $orden
";
// echo $sql;
$resultado = $conn->query($sql);
// Verificar si hay resultados
 echo "correo usuario:".$_SESSION['correo'];
 echo "rol_".$_SESSION['rol'];

if ($resultado->num_rows > 0) {
?>  <a href="cerrar_sesion.php">Cerrar</a>
<table border="1" style="border-collapse: collapse;"> 
        <tr>
            <th>Fotografia</th>
            <th><a href="read.php?orden=nombres">Nombres</a> </th>
            <th><a href="read.php?orden=apellidos">Apellidos</a></th>
            <th><a href="read.php?orden=cargo">Cargo</a></th>
            <th><a href="read.php??orden=ambito">Ambito</a></th>
            <th>Operaciones</th>
        </tr>"
        <?php
        // Recorrer resultados
        while ($fila = $resultado->fetch_assoc()) {
        ?><tr>
                <td><img width="50px" src="images/<?php echo $fila["fotografia"] ?>" >  </td>
                <td><?php echo $fila["nombres"]; ?></td>
                <td><?php echo $fila["apellidos"]; ?></td>
                <td><?php echo $fila["cargo"]; ?></td>
                <td><?php echo $fila["ambito"]; ?></td>
                <td>
                    <?php if ($_SESSION['rol']=='admin') {?>
                     <a href="form_editar.php?id=<?php echo $fila['id']; ?>">Editar </a> 
                    <a href="delete.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
                    <?php }?>
                     </td>
            </tr>
        <?php
        } ?>
    </table>
<?php
} else {
    echo "No hay registros";
}
$conn->close();

if ($_SESSION['rol']=='admin') { ?>
<a href="form_insertar.php">Crear</a>
<?php }?>