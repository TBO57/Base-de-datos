<?php

include("conexion.php");

$con = conectar();

$id = $_GET['reseña'];

$sql = "SELECT * FROM reseña WHERE Id ='$id'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <b>
        <title>Actualizar usuario</title>
    </b>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha284-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/actualizar.css">

</head>


<body>

    <div class="title text-center py-3">
        <h1>Actualizando usuario...</h1>
    </div>

    <div class="tarjeta">

        <div class="row justify-content-center">
            <div style="display: flex; align-items:center;">
                <form action="up_reseña.php?$row['Id']$row['Codigo_producto']&$row['Usuario']&$row['Fecha']&row['Comentario']&row['Valoracion']" method="POST">

                    <p class="parr mt-2">Id reseña:</p>
                    <input type="number" readonly class="form-control mb-2" name="Id" placeholder="Id reseña" value="<?php echo $row['Id']   ?>">

                    <p class="parr mt-2">Codigo producto:</p>
                    <input type="number" readonly class="form-control mb-2" name="Codigo_producto" placeholder="Codigo producto" value="<?php echo $row['Codigo_producto']   ?>">

                    <p class="parr mt-2">Usuario:</p>
                    <input type="text" class="form-control mb-2" name="Usuario" placeholder="Usuario" value="<?php echo $row['Usuario']   ?>">

                    <p class="parr mt-2">Fecha</p>
                    <input type="date" class="form-control mb-2" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']  ?>">

                    <p class="parr mt-2">Comentario</p>
                    <input type="text" class="form-control mb-2" name="Comentario" placeholder="Comentario" value="<?php echo $row['Comentario']  ?>">

                    <p class="parr mt-2">Valoracion:</p>
                    <input type="number" class="form-control mb-2" name="Valoracion" placeholder="Valoracion" min="0" max="10" step="0.1" value="<?php echo $row['Valoracion']  ?>">

                    <div class="parr mt-2">
                        <input type="submit" class="btn btn-success mb-2 px-4" value="Actualizar">
                    </div>

                </form>

            </div>
        </div>
    </div>

</body>

</html>