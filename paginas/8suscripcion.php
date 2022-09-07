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
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
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
    <footer class="pie-de-pagina">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-6 col-md-4 col-lg-8 mb-5 mb-lg-0">
                <h3 class="encabezado-de-pie mb-4 text-primary">Nosotros</h3>
                <p class="text-justify">
                  Como agencia líder de las Naciones Unidas en desarrollo internacional, el PNUD trabaja
                  en 170 países y territorios para erradicar la pobreza y reducir la desigualdad. Ayudamos
                  a los países a desarrollar políticas, habilidades de liderazgo, habilidades de
                  asociación, capacidades institucionales y a desarrollar resiliencia para lograr los
                  Objetivos de Desarrollo Sostenible. Nuestro trabajo se concentra en tres áreas de
                  enfoque; desarrollo sostenible, gobernanza democrática y consolidación de la paz, y
                  resiliencia climática y ante desastres.
                </p>
                <p>
                  <a href="Nosotros.php" class="btn btn-primary pill text-white px-4">Leer Mas</a>
                </p>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="encabezado-de-pie mb-4 text-primary">Menu</h3>
                <ul class="list-unstyled">
                  <li><a href="../Servicios.php">Servicios</a></li>
                  <li><a href="../Noticias.php">Noticias</a></li>
                  <li><a href="../Contacto.php">Contacto</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="row ">
              <div class="col-md-12">
                <h3 class="encabezado-de-pie mb-4 text-primary">Direccion</h3>
              </div>
              <div class="col-md-6">
                <p>
                  Victor Manuel Rendón,
                  <br />
                  Guayaquil 090313
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="row mb-4">
              <div class="col-md-12">
                <h3 class="encabezado-de-pie mb-4 text-primary">Contacto</h3>
              </div>
              <div class="col-md-6">
                Tel. + (593) 985396241 <br />
                Email. correo.ug.cambiar@ug.edu.ec
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="encabezado-de-pie mb-4 text-primary">
                  Redes Sociales
                </h3>
              </div>
              <div class="col-md-12">
                <p>
                  <a href="https://twitter.com/home?lang=es" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                  <a href="https://www.facebook.com/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="https://www.linkedin.com/login/es" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                  <a href="https://www.instagram.com/" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>


      <footer class="my-5 pt-1 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 Universidad de Guayaquil</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Politicas</a></li>
          <li class="list-inline-item"><a href="#">Terminos</a></li>
          <li class="list-inline-item"><a href="#">Soporte</a></li>
        </ul>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="../js/form.js"></script>
    </footer>


</body>

</html>