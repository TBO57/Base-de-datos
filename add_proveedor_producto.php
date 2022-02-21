
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
     $Cod1 = $_REQUEST["Cod_pr"];
     $Cod2 = $_REQUEST["Id_pro"];  
     $Costo = $_REQUEST["Costo"]; 
     $Fecha = $_REQUEST["Fecha"]; 
     $Num = $_REQUEST["Cantidad"]; 
  
    include("conexion.php");

    $con = conectar();

if(empty($Cod1))
    {
    echo '<div class="container">
          <div class="row">
         <div class="col-md-3  col-sm-6 col-xs-12">';
    echo '<div class="alert alert-danger" role="alert"> Codigo demunicipio VACIO </div>';
    echo '<th><input type="button" value="Página anterior" onClick="history.go(-1);"></th>';
    echo '</div>
    </div>
    </div>';          
    }
else{    
    $sql = "INSERT INTO proveedor_producto(Codigo_producto, Id_proveedor,Costo_total,Fecha_compra,Cantidad_producto) VALUES ('$Cod1','$Cod2','$Costo','$Fecha','$Num')";

    $consulta = mysqli_query($con,$sql) or die ("No se pudieron guardar los datos");

     if ($consulta = 1)
     {
        Header("Location: mostrar_proveedor_producto.php");
     }
   
    }
    ?>
</body>
</html>