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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>


<body>

    <div class="title text-center py-3">
        <h1>Actualizando usuario...</h1>
    </div>

    <div class="container mt-2">

        <div class="row justify-content-center">
            <div class="col-md-3" style="display: flex; align-items:center;">
                <form action="up_reseña.php?$row['Id']$row['Codigo_producto']&$row['Usuario']&$row['Fecha']&row['Comentario']&row['Valoracion']" method="POST">

                    <h5 class="text text-center">Id reseña:</h5>
                    <input type="number" readonly class="form-control mb-3" name="Id" placeholder="Id reseña" value="<?php echo $row['Id']   ?>">

                    <h5 class="text text-center">Codigo producto:</h5>
                    <input type="number" readonly class="form-control mb-3" name="Codigo_producto" placeholder="Codigo producto" value="<?php echo $row['Codigo_producto']   ?>">

                    <h5 class="text text-center">Usuario:</h5>
                    <input type="text" class="form-control mb-3" name="Usuario" placeholder="Usuario" value="<?php echo $row['Usuario']   ?>">

                    <h5 class="text text-center">Fecha</h5>
                    <input type="date" class="form-control mb-3" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']  ?>">

                    <h5 class="text text-center">Comentario</h5>
                    <input type="text" class="form-control mb-3" name="Comentario" placeholder="Comentario" value="<?php echo $row['Comentario']  ?>">

                    <h5 class="text text-center">Valoracion:</h5>
                    <input type="number" class="form-control mb-3" name="Valoracion" placeholder="Valoracion" min="0" max="10" step="0.1" value="<?php echo $row['Valoracion']  ?>">

                    <div class="text text-center">
                        <input type="submit" class="btn btn-success" value="Actualizar">
                    </div>

                </form>

            </div>
        </div>
    </div>

</body>

</html>