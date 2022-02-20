
<?php

include("conexion.php");
$con=conectar();

$codigo_dpto_=$_POST['Codigo_dpto'];
$nombre_=$_POST['Nombre'];
$economia_=$_POST['Economia'];


$sql="UPDATE departamentos SET  Nombre='$nombre_',Economia='$economia_' WHERE IdDpto='$codigo_dpto_'";

$query=mysqli_query($con,$sql);

    if($query){
        //echo $sql;
        <div id="liveAlertPlaceholder"></div>
        <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
        Header("Location: departamento.php");
    }
?>

<!-- Ventana de Confirmación -->
