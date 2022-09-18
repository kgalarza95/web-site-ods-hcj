<?php
    include_once 'config/pdo_conexion.php';

	$usuario=$_POST['username'];
	$clave=$_POST['password'];

    //SELECT * FROM TBL_USUARIO where NOMBRE_USUARIO = 'KGALARZA' and CONTRASENIA = '1234';
	$consulta=$pdo->prepare("SELECT * FROM TBL_USUARIO WHERE NOMBRE_USUARIO=:usuario AND CONTRASENIA=:clave");
    //$consulta=$pdo->prepare("SELECT * FROM TBL_USUARIO");
	$consulta->bindParam(':usuario',$usuario);
	$consulta->bindParam(':clave',$clave);
	$consulta->execute();

	if($consulta->rowCount()>=1){
        echo "Sesión iniciada";
		session_start();
		$fila=$consulta->fetch();
		$_SESSION['Nombre']=$fila['NOMBRE_USUARIO'];
		//creacion de la cookie
		setcookie("usuario",$usuario, time() - 84600);
		setcookie("usuario",$usuario, time() + 84600);
		
		header("Location: index.php");
	}else{
		echo "ERROR los datos no son correctos";
	}