<?php

require_once '../config/conexion.php';

class Contacto extends conexion
{
    private $tabla = "contacto";

    private $id = "";
    private $nombre = "";
    private $email = "";
    private $telefono = "";
    private $mensaje = "";

   
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
            $this->mensaje = $datos['mensaje'];

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
        $query = "INSERT INTO $this->tabla(NOMBRES, EMAIL, TELEFONO, MENSAJE) VALUES (:nombre, :email, :telefono, :mensaje)";


        
        $datosInsert = array(':nombre'=> $this->nombre, ':email'=> $this->email, ':telefono'=> $this->telefono, ':mensaje'=> $this->mensaje);

        $resp = parent::noQueryId($query, $datosInsert);

        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }

}
