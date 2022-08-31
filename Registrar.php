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
</head>

<body>

    <div class="contenido">
        <!-- cabecera-- -->
        <div class="barra-cab bg-white">
            <div class="barra-superior">


                <div class="container py-2">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <a href="https://twitter.com/home?lang=es" class="p-2 pl-0"><span
                                    class="icon-twitter"></span></a>
                            <a href="https://www.facebook.com/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://www.linkedin.com/login/es" class="p-2 pl-0"><span
                                    class="icon-linkedin"></span></a>
                            <a href="https://www.instagram.com/" class="p-2 pl-0"><span
                                    class="icon-instagram"></span></a>
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

                                        <ul class="lista-opciones ">

                                            <li class="active">
                                                <a href="index.html">Inicio</a>
                                            </li>

                                           

                                            <li><a href="Servicios.html">Servicios</a></li>
                                            <li><a href="Noticias.html">Noticias</a></li>
                                            <li><a href="Nosotros.html">Nosotros</a></li>
                                            <li><a href="Contacto.html">Contacto</a></li>
                                            <li><a href="Registrar.html">Registrarse</a></li>
                                        </ul>


                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--fin de  cabecera-- -->

        <div class="estio-seccion bg-light">
            <div class="container">
                <div class="row">
                    <legend>Formulario de Registro</legend>
                    <div class="col-md-12 col-lg-8 mb-5">
                        <form action="#" class="p-5 bg-white" id='registrar'>
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="nombre">Nombre</label>
                                    <input type="text" id="nombre" class="form-control" placeholder="Nombre"
                                        onkeypress="return soloLetras(event)">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="email">Email</label>
                                    <input type="text" id="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="telefono">Telefono</label>
                                    <input type="text" id="telefono" class="form-control" placeholder="Telefono"
                                        onkeypress='return soloNumeros(event)'>
                                </div>
                            </div>

                            <div c lass="row form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pill px-4 py-2"
                                        onclick="ingresarCliente('registrar')">Registrar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4">
                        <div class="p-4 mb-3 bg-white">
                            <h3 class="h5 letra-negra mb-3">Listas de Colaboradores</h3>
                            <div id="colaboradores"></div>
                            <div id="nuevoColaborador"></div>

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
                                Como agencia líder de las Naciones Unidas en desarrollo internacional, el PNUD trabaja
                                en 170 países y territorios para erradicar la pobreza y reducir la desigualdad. Ayudamos
                                a los países a desarrollar políticas, habilidades de liderazgo, habilidades de
                                asociación, capacidades institucionales y a desarrollar resiliencia para lograr los
                                Objetivos de Desarrollo Sostenible. Nuestro trabajo se concentra en tres áreas de
                                enfoque; desarrollo sostenible, gobernanza democrática y consolidación de la paz, y
                                resiliencia climática y ante desastres.
                            </p>
                            <p>
                                <a href="Nosotros.html" class="btn btn-primary pill text-white px-4">Leer Mas</a>
                            </p>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                            <h3 class="encabezado-de-pie mb-4 text-primary">Menu</h3>
                            <ul class="list-unstyled">
                                <li><a href="Servicios.html">Servicios</a></li>
                                <li><a href="Noticias.html">Noticias</a></li>
                                <li><a href="Contacto.html">Contacto</a></li>
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
                                <a href="https://twitter.com/home?lang=es" class="p-2 pl-0"><span
                                        class="icon-twitter"></span></a>
                                <a href="https://www.facebook.com/" class="p-2 pl-0"><span
                                        class="icon-facebook"></span></a>
                                <a href="https://www.linkedin.com/login/es" class="p-2 pl-0"><span
                                        class="icon-linkedin"></span></a>
                                <a href="https://www.instagram.com/" class="p-2 pl-0"><span
                                        class="icon-instagram"></span></a>
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