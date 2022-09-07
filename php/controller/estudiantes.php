<?php

require_once "../model/estudiantes.class.php";
require_once "../config/conexion.php";
require_once "../config/respuesta.class.php";

$_respuestas = new respuestas;
$_estudiantes = new Estudiantes;

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    if (isset($_GET["page"])) {
        $pagina = $_GET["page"];
        $listarEstudiante = $_estudiantes->listarAlumno($pagina);
        header("Content-Type: application/json");
        echo json_encode($listarEstudiante);
        http_response_code(200);
    } else if (isset($_GET["id"])) {
        $EstudiantesID = $_GET["id"];
        $datosEstudianete = $_estudiantes->obtenerAlumno($EstudiantesID);
        header("Content-Type: application/json");
        echo json_encode($datosEstudianete);
        http_response_code(200);
    }
} 

else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #recibir los datos enviados
    $postBody = file_get_contents("php://input");
    #enviamos los datos al manejador
    $datosArray = $_estudiantes->post($postBody);

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

else if ($_SERVER['REQUEST_METHOD'] == "PUT") {
    //recibimos los datos enviados
    $postBody = file_get_contents("php://input");
    //enviamos datos al manejador
    $datosArray = $_estudiantes->put($postBody);
    //delvovemos una respuesta 

    header('Content-Type: application/json');
    if (isset($datosArray["result"]["error_id"])) {
        $responseCode = $datosArray["result"]["error_id"];
        http_response_code($responseCode);
    } else {
        http_response_code(200);
    }
    echo json_encode($datosArray);
} 

else if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    //recibimos los datos enviados
    $postBody = file_get_contents("php://input");
    //enviamos datos al manejador
    $datosArray = $_estudiantes->delete($postBody);
    //delvovemos una respuesta 

    header('Content-Type: application/json');
    if (isset($datosArray["result"]["error_id"])) {
        $responseCode = $datosArray["result"]["error_id"];
        http_response_code($responseCode);
    } else {
        http_response_code(200);
    }
    echo json_encode($datosArray);
}

else {
    header("Content-Type: application/json");
    $datosArray = $__respuesta->error_405;
    echo json_encode($datosArray);
}
