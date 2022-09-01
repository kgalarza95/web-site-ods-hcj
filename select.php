<?php

include ('php/config/conexion.php');
include ('php/model/usuarios.php');

$usuario = new Usuario();
$data = $usuario->listarUsuario();

foreach ($data as $valor) {
    echo    " " . $valor['id_usuario'];
    echo    " " . $valor['usuario'];
    echo    " " . $valor['contrasenia'] . "<br>";
}



//guardar

//$datos = array("9","prueba","1748");
//$usuario->InsertUsuario($datos);


//Actualizar

$datos = array("9", "actualizado", "2222");
$usuario->ModificarUsuario($datos);

 
