
<?php 

include("conexion.php");

$con=conectar();

$Id_user = $_GET['Id'];

$sql="SELECT * FROM usuario WHERE Id='$Id_user'";

$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <b><title>Actualizar usuario</title></b>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha284-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/actualizar.css">

</head>


<body>

<div class="title text-center py-3">
    <h1>Actualizando usuario...</h1> 
</div>

    <div class="tarjeta">

     <div class="row justify-content-center">
      <div style="display: flex; align-items:center;">
        <form action="up_usuario.php?$row['Id']&$row['Telefono']&$row['Nombre']&row['Correo']&row['Contraseña']" method="POST">
         <p class="parr mt-2">Id Usuario:</p> 
         <input type="text" readonly class="form-control mb-2" name="Id_usuario" placeholder="Id usuario" value="<?php echo $row['Id']   ?>">
         <p class="parr mt-2">Telefono:</p> 
         <input type="text" class="form-control mb-2" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono']   ?>">
         <p class="parr mt-2">Nombre</p> 
         <input type="text" class="form-control mb-2" name="Nombre" placeholder="Nombre" value="<?php echo $row ['Nombre']  ?>">
         <p class="parr mt-2">Correo:</p> 
         <input type="text" class="form-control mb-2" name="Correo" placeholder="Correo" value="<?php  echo $row['Correo']  ?>">   
         <p class="parr mt-2">Contraseña:</p>           
         <input type="password" class="form-control mb-2" name="Contraseña" placeholder="Contraseña" value="<?php  echo $row['Contraseña']  ?>">      
         <div class="parr mt-2">     
         <input type="submit" class="btn btn-success mb-2 px-4" value="Actualizar" >
         </div>
        </form>
       
      </div> 
     </div>
    </div>


</body>
</html>