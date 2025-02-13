<?php

include("conexion.php");
// include("nav.html");
$con = conectar();

$sql = "SELECT usuario.Nombre, usuario.Id, pedido.Id, pedido.Fecha, pedido.Monto_total, pedido.Calle, pedido.Carrera, pedido.Departamento, pedido.Municipio FROM pedido,usuario WHERE pedido.Id_usuario = usuario.Id";

$query = mysqli_query($con, $sql);

$ids = mysqli_query($con, "SELECT Id, Nombre FROM usuario") or die('No se pudo realizar la consulta');

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <title> Pedidos </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href=" https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

  <!-- <style type="text/css">  </style>  -->
  <link rel="stylesheet" href="css/modal_ingreso_datos.css">
  <link rel="stylesheet" href="css/mostrar.css">

</head>


<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d1017;">
    <div class="container-fluid">
      <a class="navbar-brand mx-5" href="index.html">
        <img src="img/flame-blue-laptop.png" width="40" height="40" alt="">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-lg-0">
          <li class="nav-item  mx-3">
            <a class="nav-link active" aria-current="page" href="mostrar_usuario.php">Usuarios</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="mostrar_producto.php">Productos</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="mostrar_pedido.php">Pedidos</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="mostrar_proveedor.php">Proveedores</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="mostrar_reseña.php">Reseñas</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="mostrar_producto_pedido.php">Producto<span class="XD">/</span>pedido</a></span>
          </li>
          <li class="nav-item mr-5 ml-5">
            <a class="nav-link active" aria-current="page" href="mostrar_proveedor_producto.php">Proveedor<span class="XD">/</span>producto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <div class="title text-center py-3">
    <div>
      <h1>Pedidos</h1>
    </div>
  </div>

  <div class="content" style="margin-top: 3px;">

    <div class="container mt-2">

      <div>

        <div class="table-responsive">
          <table class="text-center table table-bordered table-hover bg-light mt-1" style="width:100%">

            <thead>
              <tr align="center">
                <th class="bg-info">Id usuario</th>
                <th class="bg-info">Id pedido</th>
                <th class="bg-info">Fecha</th>
                <th class="bg-info">Monto total</th>
                <th class="bg-info">Calle</th>
                <th class="bg-info">Carrera</th>
                <th class="bg-info">Departamento</th>
                <th class="bg-info">Municipio</th>
                <th class="table-dark"></th>
                <th class="table-dark"></th>
              </tr>
            </thead>

            <tbody>

              <?php
              while ($row = mysqli_fetch_array($query)) {
              ?>

                <tr align="center">
                  <th><?php echo $row['1'] ?></th>
                  <!-- <th><?php echo $row['0'] ?></th> -->
                  <th><?php echo $row['2'] ?></th>
                  <th><?php echo $row['3'] ?></th>
                  <th><?php echo $row['4'] ?></th>
                  <th><?php echo $row['5'] ?></th>
                  <th><?php echo $row['6'] ?></th>
                  <th><?php echo $row['7'] ?></th>
                  <th><?php echo $row['8'] ?></th>

                  <!-- <th> <a href="actualizar_usuario.php" ></th> -->
                  <th style="text-align:center"><a href="actualizar_pedido.php?Id_p=<?php echo $row['2'] ?>"> <button type="button" class="btn btn-light border border-dark ">Editar</button></a></th>

                  <th style="text-align:center"><a href="eliminar_pedido.php?Id_p=<?php echo $row['Id'] ?>"> <button type="button" class="btn btn-danger">Eliminar</button></a></th>

                  </th>
                </tr>

              <?php
              }
              ?>

            </tbody>
          </table>

        </div>

        <div class="abrir">
          <button data-bs-toggle="modal" data-bs-target="#datos">Ingrese un nuevo pedido</button>
        </div>

        <!-- Formulario ingresar datos -->

        <div class="modal fade modal-signin py-5" tabindex="-1" role="dialog" id="datos">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-5 shadow">
              <div class="modal-header p-5 pb-4 border-bottom-0 text">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <div class="titulo-modal">
                  <h2 class="fw-bold mb-0"><span class="badge bg-warning text-dark">Ingrese datos
                    </span></h2>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body p-5 pt-0">
                <form action="add_pedido.php" method="POST">

                  <input type="number" class="form-control mb-3" name="Id_pedido" placeholder="Id pedido">
                  <input type="date" class="form-control mb-3" name="Fecha" placeholder="Fecha">
                  <input type="number" class="form-control mb-3" name="Monto" placeholder="Monto del pedido">
                  <input type="text" class="form-control mb-3" name="Calle" placeholder="Calle">
                  <input type="text" class="form-control mb-3" name="Carrera" placeholder="Carrera">
                  <input type="text" class="form-control mb-3" name="Dpto" placeholder="Departamento">
                  <input type="text" class="form-control mb-3" name="Mun" placeholder="Municipio">
                  <!-- <input type="text" class="form-control mb-3" name="Mun" placeholder="XD"> -->
                  <select name="Id_us" id="" class="form-control mb-3" style="background-color:#FFFFFF;border:1px solid #122A2A;">
                    <?php
                    while ($pos = mysqli_fetch_array($ids)) {
                      echo '<option value="' . $pos[0] . '">' . $pos[1] . '</option>';
                    }
                    ?>
                  </select>
                  <br><br>
                  <input type="submit" value="Enviar" class="btn btn-success px-5">

                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Formulario ingresar datos -->

      </div>
    </div>
  </div>


  <script src="https://kit.fontawesome.com/849c11d1ad.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>

</html>