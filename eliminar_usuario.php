
<?php

include("conexion.php");

$con=conectar();

$Id_user = $_GET['Id'];

$sql="DELETE FROM usuario WHERE Id='$Id_user'";

$query=mysqli_query($con,$sql);

 if($query){

  Header("Location: mostrar_usuario.php");
 }

?>
