<?php

class Conexion
{

    private $servidor;
    private $usuario;
    private $contrasenia;
    private $conexion;


    function __construct()
    {
        $listadatos = $this->datosConexion();
        foreach ($listadatos as $key => $value) {
            $this->servidor = $value['server'];
            $this->usuario = $value['user'];
            $this->contrasenia = $value['password'];
        }

        try {
            $this->conexion = new PDO($this->servidor, $this->usuario, $this->contrasenia); //
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //

        } catch (Exception $e) {
            die('error en la conexion' . $e->getMessage());
        }
    }

    private function datosConexion()
    {
        $direccion = dirname(__FILE__);
        $jsondata = file_get_contents($direccion . "/" . "config");
        return json_decode($jsondata, true);
    }



    public function getData($sqlstr)
    {
        $this->conexion->exec("SET CHARACTER SET utf8");
        $resultado = $this->conexion->prepare($sqlstr);
        $resultado->execute();

        $resultArray = array();
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $resultArray[] = $row;
        }
        $resultado->closeCursor();


        return $resultArray;
    }

    public function getDataFirstParams($sqlstr, $Param1)
    {
        $this->conexion->exec("SET CHARACTER SET utf8");
        $resultado = $this->conexion->prepare($sqlstr);
        $resultado->execute(array($Param1));

        $resultArray = array();
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $resultArray[] = $row;
        }
        $resultado->closeCursor();


        return $resultArray;
    }

    public function getDataSecondParams($sqlstr, $Param1, $Param2)
    {
        $this->conexion->exec("SET CHARACTER SET utf8");
        $resultado = $this->conexion->prepare($sqlstr);
        $resultado->execute(array($Param1, $Param2));

        $resultArray = array();
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $resultArray[] = $row;
        }
        $resultado->closeCursor();


        return $resultArray;
    }

    public function getDataThirdParams($sqlstr, $Param1, $Param2, $Param3)
    {
        $this->conexion->exec("SET CHARACTER SET utf8");
        $resultado = $this->conexion->prepare($sqlstr);
        $resultado->execute(array($Param1, $Param2, $Param3));

        $resultArray = array();
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $resultArray[] = $row;
        }
        $resultado->closeCursor();


        return $resultArray;
    }


    public function getDataFourthParams($sqlstr, $Param1, $Param2, $Param3, $Param4)
    {
        $this->conexion->exec("SET CHARACTER SET utf8");
        $resultado = $this->conexion->prepare($sqlstr);
        $resultado->execute(array($Param1, $Param2, $Param3, $Param4));

        $resultArray = array();
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $resultArray[] = $row;
        }
        $resultado->closeCursor();


        return $resultArray;
    }

    public function getDataFifthParams($sqlstr, $Param1, $Param2, $Param3, $Param4, $Param5)
    {
        $this->conexion->exec("SET CHARACTER SET utf8");
        $resultado = $this->conexion->prepare($sqlstr);
        $resultado->execute(array($Param1, $Param2, $Param3, $Param4, $Param5));

        $resultArray = array();
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $resultArray[] = $row;
        }
        $resultado->closeCursor();


        return $resultArray;
    }


    public function noQuery($sqlstr, $datosInsersion)
    {
        $resultado = $this->conexion->prepare($sqlstr);
        $resultado->execute($datosInsersion);
        return  $resultado->rowCount();
    }




    //solo para insert
    public function noQueryId($sqlstr, $datosInsersion)
    {
        $resultado = $this->conexion->prepare($sqlstr);
        $resultado->execute($datosInsersion);
        $fila = $resultado->rowCount();

        if ($fila >= 1) {
            return 1;
        } else {
            return 0;
        }
    }


    //encriptar
    protected function encriptar($string)
    {
        return md5($string);
    }
}
