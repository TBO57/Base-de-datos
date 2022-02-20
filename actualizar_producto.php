
<?php 

include("conexion.php");

$con=conectar();

$cod = $_GET['Codigo'];

$sql="SELECT * FROM producto WHERE Codigo='$cod'";

$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <b><title>Actualizar usuario</title></b>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>


<body>

<div class="title text-center py-3">
    <h1>Actualizando usuario...</h1> 
</div>

    <div class="container mt-2">

        <div class="row justify-content-center">
            <div class="col-md-3" style="display: flex; align-items:center;">
                <form action="up_producto.php?$row['Codigo']&$row['Stock']&$row['Nombre']&row['Precio']&row['Descripcion']&row['Imagen']&row['Categoria']" method="POST">

                    <h5 class="text text-center">Codigo producto:</h5> 
                    <input type="text" readonly class="form-control mb-3" name="Codigo" placeholder="Codigo" value="<?php echo $row['Codigo']   ?>">

                    <h5 class="text text-center">Stock:</h5> 
                    <input type="text" class="form-control mb-3" name="Stock" placeholder="Stock" value="<?php echo $row['Stock']   ?>">

                    <h5 class="text text-center">Nombre</h5> 
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row ['Nombre']  ?>">

                    <h5 class="text text-center">Precio:</h5> 
                    <input type="number" class="form-control mb-3" name="Precio" placeholder="Precio" value="<?php  echo $row['Precio']  ?>">

                    <h5 class="text text-center">Descripción</h5> 
                    <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripción" value="<?php echo $row ['Descripcion']  ?>">

                    <h5 class="text text-center">URL imagen</h5> 
                    <input type="text" class="form-control mb-3" name="Imagen" placeholder="URL imagen" value="<?php echo $row ['Imagen']  ?>">

                    <h5 class="text text-center">Categoria</h5> 
                    <input type="text" class="form-control mb-3" name="Categoria" placeholder="Categoria" value="<?php echo $row ['Categoria']  ?>">

                    <div class="text text-center">     
                        <input type="submit" class="btn btn-success" value="Actualizar" >
                    </div>

                </form>
        
            </div> 
        </div>
    </div>

</body>
</html>