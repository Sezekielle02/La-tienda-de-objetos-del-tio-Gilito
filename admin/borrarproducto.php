<?php
    $mysqli = new mysqli('localhost', 'root', '', 'lol');
    $codigoproducto = $_REQUEST['id'];

    $sql = "delete from productos where codigoproducto=$codigoproducto";
    $mysqli->query($sql);
    $mysqli->close();

    header('Location: productos.php');
?>