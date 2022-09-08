<?php
include "../php/sesion2.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('../includes/head2.php') ?>
</head>

<body>

  <div class="contenido">
    <?php include('../includes/cabecera2.php') ?>


    <div id="crr_imagenes" class="carousel slide" data-ride="carousel">

      <ul class="carousel-indicators">
        <li data-target="#crr_imagenes" data-slide-to="0" class="active"></li>
        <li data-target="#crr_imagenes" data-slide-to="1"></li>
        <li data-target="#crr_imagenes" data-slide-to="3"></li>
        <li data-target="#crr_imagenes" data-slide-to="4"></li>
        <li data-target="#crr_imagenes" data-slide-to="5"></li>
      </ul>

      <div class="crr_imagenes_tamanio">

        <div class="carousel-item active">
          <img src="../images/esqeumabd/bd1.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="letra-negra font-weight-bold">ESQUEMA DE BASE DE DATOS</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/esqeumabd/bd2.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
          <h5 class="letra-negra font-weight-bold">ESQUEMA DE BASE DE DATOS</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/esqeumabd/bd3.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
          <h5 class="letra-negra font-weight-bold">ESQUEMA DE BASE DE DATOS</h5>
          </div>
        </div>

        <div class="carousel-item">
          <img src="../images/esqeumabd/bd4.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="letra-negra font-weight-bold">ESQUEMA DE BASE DE DATOS</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/esqeumabd/bd5.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="letra-negra font-weight-bold">ESQUEMA DE BASE DE DATOS</h5>
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


    <?php include('../includes/pie2.php') ?>
</body>

</html>