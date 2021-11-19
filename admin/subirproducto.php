<?php
    $mysqli = new mysqli('localhost', 'root', '', 'lol');
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];
    $precio = $_REQUEST['precio'];
    $tipo = $_REQUEST['tipos'];
    $dirImagenes = '../img/';
    $fichero_subido = $dirImagenes . basename($_FILES['imagen']['name']);
    $nombre_imagen = basename($_FILES['imagen']['name']);

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
        // Mensaje de confirmacion
        echo "<p>Se ha subido correctamente en la ruta: ". $fichero_subido ."</p>";
    }

    $sql = "insert into productos (nombre, descripcion, precio, tipos, nombreImagen) values ('$nombre', '$descripcion', $precio, '$tipo', '/web/img/$nombre_imagen')";
    echo "<h1>$sql</h1>";
    $mysqli->query($sql);
    $mysqli->close();
    header('Location: crearproducto.php');
?>