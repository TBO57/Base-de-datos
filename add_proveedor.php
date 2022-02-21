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
     $Id_prov = $_REQUEST["Id_prov"];
     $Nom = $_REQUEST["Nom"];  
     $url = $_REQUEST["url"]; 

    include("conexion.php");

    $con = conectar();
    
    $sql = "INSERT INTO proveedor(Id_proveedor,Nombre,Pagina_web) VALUES ('$Id_prov','$Nom','$url')";

     $consulta = mysqli_query($con,$sql) or die ("No se pudieron guardar los datos");

     if ($consulta = 1)
     {
        Header("Location: mostrar_proveedor.php");
     }
    ?>
</body>
</html>