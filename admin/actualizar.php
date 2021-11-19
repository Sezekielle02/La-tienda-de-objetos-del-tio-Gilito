<?php
    $mysqli = new mysqli('localhost', 'root', '', 'lol');
    $codigoproducto = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];
    $precio = $_REQUEST['precio'];
    $tipos = $_REQUEST['tipos'];

    $sql = "update productos set nombre='$nombre', descripcion='$descripcion', precio=$precio, tipos='$tipos' where codigoproducto=$codigoproducto";
    $mysqli->query($sql);
    $mysqli->close();

    echo "<h1>$sql</h1>";
    header('Location: productos.php');
?>