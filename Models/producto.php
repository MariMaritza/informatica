<?php

require 'Conexion.php';

class Producto
{
    private $conn;

    private $pro_id;
    private $pro_nom;
    private $pro_mar;
    private $pro_cos;
    private $pro_pre;
    private $pro_can;
    private $pro_img;

    function __construct()
    {
        $conn = new Conexion();
        $this->conn = $conn->Conectar();
        return $this->conn;
    }
    
    public function getpro_id() : ?int {
        return $this->pro_id;
    }
    public function setpro_id(int $id){
        $this->pro_id=$id;
    }
    public function getpro_nom() : ?string {
        return $this->pro_nom;
    }
    public function setpro_nom(string $nom) {
        $this->pro_nom=$nom;
    }
    public function getpro_mar() : ?string {
        return $this->pro_mar;
    }
    public function setpro_mar(string $mar) {
        $this->pro_mar=$mar;
    }
    public function getpro_cos() : ?float {
        return $this->pro_cos;
    }
    public function setpro_cos(float $cos) {
        $this->pro_cos=$id;
    }
    public function getpro_pre() : ?float{
        return $this->pro_pre;
    }
    public function setpro_pre(float $pre) {
        $this->pro_pre=$pre;
    }
    public function getpro_can() : ?int {
        return $this->pro_can;
    }
    public function setpro_can(int $can) {
        $this->pro_can=$can;
    }
    public function getpro_img() : ?string {
        return $this->pro_img;
    }
    public function setpro_img(string $img) {
        $this->pro_img=$img;
    }

    public function Cantidad() 
    {
        $sql = "SELECT SUM(pro_can) as Cantidad from productos;";
        
        if(!$result = $this->conn->query($sql))
        {
            echo "Error Consulta. " . mysqli_error($this->conn);
        }

        $dato = $result->fetch_array(MYSQLI_ASSOC);
        return $dato;
        mysqli_close($this->conn);
        
    }

    public function Listar()
    {
        $sql = "SELECT * FROM productos";
         
        if(!$result = $this->conn->query($sql))
        {
            echo "Error Consulta. " . mysqli_error($this->conn);
        }

        return $result;
        mysqli_close($this->conn);
    }

   





}

