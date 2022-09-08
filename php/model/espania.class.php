<?php

require_once '../config/conexion.php';

class Espania extends conexion
{
   
    public function listarEspania($pagina = 1)
    {
        $inicio = 0;
        $cantidad = 10;

        if ($pagina > 1) {
            $inicio = $cantidad * ($pagina - 1) + 1;
            $cantidad = $cantidad * $pagina;
        }

       /*  $query = "SELECT I.ID, P.NOMBRE, I.VENTA, I.MES, I.ANIO
        FROM TBL_PETROLEO_INF I
        JOIN TBL_PAIS P ON P.ID = I.ID_PAIS limit $inicio,$cantidad"; */
        
        $query = "select * from datos_espania ";
        //print_r($query);
        $datos = parent::getData($query);
        return $datos;
    }

     
}
