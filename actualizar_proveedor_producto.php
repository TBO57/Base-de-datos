

<?php 

include("conexion.php");

$con=conectar();

$C_producto = $_GET['Cod_pr'];
$Id_prov = $_GET['Id_pro'];

$sql="SELECT * FROM proveedor_producto WHERE Codigo_producto='$C_producto' AND Id_proveedor='$Id_prov'";

$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <b><title>Actualizar proveedor - producto</title></b>
    <link href="https://cdn.jsdelivr.net/npm/bootstrapp.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha284-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/actualizar.css">

</head>


<body>

<div class="title text-center py-3">
    <h1>Actualizando proveedor - producto...</h1> 
</div>

    <div class="tarjeta">

     <div class="row justify-content-center">
      <div style="display: flex; align-items:center;">
        <form action="up_proveedor_producto.php?$row['Cod_pr']&$row['Id_pro']&$row['Costo']&$row['Fecha']&$row['Cantidad']" method="POST">
         <p class="parr mt-2">Codigo producto:</p> 
         <input type="text" readonly class="form-control mb-2" name="Cod_pr" placeholder="Codigo ´producto" value="<?php echo $C_producto  ?>">
         <p class="parr mt-2">Id proveedor:</p> 
         <input type="text" readonly class="form-control mb-2" name="Id_pro" placeholder="Id proveedor" value="<?php echo $Id_prov   ?>">
         <p class="parr mt-2">Costo total:</p> 
         <input type="text" class="form-control mb-2" name="Costo" placeholder="Costo total" value="<?php  echo $row['Costo_total']  ?>">   
         <p class="parr mt-2">Fecha compra:</p>           
         <input type="text" class="form-control mb-2" name="Fecha" placeholder="Fecha" value="<?php  echo $row['Fecha_compra']  ?>"> 
         <p class="parr mt-2">Cantidad producto:</p> 
         <input type="text" class="form-control mb-2" name="Cantidad" placeholder="Cantidad" value="<?php  echo $row['Cantidad_producto']  ?>">     
         <div class="parr mt-2">     
         <input type="submit" class="btn btn-success mb-2 px-4" value="Actualizar">
         </div>
        </form>
       
      </div> 
     </div>
    </div>


</body>
</html>