<?php

include("conexion.php");

$con = conectar();

$cod = $_GET['Codigo'];

$sql = "SELECT * FROM producto WHERE Codigo='$cod'";

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
                <form action="up_producto.php?$row['Codigo']&$row['Stock']&$row['Nombre']&row['Precio']&row['Descripcion']&row['Imagen']&row['Categoria']" method="POST">

                    <p class="parr mt-2">Codigo producto:</p>
                    <input type="text" readonly class="form-control mb-2" name="Codigo" placeholder="Codigo" value="<?php echo $row['Codigo']   ?>">

                    <p class="parr mt-2">Stock:</p>
                    <input type="text" class="form-control mb-2" name="Stock" placeholder="Stock" value="<?php echo $row['Stock']   ?>">

                    <p class="parr mt-2">Nombre</p>
                    <input type="text" class="form-control mb-2" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">

                    <p class="parr mt-2">Precio:</p>
                    <input type="number" class="form-control mb-2" name="Precio" placeholder="Precio" value="<?php echo $row['Precio']  ?>">

                    <p class="parr mt-2">Descripción</p>
                    <input type="text" class="form-control mb-2" name="Descripcion" placeholder="Descripción" value="<?php echo $row['Descripcion']  ?>">

                    <p class="parr mt-2">URL imagen</p>
                    <input type="text" class="form-control mb-2" name="Imagen" placeholder="URL imagen" value="<?php echo $row['Imagen']  ?>">

                    <p class="parr mt-2">Categoria</p>
                    <input type="text" class="form-control mb-2" name="Categoria" placeholder="Categoria" value="<?php echo $row['Categoria']  ?>">

                    <div class="parr mt-2">
                        <input type="submit" class="btn btn-success mb-2 px-4" value="Actualizar">
                    </div>

                </form>

            </div>
        </div>
    </div>

</body>

</html>