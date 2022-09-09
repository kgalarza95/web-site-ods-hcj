<?php
include "../php/sesion2.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <?php include('../includes/head2.php') ?>
</head>

<body>
    <?php include('../includes/cabecera2.php') ?>

    <section class="container mt-5">
        <article class="row">

            <div class="col-md-12">
                <h1 class="mb-3 my-4 text-center">
                    Información de 
                    <strong class="letra-negra font-weight-bold">Paises </strong>
                </h1>

                <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>NAME</th>
                            <th>NOM</th>
                            <th>ISO2</th>
                            <th>ISO3</th>
                            <th>PHONE_CODE</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </article>
    </section>

    <?php include('../includes/pie2.php') ?>

    <script src="../js/lib/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="../js/eventos/pais.js"></script>


</body>

</html>