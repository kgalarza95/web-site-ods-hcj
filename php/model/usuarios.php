<?php

require_once "config/conexion.php";

class usuario extends Conexion{
    private $tabla = "login";

    private $id_usuario = "";
    private $usuario = "";
    private $contrasenia = "";

    public function listarUsuario($pagina = 1)
    {
        $inicio = 0;
        $cantidad = 100;

        if ($pagina > 1) {
            $inicio = $cantidad * ($pagina - 1) + 1;
            $cantidad = $cantidad * $pagina;
        }

        $query = "SELECT * FROM login $this->tabla limit $inicio,$cantidad";

        $datos = parent::getDataGeneral($query);
        return $datos;
    }
}
