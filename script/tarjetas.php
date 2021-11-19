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
        echo "        <a href='script/crearcarrito.php?id=$id&nombreimagen=$imagen&' class='btn btn-primary'>Añadir al carrito</a>";
        echo "        <a class='btn btn-info bg-warning'>".$row["precio"]." €</a>";
        echo "        </div>";
        echo "</div>";
        echo "</div>";
    }
    $mysqli->close();
?>