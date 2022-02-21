
<?php

include("conexion.php");

$con = conectar();

$Id = $_GET['Id_prov'];

$sql = "DELETE FROM proveedor_producto WHERE Id_proveedor='$Id'";

$query = mysqli_query($con, $sql);

if ($query) {

    Header("Location: mostrar_proveedor_producto.php");
}
