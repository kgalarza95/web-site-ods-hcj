<?php


require_once "../php/model/suscripcion.php";
 //require_once __DIR__ . "\\suscripcion_controller.php";
 /*
 require_once "../model/clientes.class.php";
 require_once "../config/conexion.php";
 require_once "../config/respuesta.class.php";
*/
require_once '../php/config/pdo_conexion.php';

$respuesta = "";
$_suscripcion = new Suscripcion;

$_suscripcion->setNombre($_POST["txt_nombres"]);
$_suscripcion->setApellido($_POST["txt_apellidos"]);

  #enviamos los datos al manejador
  $respuesta = $_suscripcion->insertarRegistro();


  ##obtene todos los registros
  $respuesta = $_suscripcion->obtenerRegistros();

 foreach ($respuesta as $row){ 
    // aca puedes hacer la consulta e iterarla con each. 
    echo $row['NOMBRES']; // aca te faltaba poner los echo para que se muestre el valor de la variable.  
        echo $row['APELLIDOS'] ;
        echo $row['CORREO'];
 
 
      }

//echo $respuesta;
var_dump($respuesta);