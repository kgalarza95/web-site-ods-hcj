<?php
	session_start();
	if(!isset($_SESSION['Nombre'])){
		header("Location: ../login.php");
	}