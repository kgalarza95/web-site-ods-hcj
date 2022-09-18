<?php
include "../php/sesion2.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <?php include('../includes/head2.php') ?>
</head>

<body>
    <?php include('../includes/cabecera2.php') ?>
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1> Registro de alumnos </h1>
                <form action="#" method="POST">

                    <input type="text" class="form-control mb-3" name="codigo" id="codigo" placeholder="cod estudiante"  onkeypress=' return soloNumeros(event)' maxlength="5">
                    <input type="text" class="form-control mb-3" name="dni" id="dni" placeholder="cedula" onkeypress=' return soloNumeros(event)' maxlength="10">
                    <input type="text" class="form-control mb-3" name="nombres" id="nombres" placeholder="Nombres" onkeypress='return soloLetras(event)'>
                    <input type="text" class="form-control mb-3" name="apellidos" id="apellidos" placeholder="Apellidos" onkeypress='return soloLetras(event)'>

                    <input type="submit" id="btn-enviar" class="btn btn-primary">
                    <input type="submit" id="btn-actualializar" class="btn btn-secondary" value="Actualizar">
                    <input type="submit" id="btn-eliminar" class="btn btn-danger" value="Eliminar">
                </form>
            </div>

            <div class="col-md-8">

                <h1>tabla Codigo</h1>
                <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>CODIGO</th>
                            <th>Dni</th>
                            <th>Nombres</th>
                            <th>pellidos</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
    <?php include('../includes/pie2.php') ?>
    <script src="../js/lib/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="js/form.js"></script>
    <script src="../js/eventos/estudiantes.js?v=1"></script>
</body>

</html>