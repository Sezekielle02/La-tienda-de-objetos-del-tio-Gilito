<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Carrito</title>
</head>
<body class="bg-dark">
    <?php
        session_start();
        $totalProductos=0;
        include_once('../script/gilito.php');
        echo "<h1 class='text-light text-center mt-2'>Mi carrito</h1>";
        if (empty($_SESSION)) {
            echo "<h2 class='text-light text-center mt-2 mb-2'>El carrito esta vacio</h2>";
        } else {
            
            echo "<h2 class='text-light text-center mt-2 mb-2'>Lo que tienes en el carrito</h2>";
            echo "<table class='table table-dark table-striped'>";
            echo "<thead class=''>";
            echo "<tr>";
            echo "<th scope='col' class='text-light'>Nombre</th>";
            echo "<th scope='col' class='text-light'>Precio</th>";
            echo "<th scope='col' class='text-light'>Tipos</th>";
            echo "<th scope='col' class='text-light'>Imagen</th>";
            // echo "<th>Imagen</th>"
            echo "</tr>";
            echo "</thead>";
            foreach ($_SESSION as $result) {
                echo "<tr>";
                echo "<td class='text-light'>".$result["nombre"]."</td>";
                echo "<td class='text-light'>".$result["precio"]."</td>";
                echo "<td class='text-light'>".$result["tipos"]."</td>";
                echo "<td class='text-light'><img src='.".$result["imagen"]."' class='rounded'></td>";
                // echo "<td>".$result["nombreimagen"]."</td>"
                $totalProductos+=$result['precio'];
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td class='text-light'>Total:</td>";
            echo "<td class='text-light'>".$totalProductos."</td>";
            echo "<td class='text-light'></td>";
            echo "<td class='text-light'></td>";
            echo "</tr>";
            echo "</table>";
            echo "<a href='vaciarcarrito.php' class='btn btn-danger btn-circle mx-2' type='button'>Vaciar carrito</a>";
            echo "<a href='enviarpedido.php?total=".$totalProductos."' class='btn btn-success btn-circle' type='button'>Comprar</a>";
        }

        //Es necesario dejar el espacio entre ambos botones para que quede estetico.
    ?>

    <!-- Boton vaciar carrito -->
    <!-- <p><a class="btn btn-danger" href="vaciarcarrito.php" role="button">Vaciar carrito</a></p> -->
</body>
</html>