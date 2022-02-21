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
    $id = $_REQUEST["Id"];
    $cod = $_REQUEST["Codigo_producto"];
    $usr = $_REQUEST["Usuario"];
    $dat = $_REQUEST["Fecha"];
    $com = $_REQUEST["Comentario"];
    $val = $_REQUEST["Valoracion"];

    include("conexion.php");

    $con = conectar();

    $sql = "INSERT INTO reseña(Id,Codigo_producto,Usuario,Fecha,Comentario,Valoracion) VALUES ('$id','$cod','$usr','$dat','$com','$val')";

    $consulta = mysqli_query($con, $sql) or die("No se pudieron guardar los datos");

    if ($consulta = 1) {

        Header("Location: mostrar_reseña.php");
    }
    ?>
</body>

</html>