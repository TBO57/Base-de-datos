
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>


<body>

<div class="title text-center py-3">
    <h1>Actualizando usuario...</h1> 
</div>

    <div class="container mt-2">

     <div class="row justify-content-center">
      <div class="col-md-3" style="display: flex; align-items:center;">
        <form action="up_usuario.php?$row['Id']&$row['Telefono']&$row['Nombre']&row['Correo']&row['Contraseña']" method="POST">
         <h5 class="text text-center">Id Usuario:</h5> 
         <input type="text" readonly class="form-control mb-3" name="Id_usuario" placeholder="Id usuario" value="<?php echo $row['Id']   ?>">
         <h5 class="text text-center">Telefono:</h5> 
         <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono']   ?>">
         <h5 class="text text-center">Nombre</h5> 
         <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row ['Nombre']  ?>">
         <h5 class="text text-center">Correo:</h5> 
         <input type="text" class="form-control mb-3" name="Correo" placeholder="Correo" value="<?php  echo $row['Correo']  ?>">   
         <h5 class="text text-center">Contraseña:</h5>           
         <input type="password" class="form-control mb-3" name="Contraseña" placeholder="Contraseña" value="<?php  echo $row['Contraseña']  ?>">      
         <div class="text text-center">     
         <input type="submit" class="btn btn-success" value="Actualizar" >
         </div>
        </form>
       
      </div> 
     </div>
    </div>


</body>
</html>