<?php
    //Se inicia la sesión
    session_start();

    //Se destruye el contenido de la sesión
    session_destroy();

    //Redirección a index.php
    header("Location: /web/index.php");
?>