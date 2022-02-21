

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>


<body>

<div class="title text-center py-3">
    <h1>Actualizando proveedor - producto...</h1> 
</div>

    <div class="container mt-2">

     <div class="row justify-content-center">
      <div class="col-md-3" style="display: flex; align-items:center;">
        <form action="up_proveedor_producto.php?$row['Cod_pr']&$row['Id_pro']&$row['Costo']&$row['Fecha']&$row['Cantidad']" method="POST">
         <h5 class="text text-center">Codigo producto:</h5> 
         <input type="text" readonly class="form-control mb-3" name="Cod_pr" placeholder="Codigo ´producto" value="<?php echo $C_producto  ?>">
         <h5 class="text text-center">Id proveedor:</h5> 
         <input type="text" readonly class="form-control mb-3" name="Id_pro" placeholder="Id proveedor" value="<?php echo $Id_prov   ?>">
         <h5 class="text text-center">Costo total:</h5> 
         <input type="text" class="form-control mb-3" name="Costo" placeholder="Costo total" value="<?php  echo $row['Costo_total']  ?>">   
         <h5 class="text text-center">Fecha compra:</h5>           
         <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha" value="<?php  echo $row['Fecha_compra']  ?>"> 
         <h5 class="text text-center">Cantidad producto:</h5> 
         <input type="text" class="form-control mb-3" name="Cantidad" placeholder="Cantidad" value="<?php  echo $row['Cantidad_producto']  ?>">     
         <div class="text text-center">     
         <input type="submit" class="btn btn-success" value="Actualizar" >
         </div>
        </form>
       
      </div> 
     </div>
    </div>


</body>
</html>