<?php
    echo "    <nav class='navbar navbar-expand-lg navbar-dark bg-success'>";
    echo "    <a class='navbar-brand mx-3' href='panel.php'>El admin GILITO!</a>";
    echo "    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>";
    echo "    <span class='navbar-toggler-icon'></span>";
    echo "    </button>";
    echo "    <div class='collapse navbar-collapse' id='navbarNav'>";
    echo "    <ul class='navbar-nav'>";
    echo "        <li class='nav-item active'>";
    echo "        <a class='nav-link' href='panel.php'>Inicio</a>";
    echo "        </li>";
    echo "        <li class='nav-item'>";
    echo "        <a class='nav-link' href='productos.php'>Productos</a>";
    echo "        </li>";
    echo "        <li class='nav-item'>";
    echo "        <a class='nav-link' href='pedidos.php'>Pedidos</a>";
    echo "        </li>";
    echo "        <li class='nav-item'>";
    echo "        <a class='nav-link' href='crearproducto.php'>Crear producto</a>";
    echo "        </li>";
    echo "        <li class='nav-item'>";
    echo "        <a class='btn btn-danger' href='../carrito/vaciarcarrito.php'>Cerrar sesion</a>";
    echo "        </li>";
    echo "    </ul>";
    echo "    </div>";
    echo "</nav>";
?>