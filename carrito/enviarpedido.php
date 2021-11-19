<?php
    session_start();

    $mysqli = new mysqli("localhost", "root", "", "lol");
    $totalProductos = $_REQUEST['total'];
    $sql = "insert into pedidos (totalpedido) values ($totalProductos);";
    $mysqli->query($sql);
    $sql = "select idpedido from pedidos order by idpedido desc limit 1";
    $resultado = $mysqli->query($sql);
    while ($row = $resultado->fetch_assoc()) {
        $idpedido = $row['idpedido'];
    }
    $resultado->close();
    foreach ($_SESSION as $resultado) {
        $sql = "insert into detallepedidos (idpedido, producto, precio, cantidad) values ($idpedido, '".$resultado['nombre']."', ".$resultado['precio'].", 1)";
        $mysqli->query($sql);
    }

    session_destroy();
    header('Location: carrito.php')
?>