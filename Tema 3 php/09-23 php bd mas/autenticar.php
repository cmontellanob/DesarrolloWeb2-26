<?php
  session_start();
  require "conexion.php";
  $correo = $_POST["correo"];
  $hash    = sha1($_POST["clave"]);
  $sql = "SELECT * FROM usuarios WHERE correo=? AND clave=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $correo, $hash);
  $stmt->execute();
  $res = $stmt->get_result();
  if ($res->num_rows > 0) {
      $_SESSION["correo"] = $correo;
      $_SESSION["rol"] = $res->fetch_assoc()["rol"];
      header("Location: read.php");
  } else {
      echo "Credenciales incorrectas";
      ?>
      <meta http-equiv="refresh" content="3;form_login.html">
      <?php
  }
?>
