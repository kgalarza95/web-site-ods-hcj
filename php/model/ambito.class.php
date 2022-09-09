<?php

require_once '../config/conexion.php';

class Ambito extends conexion
{

    public function listarAmbito($pagina = 1)
    {
        $inicio = 0;
        $cantidad = 10;

        if ($pagina > 1) {
            $inicio = $cantidad * ($pagina - 1) + 1;
            $cantidad = $cantidad * $pagina;
        }

        $query = "SELECT * FROM TBL_Ambito_VAR_Flow_ODS";
        //print_r($query);
        $datos = parent::getData($query);
        return $datos;
    }
}
