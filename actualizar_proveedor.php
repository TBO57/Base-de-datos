<?php 

include("conexion.php");

$con=conectar();

$Id_proveedor = $_GET['Id'];

$sql="SELECT * FROM proveedor WHERE Id_proveedor='$Id_proveedor'";

$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <b><title>Actualizar Proveedor</title></b>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha284-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/actualizar.css">

</head>


<body>

<div class="title text-center py-3">
    <h1>Actualizando proveedor...</h1> 
</div>

    <div class="tarjeta">

     <div class="row justify-content-center">
      <div style="display: flex; align-items:center;">
        <form action="up_proveedor.php?$row['Id_proveedor']&$row['Nombre']&$row['Pagina_web']" method="POST">
         <p class="parr mt-2">Id Proveedor</p>
         <input type="text" readonly class="form-control mb-2" name="Id_Proveedor" placeholder="Id Proveedor" value="<?php echo $row['Id_proveedor']   ?>">
         <p class="parr mt-2">Nombre</p>
         <input type="text" class="form-control mb-2" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']   ?>">
         <p class="parr mt-2">Pagina Web</p> 
         <input type="text" class="form-control mb-2" name="Pagina_web" placeholder="Pagina Web" value="<?php echo $row ['Pagina_web']  ?>">      
         <div class="parr mt-2">     
         <input type="submit" class="btn btn-success mb-2 px-4" value="Actualizar" >
         </div>
        </form>
       
      </div> 
     </div>
    </div>


</body>
</html>