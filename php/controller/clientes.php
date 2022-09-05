<?php

require_once "../model/clientes.class.php";
require_once "../config/conexion.php";
require_once "../config/respuesta.class.php";

$_respuestas = new respuestas;
$_clientes = new Clientes;

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET["page"])) {
        $pagina = $_GET["page"];
        $listarColor = $_clientes->listarCliente($pagina);
        header("Content-Type: application/json");
        echo json_encode($listarColor);
        http_response_code(200);
    } else if (isset($_GET["id"])) {
        $ColorID = $_GET["id"];
        $datosColor = $_clientes->obtenerCliente($ColorID);
        header("Content-Type: application/json");
        echo json_encode($datosColor);
        http_response_code(200);
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #recibir los datos enviados
    $postBody = file_get_contents("php://input");
    #enviamos los datos al manejador
    $datosArray = $_clientes->post($postBody);

    //devolvemos una respuestas
    header('Content-Type: application/json');
    if (isset($datosArray["result"]["error_id"])) {
        $responseCode = $datosArray["result"]["error_id"];
        http_response_code($responseCode);
    } else {
        http_response_code(200);
    }
    echo json_encode($datosArray);
}
