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
    $mysqli = new mysqli('localhost', 'root', '', 'lol');
    $sql = "select * from productos";
    $resultado = $mysqli->query($sql);

    echo "<table class='table table-dark'>";
    echo "    <thead>";
    echo "        <tr>";
    echo "            <th scope='col'>Codigo Producto</th>";
    echo "            <th scope='col'>Nombre</th>";
    echo "            <th scope='col'>Descripcion</th>";
    echo "            <th scope='col'>Precio</th>";
    echo "            <th scope='col'>Tipos</th>";
    echo "            <th scope='col'>Acciones</th>";
    echo "        </tr>";
    echo "    </thead>";
    echo "    <tbody>";
    while ($row = $resultado->fetch_assoc()) {
        echo "        <tr>";
        echo "            <th scope='row'>".$row['codigoproducto']."</th>";
        echo "            <td>".$row['nombre']."</td>";
        echo "            <td>".$row['descripcion']."</td>";
        echo "            <td>".$row['precio']."</td>";
        echo "            <td>".$row['tipos']."</td>";
        echo "            <td><a class='btn btn-success mx-2' href='modificarproducto.php?id=".$row['codigoproducto']."' role='button'>Modificar</a><a class='btn btn-danger' href='borrarproducto.php?id=".$row['codigoproducto']."' role='button'>Borrar</a></td>";
        echo "        </tr>";
    }
    echo "    </tbody>";
    echo "</table>";


    ?>
</body>
</html>