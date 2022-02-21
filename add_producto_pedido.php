<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto pedido</title>

</head>
<body>
    <?php
     $Estado = $_REQUEST["Estado"];
     $Id_pedido = $_REQUEST["Id_pedido"];  
     $Codigo_producto = $_REQUEST["Codigo_producto"]; 

    include("conexion.php");

    $con = conectar();
    
    $sql = "INSERT INTO producto_pedido(Estado,Id_pedido,Codigo_producto) VALUES ('$Estado','$Id_pedido','$Codigo_producto')";

    $consulta = mysqli_query($con,$sql) or die ("No se pudieron guardar los datos");

     if ($consulta = 1)
     {
        Header("Location: mostrar_producto_pedido.php");
     }
    ?>
</body>
</html>