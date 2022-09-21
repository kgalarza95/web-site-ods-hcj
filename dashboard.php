<?php
include "php/sesion.php";

if (isset($_REQUEST['politica-cookies'])) {
    $caducidad = time() + (60 * 60 * 24 * 365);
    setcookie('politica', 'true', $caducidad);
}

setcookie('politica', 'true', time() - 36000);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ODS EN ACCIÓN</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icono.png">

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/cookies.css" />
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section class="contenido">

        <?php include('includes/cabecera.php') ?>


        <div class="container">
            <main role="main" class="col-sm-12">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="mb-3 my-4 titulo">
                        Dashboard
                        <strong class="letra-negra font-weight-bold titulo">de Datos</strong>
                    </h1>
                </div>

                <canvas class="my-4 w-100" id="chartBarras" width="900" height="380">
                </canvas>

                <canvas class="my-4 w-100" id="chartPastel" width="900" height="380">
                </canvas>

                <canvas class="my-4 w-100" id="myChart" width="900" height="380">
                </canvas>






            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="js/eventos/dahsboard.js"></script>

        <?php include('includes/pie.php') ?>
</body>

</html>