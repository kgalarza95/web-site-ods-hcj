<?php

include_once '../config/conexion.php';

class Usuario extends Conexion
{
    private $tabla = "login";

    private $id = "";
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

        $query = "select * from $this->tabla limit $inicio,$cantidad";
        $datos = parent::getData($query);
        return $datos;
    }



    /* guardar*/
    public function InsertUsuario($datos)
    {


        if (!isset($datos[0]) || !isset($datos[1]) || !isset($datos[2])) {
            return "error";
        } else {
            $this->id = $datos[0];
            $this->usuario = $datos[1];
            $this->contrasenia = $datos[2];

            $this->insertarUsuario();
        }
    }



    private function insertarUsuario()
    {
        $sql = "INSERT INTO $this->tabla(id_usuario, usuario, contrasenia) VALUES (:id, :usuario, :contrasenia)";

        $datosInsert = array(':id' => $this->id, ':usuario' => $this->usuario, ':contrasenia' => $this->contrasenia);

        $resp = parent::noQueryId($sql, $datosInsert);

        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }

    /*Modificar*/

    public function ModificarUsuario($datos)
    {


        if (!isset($datos[0]) || !isset($datos[1]) || !isset($datos[2])) {
            return "error";
        } else {
            $this->id = $datos[0];
            $this->usuario = $datos[1];
            $this->contrasenia = $datos[2];

            $this->updateUsuario();
        }
    }


    private function updateUsuario()
    {

        $sql = "UPDATE login SET usuario = :usuario,contrasenia = :contrasenia WHERE id_usuario = :id";

        $datosUpdate = array(':id' => $this->id, ':usuario' => $this->usuario, ':contrasenia' => $this->contrasenia);

        $resp = parent::noQuery($sql, $datosUpdate);

        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }
}
