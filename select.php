<?php

include 'conexion.php';

$conexion = new conexion();

$variable = "SELECT * FROM login";
$data = $conexion->getDataGeneral($variable,1);

/* $variable = "SELECT * FROM login where id_usuario = ?";
$data = $conexion->getDataFirstParams($variable,1); */



foreach ($data as $valor) {
    echo    " " . $valor['id_usuario'];
    echo    " " . $valor['usuario'];
    echo    " " . $valor['contrasenia'];
}
 
