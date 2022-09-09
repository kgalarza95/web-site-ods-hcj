<?php

require_once "../model/contacto.class.php";
require_once "../config/conexion.php";
require_once "../config/respuesta.class.php";

$_respuestas = new respuestas;
$_contacto = new Contacto;



if ($_SERVER["REQUEST_METHOD"] == "GET") {

  if (isset($_GET["page"])) {
      $pagina = $_GET["page"];
      $listarContacto = $_contacto->listarContacto($pagina);
      header("Content-Type: application/json");
      echo json_encode($listarContacto);
      http_response_code(200);
  }
}
else if ($_SERVER["REQUEST_METHOD"] == "POST") {
  #recibir los datos enviados
  $postBody = file_get_contents("php://input");
  #enviamos los datos al manejador
  $datosArray = $_contacto->post($postBody);

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
