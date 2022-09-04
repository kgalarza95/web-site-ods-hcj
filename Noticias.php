<?php
	include "php/sesion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Noticias</title>
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
        <li data-target="#crr_imagenes" data-slide-to="1"></li>
        <li data-target="#crr_imagenes" data-slide-to="2"></li>
      </ul>

      <div class="crr_imagenes_tamanio">
        <div class="carousel-item active">
          <img src="images/noticias/comida.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>NOTICIAS MÁS DESTACADAS - ENTREGA DE ALIMENTACIÓN 2022</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/noticias/educacion.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>NOTICIAS MÁS DESTACADAS - ACCESO A LA LIBRE EDUCACIÓN</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/noticias/saud.jpg" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5>NOTICIAS MÁS DESTACADAS - ATENCIÓN MÉDICA</h5>
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

    <div class="estio-seccion">
      <div class="container">

        <div class="row mb-5">

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white">
              <div class="image">
                <img src="images/noticias/n1.jpg" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 letra-negra"><a href="https://news.un.org/es/story/2022/07/1511822">La segunda oportunidad
                    de una bióloga mexicana a la que no dejaron reconciliar vida laboral y familiar</a></h2>
                <span class="text-uppercase date d-block mb-3"><small> 19 de julio de 2022</small></span>
                <p class="mb-0">A Nancy Corrales no la dejaron ejercer su profesión mientras [...]</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white">
              <div class="image">
                <img src="images/noticias/n2.jpg" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 letra-negra">
                  <a href="https://news.un.org/es/story/2022/07/1511462">De la lucha a la agricultura: construcción de
                    la paz en Mozambique</a>
                </h2>
                <span class="text-uppercase date d-block mb-3"><small>17 de julio de 2022</small></span>
                <p class="mb-0">En un momento en el que Mozambique quiere dejar atrás [...]</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white">
              <div class="image">
                <img src="images/noticias/n3.jpg" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 letra-negra"><a href="https://news.un.org/es/story/2022/07/1511692">Las ballenas, aliadas en la lucha contra el cambio climático
                  </a></h2>
                <span class="text-uppercase date d-block mb-3"><small> 16 de julio de 2022</small></span>
                <p class="mb-0">
                  En los años setenta, un grupo desconocido de ecologistas inició [...]</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white">
              <div class="image">
                <img src="images/noticias/n4.jpg" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 letra-negra"><a href="https://news.un.org/es/story/2022/07/1511342">Los corales Kuruwitu están de vuelta gracias a los esfuerzos de
                    conservación de los lugareños
                  </a></h2>
                <span class="text-uppercase date d-block mb-3"><small> 14 de julio de 2022</small></span>
                <p class="mb-0">Un pequeño y tranquilo pueblo de Kenya encuentra un nuevo [...]</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white">
              <div class="image">
                <img src="images/noticias/n5.jpg" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 letra-negra"><a href="https://news.un.org/es/story/2022/07/1511582">Las múltiples crisis y la violencia de las bandas agravan el hambre en Haití</a></h2>
                <span class="text-uppercase date d-block mb-3"><small> 12 de julio de 2022</small></span>
                <p class="mb-0">
                  La creciente y mortífera violencia de las bandas en la [...]</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white">
              <div class="image">
                <img src="images/noticias/n6.jpg" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 letra-negra"><a href="https://news.un.org/es/story/2022/07/1511622">Rescatemos los Objetivos de Desarrollo Sostenible antes de que sea demasiado tarde, pide Guterres</a></h2>
                <span class="text-uppercase date d-block mb-3"><small> 13 de julio de 2022</small></span>
                <p class="mb-0">
                  
                  “Sabemos lo que tenemos que hacer”, dice el titular de [...]</p>
              </div>
            </div>
          </div>

       

        </div>

      </div>

      <?php include('includes/pie.php') ?>
</body>

</html>