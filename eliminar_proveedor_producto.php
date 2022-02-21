
<?php

include("conexion.php");

$con = conectar();

$Id = $_GET['Id_t'];

$sql = "DELETE FROM proveedor_producto WHERE Id='$Id'";

$query = mysqli_query($con, $sql);

if ($query) {

    Header("Location: mostrar_proveedor_producto.php");
}
