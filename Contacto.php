<?php
include "php/sesion.php";
//  include "php/model/contacto.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contacto</title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/icono.png">

  <link rel="stylesheet" href="fonts/icomoon/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />

</head>

<body>

  <div class="contenido">
    <?php include('includes/cabecera.php') ?>

    <div id="crr_imagenes" class="carousel slide" data-ride="carousel">

      <ul class="carousel-indicators">
        <li data-target="#crr_imagenes" data-slide-to="0" class="active"></li>
        <!-- <li data-target="#crr_imagenes" data-slide-to="1"></li> -->
      </ul>

      <div class="crr_imagenes_tamanio">
        <div class="carousel-item active">
          <img src="images/redes.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>CONTACTO</h5>
          </div>
        </div>
        <!--  <div class="carousel-item">
          <img src="images/XXX" alt="">
        </div> -->

      </div>

      <a class="carousel-control-prev" href="#crr_imagenes" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#crr_imagenes" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>



    <div class="estio-seccion bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">



            <form action="php/controller/contacto.php"  method="POST" class="p-5 bg-white" id='contacto'>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="nombre">Nombre</label>
                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" onkeypress='return soloLetras(event)'>
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
                  <label class="font-weight-bold" for="telefono">Telefono</label>
                  <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" onkeypress=' return soloNumeros(event)'>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="mensaje">Mensaje</label>
                  <textarea name="mensaje" id="mensaje" cols="30" rows="5" class="form-control" placeholder="Mensaje"></textarea>
                </div>
              </div>



              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary pill px-4 py-2" onclick='ingresarCliente("contacto")'>Enviar</button>
                </div>
              </div>


            </form>


            <div class="col-lg-4">
              <div class="p-4 mb-3 bg-white">
                <h3 class="h5 letra-negra mb-3">Informacion de Contacto</h3>
                <p class="mb-0 font-weight-bold">Direccion</p>
                <p class="mb-4">Victor Manuel Rendón,
                  Guayaquil 090313</p>

                <p class="mb-0 font-weight-bold">Telefono</p>
                <p class="mb-4"><a href="#">+593 985396241</a></p>

                <p class="mb-0 font-weight-bold">Email</p>
                <p class="mb-0"><a href="#">
                    correo.ug.cambiar@ug.edu.ec</a></p>

              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

    <footer class="pie-de-pagina">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-6 col-md-4 col-lg-8 mb-5 mb-lg-0">
                <h3 class="encabezado-de-pie mb-4 text-primary">Nosotros</h3>
                <p class="text-justify">
                  Como agencia líder de las Naciones Unidas en desarrollo internacional, el PNUD trabaja en 170 países y
                  territorios para erradicar la pobreza y reducir la desigualdad. Ayudamos a los países a desarrollar
                  políticas, habilidades de liderazgo, habilidades de asociación, capacidades institucionales y a
                  desarrollar resiliencia para lograr los Objetivos de Desarrollo Sostenible. Nuestro trabajo se concentra
                  en tres áreas de enfoque; desarrollo sostenible, gobernanza democrática y consolidación de la paz, y
                  resiliencia climática y ante desastres.
                </p>
                <p>
                  <a href="Nosotros.php" class="btn btn-primary pill text-white px-4">Leer Mas</a>
                </p>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="encabezado-de-pie mb-4 text-primary">Menu</h3>
                <ul class="list-unstyled">
                  <li><a href="Servicios.php">Servicios</a></li>
                  <li><a href="Noticias.php">Noticias</a></li>
                  <li><a href="Contacto.php">Contacto</a></li>
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="js/form.js"></script>
    </footer>

</body>

</html>

<?php


//$datos = array($_POST['nombre'],$_POST['email'],$_POST['telefono'],$_POST['mensaje']);
//var_dump($datos);

/*  if (isset($_POST['']) && isset($_POST['password'])) {
              require_once "php/config/conexion.php";
              require_once "php/login.php";
          } */
?>
</div>