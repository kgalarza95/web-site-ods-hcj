<?php

require_once '../config/conexion.php';

class Pais extends conexion
{
   
    public function listarPais($pagina = 1)
    {
        $inicio = 0;
        $cantidad = 10;

        if ($pagina > 1) {
            $inicio = $cantidad * ($pagina - 1) + 1;
            $cantidad = $cantidad * $pagina;
        }
        
        $query = "SELECT * FROM TBL_PAIS;";
        //print_r($query);
        $datos = parent::getData($query);
        return $datos;
    }

     
}
