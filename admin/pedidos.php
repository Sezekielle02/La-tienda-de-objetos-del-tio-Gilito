<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Zona privativa</title>
</head>
<body class='bg-dark'>
    <?php include_once('banneradmin.php');
    // idpedido, producto, precio, cantidad
    $mysqli = new mysqli("localhost", "root", "", "lol");
    $sql = "select * from detallepedidos";

    echo "<table class='table table-striped table-dark'>";
    echo "    <thead>";
    echo "        <tr>";
    echo "            <th scope='col'>Id Pedido</th>";
    echo "            <th scope='col'>Producto</th>";
    echo "            <th scope='col'>Precio</th>";
    echo "            <th scope='col'>Cantidad</th>";
    echo "        </tr>";
    echo "    </thead>";
    echo "    <tbody>";
    $resultado = $mysqli->query($sql);
    while ($row = $resultado->fetch_assoc()) {
        echo "        <tr>";
        echo "            <th scope='row'>".$row['idpedido']."</th>";
        echo "            <td>".$row['producto']."</td>";
        echo "            <td>".$row['precio']."</td>";
        echo "            <td>".$row['cantidad']."</td>";
        echo "        </tr>";
    }
    echo "    </tbody>";
    echo "</table>";
    ?>
</body>
</html>