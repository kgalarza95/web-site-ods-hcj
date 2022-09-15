<?php
include_once 'config/pdo_conexion.php';

$usuario = $_POST['username'];
$clave  = $_POST['password'];

$sql = "INSERT INTO TBL_USUARIO (NOMBRE_USUARIO, CONTRASENIA) VALUES (?,?)";

if (isset($_POST['username']) && isset($_POST['password'])) {
	
	try {
		$result = $pdo->prepare($sql)->execute([$usuario, $clave]);
		

		/*if(!$result){
			echo "registrado exiosamente";
		}else{
			echo "Error de registro";
		}*/
	} catch (Exception $e) {
		echo $e;
		throw $e;
	}
}
