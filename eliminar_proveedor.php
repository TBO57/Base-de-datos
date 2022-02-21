<?php

include("conexion.php");

$con=conectar();

$Id_proveedor = $_GET['Id'];

$sql="DELETE FROM proveedor WHERE Id_proveedor='$Id_proveedor'";

$query=mysqli_query($con,$sql);

 if($query){

  Header("Location: mostrar_proveedor.php");
 }

?>