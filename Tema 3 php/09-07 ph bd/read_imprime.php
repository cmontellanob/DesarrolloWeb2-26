<?php
  require_once "conexion.php";
  $sql = "SELECT * FROM candidatos";
  $resultado = $conn->query($sql);
  // Verificar si hay resultados
  if ($resultado->num_rows > 0) {
      echo "<table border='1'>";
      echo "<tr>
              <th>ID</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Cargo</th>
              <th>Ambito</th>
            </tr>";
      // Recorrer resultados
      while ($fila = $resultado->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $fila["id"] . "</td>";
          echo "<td>" . $fila["nombres"] . "</td>";
          echo "<td>" . $fila["apellidos"] . "</td>";
          echo "<td>" . $fila["cargo"] . "</td>";
          echo "<td>" . $fila["ambito"] . "</td>";
          echo "</tr>";
      }
      echo "</table>";
  } else {
      echo "No hay registros";
  }
  $conn->close();
?>
