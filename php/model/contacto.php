<?php

include_once '../config/conexion.php';

class Contacto extends Conexion
{
    private $tabla = "CONTACTO";

    private $id = "";
    private $telefono = "";
    private $mensaje = "";

    private $email = "";
    private $nombre = "";


    public function listarContacto($pagina = 1)
    {
        $inicio = 0;
        $cantidad = 100;

        if ($pagina > 1) {
            $inicio = $cantidad * ($pagina - 1) + 1;
            $cantidad = $cantidad * $pagina;
        }

        $query = "select ID, NOMBRES, EMAIL, TELEFONO, MENSAJE from $this->tabla limit $inicio,$cantidad";
        $datos = parent::getData($query);
        return $datos;
    }



    /* guardar*/
    public function InsertContacto($datos)
    {


        if (!isset($datos[0]) || !isset($datos[1]) || !isset($datos[2])) {
            return "error";
        } else {
            $this->nombre = $datos[0];
            $this->email = $datos[1];
            $this->telefono = $datos[2];
            $this->mensaje = $datos[3];

            $this->insertarContacto();
        }
    }



    private function insertarContacto()
    {
        $sql = "INSERT INTO $this->tabla(NOMBRES, EMAIL, TELEFONO, MENSAJE) VALUES (:nombres, :email, :telefono, :mensaje, :mensaje)";

        $datosInsert = array(':nombres' => $this->nombre, ':email' => $this->email, ':telefono' => $this->telefono, ':mensaje' => $this->mensaje);

        $resp = parent::noQueryId($sql, $datosInsert);

        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }

    /*Modificar*/

    public function ModificarContacto($datos)
    {


        if (!isset($datos[0]) || !isset($datos[1]) || !isset($datos[2])) {
            return "error";
        } else {
            $this->id = $datos[0];
            $this->usuario = $datos[1];
            $this->contrasenia = $datos[2];

            $this->updateContacto();
        }
    }


    private function updateContacto()
    {

        $sql = "UPDATE login SET NOMBRES = :nombres, EMAIL = :email ,TELEFONO = :telefono ,MENSAJE = :mensaje WHERE id = :id";

        $datosUpdate = array(':id' => $this->id,  ':nombres' => $this->nombre, ':email' => $this->email, ':telefono' => $this->telefono, ':mensaje' => $this->mensaje);

        $resp = parent::noQuery($sql, $datosUpdate);

        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }
}
