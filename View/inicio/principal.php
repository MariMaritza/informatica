<?php require_once '../../Models/producto.php';?>
<div class="row">
<div class="col-md-6">
<div class="card">
    <h3 class="card-title"> Cantidad Productos </h3>
         <p> 

         <?php 
         $producto = new Producto();
         $data = $producto->Cantidad();
         echo "Cantidad: ". $data['Cantidad'];
         $lista = $producto->Listar();
         while($row = $lista->fetch_array()){
             echo $row[0]."<br>";
             echo $row[1]."<br>";
             echo $row[2]."<br>";
             echo $row[3]."<br>";
             echo $row[4]."<br>";
             echo $row[5]."<br>";
             echo $row[6]."<br>";
            
         }
         ?>
         

        </p>
</div>
</div>
</div>
