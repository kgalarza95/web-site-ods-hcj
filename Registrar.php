<?php
include "php/sesion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrar Cliente</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icono.png">

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
</head>

<body>

    <div class="contenido">
        <?php include('includes/cabecera.php') ?>

        <div class="estio-seccion bg-light">
            <div class="container">
                <div class="row">
                    <legend>Formulario de Registro</legend>
                    <div class="col-md-12 col-lg-8 mb-5">
                        <form action="#" class="p-5 bg-white">
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="nombre">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control" placeholder="Nombre" onkeypress="return soloLetras(event)">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="email">Email</label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="telefono">Teléfono</label>
                                    <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" onkeypress='return soloNumeros(event)'>
                                </div>
                            </div>

                            <div c lass="row form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pill px-4 py-2" id="btn-enviar">Registrar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4">
                        <div class="p-4 mb-3 bg-white">
                            <h3 class="h5 letra-negra mb-3">Listas de Colaboradores</h3>
                            <div id="colaboradores">
                               
                            </div>
                            <div id="nuevoColaborador"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <?php include('includes/pie.php') ?>
    <script src="js/eventos/clientes.js"></script>

</body>

</html>