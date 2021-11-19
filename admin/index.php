<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio de sesión</title>
</head>
<body class='bg-dark'>
    <?php
        include_once('../script/gilito.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = 'admin';
            $contrasenya = 'admin';
            $apodo = isset($_REQUEST['apodo']) ? $_REQUEST['apodo'] : null ;
            $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
            if ($usuario == $apodo && $contrasenya == $password){
                session_start();
                $_SESSION['apodo'] = $_REQUEST['apodo'];
                header('Location: panel.php');
                } else {
                    echo "<h3><p class='text-danger text-center'>Hay cierta incorrección en los datos que has introducido, mamon :)</p></h3>";
                }
            }
    ?>
    <form class='d-flex flex-column align-items-center mt-2' method='post'>
        <div class="mb-3">
            <label for="apodo" class="form-label text-light text-center">Nombre de usuario</label>
            <input type="text" class="form-control" style='width: 400px;' id='apodo' name='apodo'>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label text-light text-center">Password</label>
            <input type="password" class="form-control" style='width: 400px;' id="password" name='password'>
        </div>
        <button type="submit" class="btn btn-success" style='width: 400px;'>Iniciar sesion</button>
    </form>
</body>
</html>