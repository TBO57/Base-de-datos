
<?php

 include("conexion.php");
 
 $con = conectar();

 $sql = "SELECT pedido.Id, pedido.fecha, pedido.monto_total, pedido.calle, pedido.carrera, pedido.departamento, pedido.municipio";

 $query = mysqli_query($con,$sql);

 <!-- $result = mysqli_query($con,)  -->

?>
