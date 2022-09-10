<?php

require_once '../config/conexion.php';

class Suscripcion extends conexion
{

    public function listarSuscripcion($pagina = 1)
    {
        $inicio = 0;
        $cantidad = 10;

        if ($pagina > 1) {
            $inicio = $cantidad * ($pagina - 1) + 1;
            $cantidad = $cantidad * $pagina;
        }

        $query = "select * from tbl_suscripcion";
        //print_r($query);
        $datos = parent::getData($query);
        return $datos;
    }
}
