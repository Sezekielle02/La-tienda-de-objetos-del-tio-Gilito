<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tienda</title>
</head>
<body class="bg-dark">
    <?php
        include_once("./script/gilito.php");
    ?>

   <div class="container mt-4">
        <div class="row">
        <?php
            $mysqli = new mysqli("localhost", "root", "", "lol");
            $sql = "SELECT * FROM productos";
            $result = $mysqli->query($sql);
            while($row = $result->fetch_assoc()) {
                $id=$row["codigoproducto"];
                echo "<div class='col-auto mb-3'>";
                echo "<div class='card bg-light' style='width: 18rem;'>";
                echo "        <img class='card-img-top mx-auto rounded' src=".$row["nombreimagen"]." style='width: 10rem;' alt='Filo Infinito'>";
                echo "        <div class='card-body'>";
                echo "        <h5 class='card-title'>".$row["nombre"]."</h5>";
                echo "        <p class='card-text'>".$row["descripcion"]."</p>";
                echo "        <a href='carrito/carrito.php?tipos=".$row['tipos']."&nombre=".$row["nombre"]."&precio=".$row["precio"]."&imagen=".$row["nombreimagen"]." ' class='btn btn-primary btn-circle type='button'>Añadir al carrito</a>";
                echo "        <a class='btn btn-info bg-warning'>".$row["precio"]." €</a>";
                echo "        </div>";
                echo "</div>";
                echo "</div>";
            }
            $mysqli->close();
        ?>
        </div>
    </div>
</body>
</html>