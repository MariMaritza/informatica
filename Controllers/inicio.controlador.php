<?php
require_once "Models/producto.php";
class InicioControlador{

    private $modelo;

    public function __construct()
    {
        $this-> modelo =new Producto();
    }
       
    
   
    public function Inicio(){
    require_once "View/index1.php";
    require_once "View/inicio/principal.php";
 
}
}