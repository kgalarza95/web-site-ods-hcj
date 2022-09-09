<?php

require_once '../config/conexion.php';

class Ods extends conexion
{
   
    public function listarOds($pagina = 1)
    {
        $inicio = 0;
        $cantidad = 10;

        if ($pagina > 1) {
            $inicio = $cantidad * ($pagina - 1) + 1;
            $cantidad = $cantidad * $pagina;
        }
        
        $query = "SELECT A.ID, A.CODIGO, A.Ambito_VAR_Flow, A.ODS, O.NOMBRE AS NOMBRE_ODS
        FROM TBL_Ambito_VAR_Flow_ODS A
        JOIN TBL_ODS O ON O.ID = A.ODS";
        //print_r($query);
        $datos = parent::getData($query);
        return $datos;
    }

     
}
