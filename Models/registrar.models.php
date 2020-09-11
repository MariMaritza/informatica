
<?php 
require 'Conexion.php'; 
class Registrar
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

$registrar = new Registrar();
$registrar->Registrar('Laptop','Toshiba',1599.66,1800.5,2);