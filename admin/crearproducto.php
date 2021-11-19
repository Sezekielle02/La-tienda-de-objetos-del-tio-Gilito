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
    // nombre, descripcion, precios, tipos, imagen
    ?>
    <form  action="subirproducto.php" method="post" enctype="multipart/form-data">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2">
            <label for="nombre" class='text-light mb-2'>Nombre del producto: </label>
            <input type="text" class="form-control mb-2" id="nombre" name='nombre'>
            <label for="descripcion" class='text-light mb-2'>Descripcion</label>
            <textarea class="form-control mb-2" id="descripcion" name='descripcion' rows="4"></textarea>
            <label for="precio" class='text-light mb-2'>Precio del producto: </label>
            <input type="text" class="form-control mb-2" id="precio" name='precio'>
            <label for="tipos" class='text-light mb-2'>Tipo de producto: </label>
            <input type="text" class="form-control mb-2" id="tipos" name='tipos'>
            <label for="imagen" class='text-light mb-2'>Imagen del producto: </label>
            <input type="file" class="form-control-file mb-2" id="imagen" name='imagen'>
            <input type="submit" class="btn btn-success mb-2">Crear tu producto</input>
        </div>
    </form>
</body>
</html>