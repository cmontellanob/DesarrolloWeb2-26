<?php
  // login.php
  $usuario = $_POST["usuario"];
  $clave = $_POST["clave"];

  if ($usuario == "admin" && $clave == "123") {
      echo "Bienvenido!";
  } else {
      echo "Credenciales incorrectas";
  }

  ?>
<h1>variable server</h1>
<?php 
foreach($_SERVER as $clave=>$valor )
    {
        echo " clave: $clave => $valor <br>";
    }
?>
