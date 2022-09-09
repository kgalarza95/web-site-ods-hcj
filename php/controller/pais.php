<?php

require_once "../model/pais.class.php";
require_once "../config/conexion.php";
require_once "../config/respuesta.class.php";

$_respuestas = new respuestas;
$_Pais = new Pais;

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET["page"])) {
        $pagina = $_GET["page"];
        $listarPais = $_Pais->listarPais($pagina);
        header("Content-Type: application/json");
        echo json_encode($listarPais);
        http_response_code(200);
    }
} else {
    header("Content-Type: application/json");
    $datosArray = $__respuesta->error_405;
    echo json_encode($datosArray);
}
