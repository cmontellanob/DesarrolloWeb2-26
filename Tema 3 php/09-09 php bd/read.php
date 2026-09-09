<?php
require "proteger.php";
require_once "conexion.php";
$sql = "SELECT * FROM candidatos";
$resultado = $conn->query($sql);
// Verificar si hay resultados
 echo "correo usuario:".$_SESSION['correo'];
 echo "rol_".$_SESSION['rol'];

if ($resultado->num_rows > 0) {
?>  <a href="cerrar_sesion.php">Cerrar</a>
<table border="1" style="border-collapse: collapse;"> 
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cargo</th>
            <th>Ambito</th>
            <th>Operaciones</th>
        </tr>"
        <?php
        // Recorrer resultados
        while ($fila = $resultado->fetch_assoc()) {
        ?><tr>
                <td><?php echo $fila["id"]; ?> </td>
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