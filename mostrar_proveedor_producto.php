
<?php

include("conexion.php");

$con = conectar();

$sql = "SELECT * FROM proveedor_producto";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <title> Usuarios </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
  

<body>
    
<div class="col-md-8">
  <table id="departamentos" style="width:100%" border="2">
  <thead class="bg-warning">
        <tr align="center" >
            
          <th>Codigo_producto</th>
          <th>Id_proveedor</th>
          <th>Costo_total</th>
          <th>Fecha_compra</th>
          <th>Cantidad_producto</th>
           
        </tr>
               </thead>

    <tbody>

        <?php

        while($row=mysqli_fetch_array($query)){

        ?>

        <tr>
          <th><?php  echo $row['Codigo_producto']?></th>
          <th><?php  echo $row['Id_proveedor']?></th>
          <th><?php  echo $row['Costo_total']?></th>
          <th><?php  echo $row['Fecha_compra']?></th>
          <th><?php  echo $row['Cantidad_producto']?></th>
                  
        </tr>

        <?php 
            }
        ?>

    </tbody>
  </table>
 </div>

</body>
</html>