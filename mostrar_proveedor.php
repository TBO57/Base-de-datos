<?php

include("conexion.php");
// include("nav.html");
$con = conectar();

$sql = "SELECT * FROM proveedor";

$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <title> Proveedores </title>
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

</head>


<body>

  <!-- ------Navbar------- -->
  <nav class="navbar navbar-expand-lg navbar-light /*bg-light*/ /*fixed-top*/" style="background-color: #000000;">
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="/Base-de-datos/">Venta Partes Pc</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="mostrar_usuario.php">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="mostrar_producto.php">Productos</a>
          </li>
          <li class="nav-item h-100">
            <a class="nav-link active text-white" aria-current="page" href="mostrar_pedido.php">Pedidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="mostrar_proveedor.php">Proveedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="mostrar_reseña.php">Reseñas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="mostrar_producto_pedido.php">Producto-pedido</a></span>
          </li>
          <li class="nav-item">
            <span class="badge bg-warning text-dark border border-dark  h-100"> <a class="nav-link active" aria-current="page" href="mostrar_proveedor_producto.php">Proveedor-producto</a></span>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ------Navbar------- -->

  <div class="title text-center py-3">
    <div style="background-color: orange;">
      <h1>Proveedores</h1>
    </div>
  </div>

  <div class="content" style="margin-top: 3px;">

    <div class="container mt-2">
      <!-- <div class="container-fluid col-md-8"> -->

      <div>

        <div class="table-responsive">
          <table class="text-center table table-bordered table-hover /*table-striped*/ shadow-lg mt-1" style="width:100%">

            <thead>
              <tr align="center">
                <th class="bg-info">Id Proveedor</th>
                <th class="bg-info">Nombre</th>
                <th class="bg-info">Pagina Web</th>
                <th class="table-dark"></th>
                <th class="table-dark"></th>
              </tr>
            </thead>

            <tbody>

              <?php
              while ($row = mysqli_fetch_array($query)) {
              ?>

                <tr align="center">
                  <th><?php echo $row['Id_proveedor'] ?></th>
                  <th><?php echo $row['Nombre'] ?></th>
                  <th><?php echo $row['Pagina_web'] ?></th>
                  <!-- <th> <a href="actualizar_usuario.php" ></th> -->
                  <th style="text-align:center"><a href="actualizar_proveedor.php?Id=<?php echo $row['Id_proveedor'] ?>"> <button type="button" class="btn btn-light border border-dark ">Editar</button></a></th>

                  <th style="text-align:center"><a href="eliminar_proveedor.php?Id=<?php echo $row['Id_proveedor'] ?>"> <button type="button" class="btn btn-danger">Eliminar</button></a></th>

                  <!-- <th style="text-align:center"><a href="actualizar.php?codigo_dpto_=<?php echo $row['IdDpto'] ?>"> <button type="button" class="btn btn-info">Editar</button></a></th>

            <th style="text-align:center"><a href="delete.php?codigo_dpto_=<?php echo $row['IdDpto'] ?>"> <button type="button"  class="btn btn-danger" onclick="return confirmDelete()">Eliminar</button></a> -->
                  </th>
                </tr>

              <?php
              }
              ?>

            </tbody>
          </table>
        </div>

        <div class="abrir">
          <button data-bs-toggle="modal" data-bs-target="#datos">Ingrese un nuevo proveedor</button>
        </div>

        <!-- Formulario ingresar datos -->

        <div class="modal fade modal-signin py-5" tabindex="-1" role="dialog" id="datos">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-5 shadow">
              <div class="modal-header p-5 pb-4 border-bottom-0 text">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <div class="titulo-modal">
                  <h2 class="fw-bold mb-0"><span class="badge bg-warning text-dark border border-dark">Ingrese datos</span></h2>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body p-5 pt-0">
                <form action="add_proveedor.php" method="POST">

                  <input type="number" class="form-control mb-3" name="Id_prov" placeholder="Id Proveedor">
                  <input type="text" class="form-control mb-3" name="Nom" placeholder="Nombre">
                  <input type="text" class="form-control mb-3" name="url" placeholder="Pagina Webb">
                  <input type="submit" value="Enviar" class="btn btn-success">

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