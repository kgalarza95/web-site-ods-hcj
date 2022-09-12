<?php
include "../php/sesion2.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ods</title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/icono.png">

  <link rel="stylesheet" href="../fonts/icomoon/style.css" />
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />


</head>

<body>

  <sectiosn class="contenido">
    <?php include('../includes/cabecera2.php') ?>


    <section class="container">


      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../images/energia.png" alt="" width="72" height="72">

        <div class=" order-1">
          <h2 class="mb-3 text-uppercase">SUSCRIPCIÓN
            <strong class="letra-negra font-weight-bold">INFORMACIÓN ENERGÉTICA </strong>
          </h2>

        </div>
        <p class="lead">Ingrese sus datos para una suscripción voluntaria para recibir Información energética.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4 d-none">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3" id="datos" >
            <!--  -->
            <!--  -->
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>


        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Datos de Suscripción</h4>
          <form class="needs-validation" novalidate method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="txt_nombres">Nombres</label>
                <input type="text" class="form-control" id="txt_nombres" name="txt_nombres" required>

              </div>

              <div class="col-md-6 mb-3">
                <label for="txt_apellidos">Apellidos</label>
                <input type="text" class="form-control" id="txt_apellidos" name="txt_apellidos" required>

              </div>
            </div>

            <div class="mb-3">
              <label for="txt_correo">Correo</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="txt_correo" placeholder="Correo" required>

              </div>
            </div>


            <div class="mb-3">
              <label for="txt_direccion">Dirección</label>
              <input type="text" class="form-control" id="txt_direccion" placeholder="Colinas Mz312, vll. 17" required>

            </div>

            <div class="d-block my-3">
              <label for="sexo">Sexo</label>
              <div class="custom-control custom-radio">
                <input id="chk_masculino" name="sexo" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="chk_masculino">Masculino</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="chk_femenino" name="sexo" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="chk_femenino">Femenino</label>
              </div>

            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>

              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
              </div>

            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="chk_inf_energia">
              <label class="custom-control-label" for="chk_inf_energia">Información del consumo energético</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="chk_inf_ods">
              <label class="custom-control-label" for="chk_inf_ods">Información de las ODS en el mundo</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Suscripción</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="rb_diaria" name="rbg_suscrip" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="rb_diaria">Diaria</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="rb_mensual" name="rbg_suscrip" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="rb_mensual">Mensual</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="rb_anual" name="rbg_suscrip" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="rb_anual">Anual</label>
              </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Suscribirse</button>

            <?php
            if (isset($_POST['txt_nombres']) && isset($_POST['txt_apellidos'])) {
              require_once "../php/controller/suscripcion_controller.php";
            }
            ?>

          </form>
        </div>
      </div>


    </section>



    </section>

    <hr>
    <?php include('../includes/pie2.php') ?>
<script src="../js/eventos/suscripcion.js"></script>

</body>

</html>