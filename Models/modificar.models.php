<?php 
require 'Conexion.php'; 
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

$modificar = new Modificar();
$modificar->Modificar('Laptop','Toshibaaaaaa',1599.66,1800.5,2);