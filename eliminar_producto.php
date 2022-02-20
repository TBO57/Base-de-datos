
<?php

include("conexion.php");

$con=conectar();

$cod = $_GET['Codigo'];

$sql="DELETE FROM producto WHERE Codigo='$cod'";

$query=mysqli_query($con,$sql);

 if($query){

  Header("Location: mostrar_producto.php");
 }
