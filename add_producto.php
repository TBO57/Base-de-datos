<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <?php
        $cod = $_REQUEST["Codigo"];
        $sto = $_REQUEST["Stock"]; 
        $Nom = $_REQUEST["Nombre"];
        $pre = $_REQUEST["Precio"];
        $des = $_REQUEST["Descripcion"];
        $img = $_REQUEST["Imagen"];
        $cat = $_REQUEST["Categoria"];
  
    include("conexion.php");

    $con = conectar();
    
    $sql = "INSERT INTO producto(Codigo,Stock,Nombre,Precio,Descripcion,Imagen,Categoria) VALUES ('$cod','$Sto','$Nom','$pre','$des','$img','$cat')";

    $consulta = mysqli_query($con,$sql) or die ("No se pudieron guardar los datos");

        if ($consulta = 1){

            Header("Location: mostrar_producto.php");
        }
        ?>
</body>
</html>