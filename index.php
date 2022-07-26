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
</head>

<body>
    <section class="contenido">

        <?php include('includes/cabecera.php') ?>



        <!-- carrusel de imagenes -->
        <div id="crr_imagenes" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#crr_imagenes" data-slide-to="0" class="active"></li>
                <li data-target="#crr_imagenes" data-slide-to="1"></li>
                <li data-target="#crr_imagenes" data-slide-to="2"></li>
                <li data-target="#crr_imagenes" data-slide-to="4"></li>
            </ul>

            <div class="crr_imagenes_tamanio carousel-inner">
                <div class="carousel-item active image">
                    <img src="images/pobreza.jpeg" alt="" />
                </div>
                <div class="carousel-item image">
                    <img src="images/pobre.jpg" alt="" class="img-fluid" />
                </div>
                <div class="carousel-item">
                    <img src="images/banner/banner (2).jpg" alt="" />
                </div>
                <div class="carousel-item">
                    <img src="images/ODSbann.jpg" alt="" />
                </div>
            </div>

            <a class="carousel-control-prev" href="#crr_imagenes" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#crr_imagenes" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <article class="estio-seccion">
            <div class="container">
                <div class="row align-items-center">
                    <div class="  ">
                        <h2 class="mb-3">
                            ¿QUE SON LAS
                            <strong class="letra-negra font-weight-bold">ODS </strong>?
                        </h2>
                        <p class="destacar">Objetivos de Desarrollo Sostenible</p>
                        <p class="mb-4">
                            Los Objetivos de Desarrollo Sostenible (ODS), también conocidos como Objetivos Globales,
                            fueron adoptados por las Naciones Unidas en 2015 como un llamamiento universal para poner
                            fin a la pobreza, proteger el planeta y garantizar que para el 2030 todas las personas
                            disfruten de paz y prosperidad.
                            Los 17 ODS están integrados: reconocen que la acción en un área afectará los resultados en
                            otras áreas y que el desarrollo debe equilibrar la sostenibilidad social, económica y
                            ambiental. Los países se han comprometido a priorizar el progreso de los más rezagados.
                            Los ODS están diseñados para acabar con la pobreza, el hambre, el sida y la discriminación
                            contra mujeres y niñas.
                            La creatividad, el conocimiento, la tecnología y los recursos financieros de toda la
                            sociedad son necesarios para alcanzar los ODS en todos los contextos.
                        </p>
                        <p>
                            <a href="informacion.php" class="btn btn-primary pill px-4">Leer Mas</a>
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 ml-auto">
                        <img src="images/ODSbann.jpg" class="img-fluid" />
                    </div>
                </div>
            </div>
        </article>

        <!-- Servicios -->
        <section class="border-bottom container">

            <div class="row no-gutters">

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/1pobreza.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-baby display-4"></i>
                            </span>
                            <h2>1 Fin de la pobreza</h2>
                            <p>
                                Para lograr este Objetivo de acabar con la pobreza, el
                                crecimiento económico debe ser inclusivo, con el fin de crear
                                empleos sostenibles y de promover la igualdad.
                            </p>
                        </a>
                    </div>
                </article>

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/2hambre.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fab fa-apple display-4"></i>
                            </span>
                            <h2>2 Hambre cero</h2>
                            <p>
                                El sector alimentario y el sector agrícola ofrecen soluciones
                                claves para el desarrollo y son vitales para la eliminación
                                del hambre y la pobreza.
                            </p>
                        </a>
                    </div>
                </article>

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/3salud.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-ambulance display-4"></i>
                            </span>
                            <h2>3 Salud y bienestar</h2>
                            <p>
                                Para lograr los Objetivos de Desarrollo Sostenible, es
                                fundamental garantizar una vida saludable y promover el
                                bienestar universal.
                            </p>
                        </a>
                    </div>
                </article>

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/4educacion.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-book display-4"></i>
                            </span>
                            <h2>4 Educación de calidad</h2>
                            <p>
                                La educación es la base para mejorar nuestra vida y el
                                desarrollo sostenible.
                            </p>
                        </a>
                    </div>
                </article>

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/5igualdad.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-venus-mars display-4"></i>
                            </span>
                            <h2>5 Igualdad de género</h2>
                            <p>
                                La igualdad entre los géneros no es solo un derecho humano
                                fundamental, sino la base necesaria para conseguir un mundo
                                pacífico, próspero y sostenible.
                            </p>
                        </a>
                    </div>
                </article>

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/6agua.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-water display-4"></i>
                            </span>
                            <h2>6 Agua limpia y saneamiento</h2>
                            <p>
                                El agua libre de impurezas y accesible para todos es parte
                                esencial del mundo en que queremos vivir.
                            </p>
                        </a>
                    </div>
                </article>

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/7energia.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-charging-station display-4"></i>
                            </span>
                            <h2>7 Energía asequible y no contaminante</h2>
                            <p>
                                La energía es central para casi todos los grandes desafíos y
                                oportunidades a los que se enfrenta el mundo en la actualidad.
                            </p>
                        </a>
                    </div>
                </article>

                <articlearticle class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/8trabajo.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-briefcase display-4"></i>
                            </span>
                            <h2>8 Trabajo decente y crecimiento económico</h2>
                            <p>
                                Debemos reflexionar sobre este progreso lento y desigual, y
                                revisar nuestras políticas económicas y sociales destinadas a
                                erradicar la pobreza.
                            </p>
                        </a>
                    </div>
                </articlearticle>

                <articlearticle class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/9industria.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="far fa-building display-4"></i>
                            </span>
                            <h2>9 Industria, innovación e infraestructuras</h2>
                            <p>
                                Las inversiones en infraestructura son fundamentales para
                                lograr un desarrollo sostenible.
                            </p>
                        </a>
                    </div>
                </articlearticle>

                <articlearticle class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/10reduccion.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fab fa-slideshare display-4"></i>
                            </span>
                            <h2>10 Reducción de las desigualdades</h2>
                            <p>Reducir la desigualdad en y entre los países.</p>
                        </a>
                    </div>
                </articlearticle>

                <articlearticle class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/11ciudades.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-city display-4"></i>
                            </span>
                            <h2>11 Ciudades y comunidades sostenibles</h2>
                            <p>
                                Las inversiones en infraestructura son cruciales para lograr
                                el desarrollo sostenible.
                            </p>
                        </a>
                    </div>
                </articlearticle>

                <articlearticle class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/12produccion.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-comment-dollar display-4"></i>
                            </span>
                            <h2>12 Producción y consumo responsables</h2>
                            <p>
                                El objetivo del consumo y la producción sostenibles es hacer
                                más y mejores cosas con menos recursos.
                            </p>
                        </a>
                    </div>
                </articlearticle>

                <articlearticle class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/13accion.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-user-check display-4"></i>
                            </span>
                            <h2>13 Acción por el clima</h2>
                            <p>
                                El cambio climático es un reto global que no respeta las
                                fronteras nacionales.
                            </p>
                        </a>
                    </div>
                </articlearticle>

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/14submarina.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-ship display-4"></i>
                            </span>
                            <h2>14 Vida submarina</h2>
                            <p>
                                Conservar y utilizar en forma sostenible los océanos, los
                                mares y los recursos marinos para el desarrollo sostenible.
                            </p>
                        </a>
                    </div>
                </article>

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/15terrestre.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-spa display-4"></i>
                            </span>
                            <h2>15 Vida de ecosistemas terrestres</h2>
                            <p>
                                Gestionar sosteniblemente los bosques, luchar contra la
                                desertificación, detener e invertir la degradación de las
                                tierras y detener la pérdida de biodiversidad.
                            </p>
                        </a>
                    </div>
                </article>

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/16paz.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-praying-hands display-4"></i>
                            </span>
                            <h2>16 Paz, justicia e instituciones sólidas</h2>
                            <p>
                                Acceso universal a la justicia y la construcción de
                                instituciones responsables y eficaces a todos los niveles.
                            </p>
                        </a>
                    </div>
                </article>

                <article class="col-md-6 col-lg-3">
                    <div class="w-100 h-100 block-feature p-5 bg-light">
                        <a href="paginas/17alianzas.php">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="d-block mb-3">
                                <i class="fas fa-balance-scale display-4"></i>
                            </span>
                            <h2>17 Alianzas para lograr los objetivos</h2>
                            <p>
                                Revitalizar la Alianza Mundial para el Desarrollo Sostenible.
                            </p>
                        </a>
                    </div>
                </article>


            </div>
        </section>

        <article class="estio-seccion bg-light">
            <div class="container">
                <div class="heading-with-border text-center mb-5">
                    <h2 class="heading">DESARROLLADORES DEL SISTEMA</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="bloque-img-nostros">
                            <img src="images/persona.png.png" alt="Image" class="img-fluid" />
                            <div class="cuadrar-img-nosotros">
                                <h2>RICARDO RODRÍGUEZ ERICK</h2>
                                <p class="letra-negra">
                                    Estudiante de la Universidad de Guayaquil, facultad de Ciencias matemáticas y
                                    físicas
                                </p>
                                <p>
                                    <a href="https://twitter.com/home?lang=es" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                                    <a href="https://www.facebook.com/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                                    <a href="https://www.linkedin.com/login/es" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                                    <a href="https://www.instagram.com/" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="bloque-img-nostros">
                            <img src="images/persona.png.png" alt="Image" class="img-fluid" />
                            <div class="cuadrar-img-nosotros">
                                <h2>GALLEGOS SALMERÓN DANIEL STALIN</h2>
                                <p class="letra-negra">
                                    Estudiante de la Universidad de Guayaquil, facultad de Ciencias matemáticas y
                                    físicas
                                </p>
                                <p>
                                    <a href="https://twitter.com/home?lang=es" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                                    <a href="https://www.facebook.com/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                                    <a href="https://www.linkedin.com/login/es" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                                    <a href="https://www.instagram.com/" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="bloque-img-nostros">
                            <img src="images/persona.png.png" alt="Image" class="img-fluid" />
                            <div class="cuadrar-img-nosotros">
                                <h2>NUÑEZ GÓMEZ STEVEN MIGUEL</h2>
                                <p class="letra-negra">
                                    Estudiante de la Universidad de Guayaquil, facultad de Ciencias matemáticas y
                                    físicas
                                </p>
                                <p>
                                    <a href="https://twitter.com/home?lang=es" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                                    <a href="https://www.facebook.com/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                                    <a href="https://www.linkedin.com/login/es" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                                    <a href="https://www.instagram.com/" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="bloque-img-nostros">
                            <img src="images/mujer.png" alt="Image" class="img-fluid" />
                            <div class="cuadrar-img-nosotros">
                                <h2>SALAS CAMPUZANO JOSELYN MADELAINE</h2>
                                <p class="letra-negra">
                                    Estudiante de la Universidad de Guayaquil, facultad de Ciencias matemáticas y
                                    físicas
                                </p>
                                <p>
                                    <a href="https://twitter.com/home?lang=es" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                                    <a href="https://www.facebook.com/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                                    <a href="https://www.linkedin.com/login/es" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                                    <a href="https://www.instagram.com/" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="bloque-img-nostros">
                            <img src="images/persona.png.png" alt="Image" class="img-fluid" />
                            <div class="cuadrar-img-nosotros">
                                <h2>BRIONES DUARTE DAIVI ALEXANDER</h2>
                                <p class="letra-negra">
                                    Estudiante de la Universidad de Guayaquil, facultad de Ciencias matemáticas y
                                    físicas
                                </p>
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
        </article>

    </section>

    <div class="aviso-cookies" id="aviso-cookies">
        <h3 class="titulo">
            Alerta de Cookies
        </h3>
        <p class="parrafo">
            Esta web utiliza cookies propias y de terceros para su correcto funcionamiento y para fines analíticos. Al hacer clic en "Aceptar", usted consiente el uso de estas tecnologías y el procesamiento de los datos. No obstante, puede visitar la "Configuración de Cookies" para ajustar parámetros.
        </p>
        <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
        <a class="enlace" href="nuestrascookies.php" target="_blank">Información de Nuestras Cookies</a>
    </div>
    <div id="fondo-aviso-cookies" class="fondo-aviso-cookies" ></div>


    <script src="js/eventos/cookies.js"></script>
    <?php include('includes/pie.php') ?>
</body>

</html>