<?php
include "../php/sesion2.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <?php include('../includes/head2.php') ?>
</head>

<body>
    <?php include('../includes/cabecera2.php') ?>

    <section class="container mt-5">
        <main role="main" class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
                <img class="mr-3" src="../assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">Bootstrap</h6>
                    <small>Since 2011</small>
                </div>
            </div>

            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">¿Cuál es la cantidad en ktoe destinado para el tratamiento
                            residual en España por año en comparación con las energías
                            renovables y residuos del balance energético?</strong>
                        La cantidad de kyoe destinado para el tratamiento de aguas residuales en España es de 5684kte m2 en comparación con las energias renovables
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#e83e8c" /><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text>
                    </svg>

                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">Dentro de los objetivo de desarrollo sostenible, ¿Cuáles el área
                            más protegida en España por año y cuanto es la explotación de
                            combustibles fósiles?</strong>
                            Los datos de marzo de 2017, Canarias es la comunidad autónoma con mayor porcentaje de superficie protegida (más del 40,6%) seguida por La Rioja y Cataluña, con un 33,3% y 31,9% respectivamente.
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#6f42c1" /><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text>
                    </svg>

                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">¿Cuál es la relación de explotaciones de energías
                            renovables entre Ecuador y España en los años 90?</strong>
                            El proyecto eólico Villonaco II y III, que contaba con una potencia nominal 
                            de 110 megavatios, el mismo se desarrollaba en los emplazamientos de 
                            Membrillo-Ducal y Huayrapamba, localizado en la provincia de Loja. Esta obra tuvo una inversión privada
                             de USD 181 millones a cargo del consorcio español Cobra Zero – E Villonaco, cuya concesión alcanzaria los 25 años.
                    </p>
                </div>



                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">¿Cuál es la inversión en la protección ambiental por la
                            biodiversidad y los paisajees en España por año?</strong>
                        La inversión en la proteccion ambiental en España alcanza los 45675 de dolares por año
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#e83e8c" /><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text>
                    </svg>

                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">Dentro de la provisión del 2019 en lo referente a energías
                            renovables en el consumo de energía eléctrica ¿Cuál es el país
                            que realiza el mayor consumo?</strong>
                            China se posicionó como el principal consumidor de energía primaria del mundo en 2021 al registrar un consumo de aproximadamente 157,7 exajulios. Estados Unidos e India se situaron en segundo y tercer lugar, respectivamente.
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#6f42c1" /><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text>
                    </svg>

                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">¿Cuáles la inversión en España acerca de la protección del aire.
                            en comparación a las incineraciones sin recuperación de nergía en el año 2018?</strong>
                        La inversión de españa por la protección del aire en comparación a las incineraciones en el año 2018 es de 65826 de dolares
                    </p>
                </div>



                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark">Dentro de los objetivo de desarrollo sostenible, ¿Cuál es %.
                            de incineraciones con recuperación de energía dentro de España,
                            en lo referente a la variable mencionada dentro de los
                            tratamientos de residuos para el año 2000?</strong>
                            Dentro de los objetivo de desarrollo sostenible el porcentaje de incineraciones con recuperación
                            de energia en españa es de 569874 de dolares anuales refenrente al año 2000
                    </p>
                </div>

            </div>


        </main>
    </section>
    <?php include('../includes/pie2.php') ?>
    <script src="../js/lib/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script src="../js/eventos/estudiantes.js"></script>
</body>

</html>