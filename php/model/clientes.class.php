<?php

require_once '../config/conexion.php';

class Clientes extends conexion
{
    private $tabla = "tbl_clientes";

    private $id = "";
    private $nombre = "";
    private $email = "";
    private $telefono = "";


    public function listarCliente($pagina = 1)
    {
        $inicio = 0;
        $cantidad = 100;

        if ($pagina > 1) {
            $inicio = $cantidad * ($pagina - 1) + 1;
            $cantidad = $cantidad * $pagina;
        }

        $query = "select * from $this->tabla limit $inicio,$cantidad";
        //print_r($query);
        $datos = parent::getData($query);
        return $datos;
    }

    public function obtenerCliente($id)
    {
        $query = "select * from $this->tabla where ID  = $id";
        return $datos = parent::getData($query);
    }


    /*********************************************** */


    public function post($json)
    {
        $_respuestas = new respuestas;
        $datos = json_decode($json, true);
        if (!isset($datos["nombre"]) || !isset($datos["email"])) {
            return $_respuestas->error_400();
        } else {
            $this->nombre = $datos['nombre'];
            $this->email = $datos['email'];
            $this->telefono = $datos['telefono'];

            $resp = $this->insertarContacto();

            if ($resp) {
                $respuesta = $_respuestas->response;
                $respuesta["result"] = array(
                    "id " => $resp
                );

                return $respuesta;
            } else {
                return $_respuestas->error_500;
            }
        }
    }


    private function insertarContacto()
    {
        $query = "INSERT INTO $this->tabla(NOMBRE, EMAIL, TELEFONO) VALUES (:nombre, :email, :telefono)";



        $datosInsert = array(':nombre' => $this->nombre, ':email' => $this->email, ':telefono' => $this->telefono);

        $resp = parent::noQueryId($query, $datosInsert);

        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }
}
