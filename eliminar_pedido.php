
<?php

include("conexion.php");

$con=conectar();

$Id_pedido = $_GET['Id_p'];

$sql="DELETE FROM pedido WHERE Id='$Id_pedido'";

$query=mysqli_query($con,$sql);

 if($query){

  Header("Location: mostrar_pedido.php");
 }

?>
