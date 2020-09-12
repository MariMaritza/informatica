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

   
    ///////////////registrar
    class Registro
    {
        function __construct()
        {
            $conn = new Conexion();
            $this->conn = $conn->Conectar();
            return $this->conn;
        }
        
        public function Registrar($producto,$marca,$costo,$precio,$cantidad)
        {
            $sql = "INSERT INTO productos(pro_nom,pro_mar,pro_cos,pro_pre,pro_can) VALUES ('$producto','$marca',$costo,$precio,$cantidad);";
            
            
            if(!$result = $this->conn->query($sql))
            {
                echo "Error Consulta. " . mysqli_error($this->conn);
            }
    
            return $result;
            mysqli_close($this->conn);
            
        }
    }



    class Modificar
{
    function __construct()
    {
        $conn = new Conexion();
        $this->conn = $conn->Conectar();
        return $this->conn;
    }
    
    public function Modificar($producto,$marca,$costo,$precio,$cantidad,$idproducto)
    {
        $sql = "UPDATE productos SET pro_nom = '$producto', pro_mar = '$marca', pro_cos = '$costo', pro_pre = '$precio', pro_can = '$cantidad' WHERE productos.pro_id = $idproducto;";
        
        
        if(!$result = $this->conn->query($sql))
        {
            echo "Error Modificar. " . mysqli_error($this->conn);
        }

        return $result;
        mysqli_close($this->conn);
        
    }
}
    


