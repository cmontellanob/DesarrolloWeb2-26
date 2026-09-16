<?php
require_once "conexion.php";
$sql = "SELECT * FROM libros";
$resultado = $conn->query($sql);
// Verificar si hay resultados
if ($resultado->num_rows > 0) {
?><table border="1" style="border-collapse: collapse;"> 
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Editorial</th>
            <th>Operaciones</th>
        </tr>"
        <?php
        // Recorrer resultados
        while ($fila = $resultado->fetch_assoc()) {
        ?><tr>
                <td><?php echo $fila["id"]; ?> </td>
                <td><?php echo $fila["titulo"]; ?></td>
                <td><?php echo $fila["autor"]; ?></td>
                <td><?php echo $fila["anio"]; ?></td>
                <td><?php echo $fila["editorial"]; ?></td>
                <td>  
                    <a href="delete.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
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
?>
