
<?php

include("conexion.php");

$con = conectar();

$cod = $_GET['reseña'];

$sql = "DELETE FROM reseña WHERE Id='$cod'";

$query = mysqli_query($con, $sql);

if ($query) {

    Header("Location: mostrar_reseña.php");
}
