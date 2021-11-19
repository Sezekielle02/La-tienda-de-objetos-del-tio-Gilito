<?php
    $devolver = array();
    $mysqli = new mysqli('localhost', 'root', '', 'lol');
    header('Content-Type: application/json');
    
    if (!isset($_REQUEST['id'])) {
        $sql = 'select * from productos';
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            $devolver['codigoproducto'][] = $row;
            $devolver['nombre'][] = $row;
            $devolver['descripcion'][] = $row;
            $devolver['precio'][] = $row;
            $devolver['tipos'][] = $row;
            $devolver['nombreimagen'][] = $row;
        };
        echo json_encode($devolver['codigoproducto']);
    } else {
        $id = $_REQUEST['id'];
        $sql = "select * from productos where codigoproducto=$id";
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_assoc()) {
            $devolver['codigoproducto'][] = $row['codigoproducto'];
            $devolver['nombre'][] = $row['nombre'];
            $devolver['descripcion'][] = $row['descripcion'];
            $devolver['precio'][] = $row['precio'];
            $devolver['tipos'][] = $row['tipos'];
            $devolver['nombreimagen'][] = $row['nombreimagen'];
        }
        echo json_encode($devolver);
    }
    $mysqli->close();
?>