<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Zona privativa</title>
</head>
<body class='bg-dark'>
    <?php include_once('banneradmin.php');
        $mysqli = new mysqli('localhost', 'root', '', 'lol');
        $codigoproducto = $_REQUEST['id'];
    
        $sql = "select * from productos where codigoproducto=$codigoproducto";
        $resultado = $mysqli->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $tipos = $row['tipos'];
        }

        echo "<form  action='actualizar.php?id=$codigoproducto' method='post'>";
        echo "    <div class='d-flex flex-column justify-content-center align-items-center mt-2'>";
        echo "        <label for='nombre' class='text-light mb-2'>Nombre del producto: </label>";
        echo "        <input type='text' class='form-control mb-2' id='nombre' name='nombre' value='$nombre'>";
        echo "        <label for='descripcion' class='text-light mb-2'>Descripcion</label>";
        echo "        <textarea class='form-control mb-2' id='descripcion' name='descripcion' rows='4'>$descripcion</textarea>";
        echo "        <label for='precio' class='text-light mb-2'>Precio del producto: </label>";
        echo "        <input type='text' class='form-control mb-2' id='precio' name='precio' value='$precio'>";
        echo "        <label for='tipos' class='text-light mb-2'>Tipo de producto: </label>";
        echo "        <input type='text' class='form-control mb-2' id='tipos' name='tipos' value='$tipos'>";
        echo "        <input type='submit' class='btn btn-danger mb-2'>Actualizar</input>";
        echo "    </div>";
        echo "</form>";

    ?>
</body>
</html>