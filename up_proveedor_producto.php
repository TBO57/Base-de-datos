
<?php

include("conexion.php");

$con=conectar();

$Id = $_POST['Id'];
$Cod_producto = $_POST['Cod_pr'];
$Id_prov = $_POST['Id_pro'];
$Costo =$_POST['Costo'];
$Fecha =$_POST['Fecha'];
$Can_producto =$_POST['Cantidad'];

$sql="UPDATE proveedor_producto SET Costo_total='$Costo',Fecha_compra='$Fecha',Cantidad_producto='$Can_producto' WHERE Id='$Id'";

$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

 if($query){

  Header("Location: mostrar_proveedor_producto.php");
 }
 
?>

</body>
</html>
