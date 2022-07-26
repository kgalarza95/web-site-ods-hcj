<!-- cabecera-- -->
<header class="barra-cab bg-white">
    <div class="barra-superior">
        <div class="container py-2">
            <div class="row align-items-center">
                <div class="col-6">
                    <a href="https://twitter.com/home?lang=es" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                    <a href="https://www.facebook.com/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                    <a href="https://www.linkedin.com/login/es" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                    <a href="https://www.instagram.com/" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                </div>
                <div class="col-6">
                    <div class="d-flex ml-auto">
                        <a href="#" class="d-flex align-items-center ml-auto mr-4">
                            <span class="icon-envelope mr-2"></span>
                            <span class="d-none d-md-inline-block">correo.ug.cambiar@ug.edu.ec</span>
                        </a>
                        <a href="tel://0985396241" class="d-flex align-items-center">
                            <span class="icon-phone mr-2"></span>
                            <span class="d-none d-md-inline-block">0985396241</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="barra-cab bg-white">
    <div class="container">
        <div class="barra-menu bg-light">
            <div class="py-1">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h2 class="mb-0 logo-texto">
                            <!-- <a href="#"><strong> ODS</strong> </a> -->
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    ☰
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                                    <a class="dropdown-item" href="paginas/pagina1.php">Estudiantes</a>
                                    <a class="dropdown-item" href="paginas/pagina2.php">Esquema bd</a>
                                    <a class="dropdown-item" href="paginas/pagina3.php">Petroleo</a>
                                    <a class="dropdown-item" href="Contacto.php">Contacto</a>
                                    <a class="dropdown-item" href="paginas/espania.php">consultas</a>
                                    <a class="dropdown-item" href="paginas/preguntas.php">Preguntas</a>
                                    <a class="dropdown-item" href="paginas/ambitos.php">Ambitos</a>
                                    <a class="dropdown-item" href="paginas/8suscripcion.php">Suscripción</a>
                                    <a class="dropdown-item" href="Servicios.php">Servicios</a>
                                    <a class="dropdown-item" href="informacion.php">Información</a>
                                    <a class="dropdown-item" href="paginas/ods.php">Las ODS</a>
                                    <a class="dropdown-item" href="paginas/pais.php">Paises</a>
                                </div>
                            </div>
                        </h2>

                    </div>



                    <div class="col-10">
                        <nav class="nav-menu-opciones text-right">
                            <div class="container">
                                <ul class="lista-opciones">
                                    <li class="active">
                                        <a href="index.php">Inicio</a>
                                    </li>


                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li> -->

                                    <li><a href="Servicios.php">Servicios</a></li>
                                    <li><a href="Noticias.php">Noticias</a></li>
                                    <li><a href="Nosotros.php">Nosotros</a></li>
                                    <li><a href="Contacto.php">Contacto</a></li>
                                    <li><a href="Registrar.php">Registrarse</a></li>
                                    <li>
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                                            <?php echo $_COOKIE["usuario"]; ?>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="login.php">Cerrar Sesión</a>
                                        </div>
                                    </li>
                                    <!--  -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--fin de  cabecera-- -->

<!-- cabecera-- -->
<!-- <div class="barra-cab bg-white">
            <div class="barra-superior">
                <div class="container py-2">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <a href="https://twitter.com/home?lang=es" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.linkedin.com/login/es" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                            <a href="https://www.instagram.com/" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                        </div>
                        <div class="col-6">
                            <div class="d-flex ml-auto">
                                <a href="#" class="d-flex align-items-center ml-auto mr-4">
                                    <span class="icon-envelope mr-2"></span>
                                    <span class="d-none d-md-inline-block">correo.ug.cambiar@ug.edu.ec</span>
                                </a>
                                <a href="tel://0985396241" class="d-flex align-items-center">
                                    <span class="icon-phone mr-2"></span>
                                    <span class="d-none d-md-inline-block">0985396241</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="barra-cab bg-white">
            <div class="container">
                <div class="barra-menu bg-light">
                    <div class="py-1">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <h2 class="mb-0 logo-texto">
                                    <a href="#"><strong> ODS</strong> </a>
                                </h2>
                            </div>

                            <div class="col-10">
                                <nav class="nav-menu-opciones text-right">
                                    <div class="container">
                                        <ul class="lista-opciones">
                                            <li class="active">
                                                <a href="index.php">Inicio</a>
                                            </li>



                                            <li><a href="Servicios.php">Servicios</a></li>
                                            <li><a href="Noticias.php">Noticias</a></li>
                                            <li><a href="Nosotros.php">Nosotros</a></li>
                                            <li><a href="Contacto.php">Contacto</a></li>
                                            <li><a href="Registrar.php">Registrarse</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        fin de  cabecera-- -->