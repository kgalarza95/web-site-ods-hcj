<?php
	include "php/sesion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Servicios</title>

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

    <div id="crr_imagenes" class="carousel slide" data-ride="carousel">

      <ul class="carousel-indicators">
        <li data-target="#crr_imagenes" data-slide-to="0" class="active"></li>
        <li data-target="#crr_imagenes" data-slide-to="1"></li>
        <li data-target="#crr_imagenes" data-slide-to="2"></li>
        <li data-target="#crr_imagenes" data-slide-to="3"></li>
      </ul>

      <div class="crr_imagenes_tamanio">
        <div class="carousel-item active">
          <img src="images/serv.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>NUESTROS SERVICIOS</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/serv2.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>NUESTROS SERVICIOS</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/serv3.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>NUESTROS SERVICIOS</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/pobreza.jpeg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>NUESTROS SERVICIOS</h5>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#crr_imagenes" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#crr_imagenes" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>



    <div class="container mt-4">

      <div class="row mb-5">

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/1pobreza.php">
              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-01.jpg" class="img-fluid">
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/2hambre.php">
              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-02.jpg" class="img-fluid">
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/3salud.php">
              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-03.jpg" class="img-fluid">
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/4educacion.php">
              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-04.jpg" class="img-fluid">
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/5igualdad.php">
              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-05.jpg" class="img-fluid">
              </div>
            </a>
          </div>
        </div>




        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/6agua.php">

              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-06.jpg" class="img-fluid">
              </div>
            </a>


          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/7energia.php">

              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-07.jpg" class="img-fluid">
              </div>
            </a>


          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/8trabajo.php">

              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-08.jpg" class="img-fluid">
              </div>
            </a>


          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/9industria.php">

              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-09.jpg" class="img-fluid">
              </div>
            </a>


          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/10reduccion.php">

              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-10-1-300x300.jpg" class="img-fluid">
              </div>
            </a>


          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/11ciudades.php">

              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-11.jpg" class="img-fluid">
              </div>
            </a>


          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/12produccion.php">

              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-12.jpg" class="img-fluid">
              </div>
            </a>


          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/13accion.php">

              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-13.jpg" class="img-fluid">
              </div>
            </a>


          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/14submarina.php">

              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-14.jpg" class="img-fluid">
              </div>
            </a>


          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/15terrestre.php">

              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-15.jpg" class="img-fluid">
              </div>
            </a>


          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/16paz.php">
              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-16.jpg" class="img-fluid">
              </div>
            </a>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
            <a href="paginas/17alianzas.php">
              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-17.jpg" class="img-fluid">
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="bg-white">
              <div class="image">
                <img src="images/servicios/S_SDG_Icons-01-18.jpg" class="img-fluid">
              </div>
          </div>
        </div>

      </div>

    </div>


  </div>


  <?php include('includes/pie.php') ?>
</body>

</html>