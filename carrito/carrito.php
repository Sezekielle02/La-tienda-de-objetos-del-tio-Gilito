<?php
    session_start();
    // recojo los datos del REQUEST
    $nombre = $_REQUEST["nombre"];
    $precio = $_REQUEST["precio"];
    $tipos = $_REQUEST["tipos"];
    $imagen = $_REQUEST["imagen"];

    // Lo guardo en la sesion

    $prodsession = ["nombre" => $nombre, "precio" => $precio, "tipos" => $tipos, "imagen" => $imagen];
    $_SESSION["$nombre"] = $prodsession;

    // Me redirijo a index.php
    header("Location: /web/index.php");
?>