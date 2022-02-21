
<?php

include("conexion.php");

$con=conectar();

$Id_user = $_REQUEST['Id_usuario'];
$Id = $_REQUEST['Id'];
$Fecha =$_REQUEST['Fecha'];
$Monto =$_REQUEST['Monto'];
$Calle =$_REQUEST['Calle'];
$Carrera =$_REQUEST['Carrera'];
$Dpto =$_REQUEST['Dpto'];
$Mun =$_REQUEST['Mun'];

$sql="UPDATE pedido SET Fecha='$Fecha',Monto_total='$Monto',Calle='$Calle',Carrera='$Carrera',Departamento='$Dpto',Municipio='$Mun' WHERE Id='$Id'";

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

  Header("Location: mostrar_pedido.php");
 }
 
?>

</body>
</html>
