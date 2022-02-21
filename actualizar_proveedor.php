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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>


<body>

<div class="title text-center py-3">
    <h1>Actualizando proveedor...</h1> 
</div>

    <div class="container mt-2">

     <div class="row justify-content-center">
      <div class="col-md-3" style="display: flex; align-items:center;">
        <form action="up_proveedor.php?$row['Id_proveedor']&$row['Nombre']&$row['Pagina_web']" method="POST">
         <h5 class="text text-center">Id Usuario:</h5> 
         <input type="text" readonly class="form-control mb-3" name="Id_Proveedor" placeholder="Id Proveedor" value="<?php echo $row['Id_proveedor']   ?>">
         <h5 class="text text-center">Telefono:</h5> 
         <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']   ?>">
         <h5 class="text text-center">Nombre</h5> 
         <input type="text" class="form-control mb-3" name="Pagina_web" placeholder="Pagina Web" value="<?php echo $row ['Pagina_web']  ?>">      
         <div class="text text-center">     
         <input type="submit" class="btn btn-success" value="Actualizar" >
         </div>
        </form>
       
      </div> 
     </div>
    </div>


</body>
</html>