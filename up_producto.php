
<?php

include("conexion.php");

$con=conectar();

    $cod = $_REQUEST["Codigo"];
    $sto = $_REQUEST["Stock"]; 
    $Nom = $_REQUEST["Nombre"];
    $pre = $_REQUEST["Precio"];
    $des = $_REQUEST["Descripcion"];
    $img = $_REQUEST["Imagen"];
    $cat = $_REQUEST["Categoria"];

$sql="UPDATE producto SET Stock='$sto', Nombre = '$Nom', Precio = '$pre', Descripcion = '$des', Imagen = '$img', Categoria = '$cat' WHERE Codigo='$cod'";
// $sql="UPDATE departamentos SET Nombre='$nombre_',Economia='$economia_' WHERE IdDpto='$codigo_dpto_'";

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

  Header("Location: mostrar_producto.php");
 }
 
?>

</body>
</html>