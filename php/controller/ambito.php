<?php

require_once "../model/ambito.class.php";
require_once "../config/conexion.php";
require_once "../config/respuesta.class.php";

$_respuestas = new respuestas;
$_Ambito = new Ambito;

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET["page"])) {
        $pagina = $_GET["page"];
        $listarAmbito = $_Ambito->listarAmbito($pagina);
        header("Content-Type: application/json");
        echo json_encode($listarAmbito);
        http_response_code(200);
    }
} else {
    header("Content-Type: application/json");
    $datosArray = $__respuesta->error_405;
    echo json_encode($datosArray);
}
