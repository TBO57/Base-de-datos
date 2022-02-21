<?php

include("conexion.php");

$con=conectar();

$Id_pedido = $_GET['Id'];

$sql="DELETE FROM producto_pedido WHERE Id_pedido='$Id_pedido'";

$query=mysqli_query($con,$sql);

 if($query){

  Header("Location: mostrar_producto_pedido.php");
 }

?>