
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
     $Id = $_REQUEST["Id_pedido"];
     $Fecha = $_REQUEST["Fecha"];  
     $Monto = $_REQUEST["Monto"]; 
     $Calle = $_REQUEST["Calle"]; 
     $Carrera = $_REQUEST["Carrera"]; 
     $Dpto = $_REQUEST["Dpto"]; 
     $Mun = $_REQUEST["Mun"]; 
     $Id2 = $_REQUEST["Id_us"];
  
    include("conexion.php");

    $con = conectar();
    
    $sql = "INSERT INTO pedido(Id_usuario,Id,Fecha,Monto_total,Calle,Carrera,Departamento,Municipio) VALUES ('$Id2','$Id','$Fecha','$Monto','$Calle','$Carrera','$Dpto','$Mun')";

    $consulta = mysqli_query($con,$sql) or die ("No se pudieron guardar los datos");

     if ($consulta = 1)
     {
        Header("Location: mostrar_pedido.php");
     }
    ?>
</body>
</html>