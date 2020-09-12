<?php

require '../Models/producto.models.php';

// instanciar a la clase
$registro = new Registro();

$producto = $_POST['pro_nom'];
$marca = $_POST['pro_mar'];
$costo = $_POST['pro_cos'];
$precio = $_POST['pro_pre'];
$cantidad = $_POST['pro_can'];
$imagen = $_POST['pro_img'];

echo $producto;
echo $marca;
echo $costo;
echo $precio;
echo $cantidad;
echo $imagen;

$registro->Registrar($producto, $marca, $costo, 
	$precio,$cantidad,$imagen);