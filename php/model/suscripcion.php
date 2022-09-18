<?php


//include_once 'config/pdo_conexion.php';
require_once "../php/config/conexion.php";

class Suscripcion extends conexion{

    private $tabla = "tbl_suscripcion";

    public $id = "";
    private $nombre = "";
    private $apellido = "";
    private $email = "";
    private $direccion = "";
    private $sexo = "";
    private $pais = "";
    private $energetico = "";
    private $tipo = "";


    public function insertarRegistro() {
        //insert into tbl_suscripcion(NOMBRES,APELLIDOS,  CORREO) values("kevin","galarza","vera");
        $query = "INSERT INTO $this->tabla(NOMBRES, APELLIDOS,  CORREO, DIRECCION)
                    VALUES (:nombre, :apellido, :email, :direccion)";

        $datosInsert = array(':nombre' => $this->nombre, ':email' => $this->email, 
        ':apellido' => $this->apellido,
        ':direccion' => $this->direccion);

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

    

    /**
     * Get the value of tabla
     */
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Set the value of tabla
     */
    public function setTabla($tabla): self
    {
        $this->tabla = $tabla;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */
    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     */
    public function setDireccion($direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     */
    public function setSexo($sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     */
    public function setPais($pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of energetico
     */
    public function getEnergetico()
    {
        return $this->energetico;
    }

    /**
     * Set the value of energetico
     */
    public function setEnergetico($energetico): self
    {
        $this->energetico = $energetico;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}
