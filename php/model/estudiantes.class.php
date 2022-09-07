<?php

require_once '../config/conexion.php';

class Estudiantes extends conexion
{
    private $tabla = "TBL_ESTUDIANTES";

    private $id = "";
    private $codigo = "";
    private $cedula = "";
    private $nombre = "";
    private $apellidos = "";


    public function listarAlumno($pagina = 1)
    {
        $inicio = 0;
        $cantidad = 10;

        if ($pagina > 1) {
            $inicio = $cantidad * ($pagina - 1) + 1;
            $cantidad = $cantidad * $pagina;
        }

        $query = "select * from $this->tabla limit $inicio,$cantidad";
        //print_r($query);
        $datos = parent::getData($query);
        return $datos;
    }

    public function obtenerAlumno($id)
    {
        $query = "select * from $this->tabla where ID  = $id";
        return $datos = parent::getData($query);
    }


    /*********************************************** */


    public function post($json)
    {
        $_respuestas = new respuestas;
        $datos = json_decode($json, true);
        if (!isset($datos["nombres"]) || !isset($datos["codigo"])) {
            return $_respuestas->error_400();
        } else {
            $this->codigo = $datos['codigo'];
            $this->cedula = $datos['dni'];
            $this->nombre = $datos['nombres'];
            $this->apellidos = $datos['apellidos'];

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
        $query = "INSERT INTO $this->tabla(CODIGO, CEDULA, NOMBRES, APELLIDOS) VALUES (:codigo, :cedula, :nombre, :apellidos)";

        $datosInsert = array(':codigo' => $this->codigo, ':cedula' => $this->cedula, ':nombre' => $this->nombre, ':apellidos' => $this->apellidos);

        $resp = parent::noQueryId($query, $datosInsert);

        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }

    /********************************************** */


    public function put($json)
    {
        $_respuestas = new respuestas;
        $datos = json_decode($json, true);
        if (!isset($datos["idTabla"]) || !isset($datos["nombres"]) || !isset($datos["codigo"])) {
            return $_respuestas->error_400();
        } else {
            $this->id = $datos['idTabla'];
            $this->codigo = $datos['codigo'];
            $this->cedula = $datos['dni'];
            $this->nombre = $datos['nombres'];
            $this->apellidos = $datos['apellidos'];

            $resp = $this->actalizarEstudiantes();

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


    private function actalizarEstudiantes()
    {
        $query = "UPDATE tbl_estudiantes SET CODIGO=:codigo, CEDULA=:cedula, NOMBRES=:nombre, APELLIDOS=:apellidos WHERE ID=:id";

        $datosInsert = array(':id' => $this->id, ':codigo' => $this->codigo, ':cedula' => $this->cedula, ':nombre' => $this->nombre, ':apellidos' => $this->apellidos);

        $resp = parent::noQueryId($query, $datosInsert);

        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }




    /* DELETE */


    public function delete($json)
    {
        $_respuestas = new respuestas;
        $datos = json_decode($json, true);

        if (!isset($datos["idTabla"])) {
            return $_respuestas->error_400();
        } else {

            $this->id = $datos['idTabla'];

            $resp = $this->eliminarAlumnos();

            if ($resp) {
                $respuesta = $_respuestas->response;
                $respuesta["result"] = array(
                    "id" => $this->id
                );

                return $respuesta;
            } else {
                return $_respuestas->error_500;
            }
        }
    }




    private function eliminarAlumnos()
    {

        $query = "DELETE FROM tbl_estudiantes WHERE id = :id";

        $datosInsert = array(':id' => $this->id,);

        $resp = parent::noQueryId($query, $datosInsert);

        if ($resp >= 1) {
            return $resp;
        } else {
            return 0;
        }
    }
}
