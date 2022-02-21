
<?php

include("conexion.php");

$con=conectar();

$Id_user = $_POST['Id_usuario'];
$Id = $_POST['Id'];
$Fecha =$_POST['Fecha'];
$Monto =$_POST['Monto'];
$Calle =$_POST['Calle'];
$Carrera =$_POST['Carrera'];
$Dpto =$_POST['Dpto'];
$Mun =$_POST['Mun'];

$sql="UPDATE pedido SET Fecha='$Fecha',Monto_total='$Monto',Calle='$Calle',Carrera='$Carrera',Departamento='$Dpto',Municipio='$Mun' WHERE Id_usuario='$Id_user' & Id='$Id'";

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
