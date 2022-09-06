<?php


//include_once 'config/pdo_conexion.php';
require_once "../php/config/conexion.php";

class Suscripcion extends conexion{

    private $tabla = "tbl_suscripcion";

    public $id = "";
    private $nombre = "";
    private $apellido = "";
    private $email = "";
    private $telefono = "";

    
    public function insertarRegistro() {
        //insert into tbl_suscripcion(NOMBRES,APELLIDOS,  CORREO) values("kevin","galarza","vera");
        $query = "INSERT INTO $this->tabla(NOMBRES, APELLIDOS,  CORREO)
                    VALUES (:nombre, :apellido, :email)";

        $datosInsert = array(':nombre' => $this->nombre, ':email' => $this->email, ':apellido' => $this->apellido);

        $resp = parent::noQueryId($query, $datosInsert);

        if ($resp) {
            return $resp;
        } else {
            return 0;
        }
    }

    public function obtenerRegistros(){
        $query = "select * from $this->tabla ";
        return $datos = parent::getData($query);
    }

    public function listarCliente($pagina = 1){
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

    public function obtenerCliente($id){
        $query = "select * from $this->tabla where ID  = $id";
        return $datos = parent::getData($query);
    }



    public function getTabla()
    {
        return $this->tabla;
    }

    
    public function setTabla($tabla): self
    {
        $this->tabla = $tabla;

        return $this;
    }

    
    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    
    public function getNombre()
    {
        return $this->nombre;
    }

    
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    
    public function getApellido()
    {
        return $this->apellido;
    }

   
    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    
    public function getTelefono()
    {
        return $this->telefono;
    }

    
    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }
}
