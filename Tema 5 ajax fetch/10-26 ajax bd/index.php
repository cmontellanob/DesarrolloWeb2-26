<!DOCTYPE html>
<html lang="en">

<head>
    <script src="ajax.js" type="text/javascript"></script>
        
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar dato Agenda</title>
    <style>
        .contendor {
            display: flex;
        }

        .contendor nav {
            margin: 10px;
            width: 20%;
            border: 1px solid black;
        }
        .contendor nav ul {
            list-style: none;
        }
        .contendor nav ul li {
            border: 1px solid black;
            margin: 5px;
            padding: 5px;
        }
        .contendor div {
            margin: 10px;
            width: 80%;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        
    </style>
</head>

<body>
    <?php session_start();
    if (!isset($_SESSION['correo'])) {
        header("Location: form_login.html");
    }
    ?>
    <div class="contendor">
        <nav>
            <ul>
                <li><a href="javascript:cargarContenido('read.php')" >Listar</a></li>
                <li><a href="javascript:cargarContenido('form_insertar.php')">Insertar</a></li>
            </ul>
        </nav>
        <div id="contenido">
            &nbsp;
        </div>
        

    </div>

    <div id="confirmar" class="modal">
        <div class="modal-content" >
            <button id="cerrar-modal" onclick="cerrarModal()">&times;</button>
            <div id="contenido_modal">
                Esta usted seguro de eliminar el registro?


            </div>
            <div><button onclick="eliminarDatos()">Eliminar</button>
            <button onclick="cerrarModal()">Cancelar</button></div>
            </div>



        </div>
    </div>


</body>

</html>