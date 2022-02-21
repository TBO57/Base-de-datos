
<?php 

include("conexion.php");

$con=conectar();

$Id_pedido = $_GET['Id_p'];
// $Id_user = $_GET['Id_2'];

$sql="SELECT * FROM pedido WHERE Id='$Id_pedido'";

$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <b><title>Actualizar pedido</title></b>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha284-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/actualizar.css">

</head>


<body>

<div class="title text-center py-3">
    <h1>Actualizando pedido...</h1> 
</div>

    <div class="tarjeta">

     <div class="row justify-content-center">
      <div style="display: flex; align-items:center;">
        <form action="up_pedido.php?$row['Id_usuario']&$row['Id']&$row['Fecha']&$row['Monto']&$row['Calle']&row['Carrera']&$row['Dpto']&row['Mun']" method="POST">
         <p class="parr mt-2">Id Usuario:</p> 
         <input type="text" readonly class="form-control mb-2" style="width: 200px" name="Id_usuario" placeholder="Id usuario" value="<?php echo $row['Id_usuario'] ?>">
         <p class="parr">Id pedido:</p> 
         <input type="text" readonly class="form-control mb-2" name="Id" placeholder="Id pedido" value="<?php echo $row['Id']    ?>">
         <p class="parr">Fecha:</p> 
         <input type="text" class="form-control mb-2" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']   ?>">
         <p class="parr">Monto total:</p> 
         <input type="text" class="form-control mb-2" name="Monto" placeholder="Monto total" value="<?php echo $row ['Monto_total']  ?>">
         <p class="parr">Calle:</p> 
         <input type="text" class="form-control mb-2" name="Calle" placeholder="Calle" value="<?php  echo $row['Calle']  ?>">   
         <p class="parr">Carrera:</p>           
         <input type="text" class="form-control mb-2" name="Carrera" placeholder="Carrera" value="<?php  echo $row['Carrera']  ?>"> 
         <p class="parr">Departamento:</p> 
         <input type="text" class="form-control mb-2" name="Dpto" placeholder="Departamento" value="<?php  echo $row['Departamento']  ?>">
         <p class="parr">Municipio:</p> 
         <input type="text" class="form-control mb-2" name="Mun" placeholder="Municipio" value="<?php  echo $row['Municipio']  ?>">     
         <div class="parr">     
         <input type="submit" class="btn btn-success mb-2 px-4" value="Actualizar" >
         </div>
        </form>
       
      </div> 
     </div>
    </div>


</body>
</html>