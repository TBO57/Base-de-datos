<?php

include("conexion.php");

$con = conectar();

$id = $_REQUEST["Id"];
$cod = $_REQUEST["Codigo_producto"];
$usr = $_REQUEST["Usuario"];
$dat = $_REQUEST["Fecha"];
$com = $_REQUEST["Comentario"];
$val = $_REQUEST["Valoracion"];

$sql = "UPDATE reseña SET Usuario='$usr', Fecha = '$dat', Comentario = '$com', Valoracion = '$val' WHERE Id='$id' AND Codigo_producto='$cod'";

$query = mysqli_query($con, $sql);

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

    if ($query) {

        Header("Location: mostrar_reseña.php");
    }

    ?>

</body>

</html>