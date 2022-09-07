<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN SISTEMA</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icono.png">

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />


</head>

<body>
    <?php
    $usuario = "";
    if (isset($_COOKIE['username'])) {
        $usuario = $_COOKIE['nombre'];
    }
    ?>
    <form action="" class="p-5 bg-white" id='registrar' method="POST">
        <div style='margin-left:25%; '>
            <h1><b>SISTEMA PARCIAL 2 - UG</b></h1>

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="username">Usuario</label>
                    <input type="text" id="username" 
                    name="username" 
                    class="form-control" 
                    placeholder="Usuario"
                    value="<?php echo $usuario; ?>">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="password">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña">
                </div>
            </div>

            <div c lass="row form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pill px-4 py-2">Iniciar Sesión</button>
                    <!-- <input type="submit" value="Ingresar"> -->
                    <!-- <button type="submit" class="btn btn-primary pill px-4 py-2" onclick='login()'>Iniciar Sesión</button> -->
                </div>
            </div>
    </form>
    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        require_once "php/config/conexion.php";
        require_once "php/login.php";
    }
    ?>
    </div>
</body>
<script src="js/form.js"></script>

</html>