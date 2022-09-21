<?php


if (isset($_REQUEST["vl"])) {

    $vl = $_REQUEST["vl"];
    $_SESSION["usuario"] = 'admin';

    setcookie("Lenguaje", "ES");

    $nombre = "sesion";
    $valor = "iniciada";
    $expira = time() + (60 * 60 * 24 * 365);
    $dir = "/";
    $dominio = "localhost";
    $https = false;
    $http = false;

    setcookie($nombre, $valor, $expira, $dir, $dominio, $https, $http);

    echo $_COOKIE['Lenguaje'];

    if (isset($_COOKIE[$nombre])) {
        $cont = $_COOKIE[$nombre];
        setcookie($nombre, 2 + 1, time() + 3600);
    } else {
        setcookie($nombre, 1, time() + 3600);
    }
    header("Location: ../vista/index.php");
}
