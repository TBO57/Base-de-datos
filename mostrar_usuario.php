
<?php

include("conexion.php");
// include("nav.html");

$con = conectar();

$sql = "SELECT * FROM usuario";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    
  <title> Usuarios </title>
   <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  <link href=" https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

  <!-- <style type="text/css">  </style>  -->

</head>


<body>
  
<!-- ------------- -->
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
        <!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>
<!-- ------------- -->

<div class="title text-center py-3">
    <h1>Usuarios</h1> 
</div>

<div class="content"  style="margin-top: 3px;">
  
  <div class="container mt-2" >
    <!-- <div class="container-fluid col-md-8"> -->
    
     <div class="row">
      <div class="col-md-3">

      <h1><span class="badge bg-warning text-dark border border-dark">Ingrese datos</span></h1>
       <form action="add_usuario.php" method="POST">
     
        <input type="number" class="form-control mb-3" name="Id_usuario" placeholder="Id Usuario">
        <input type="text" class="form-control mb-3" name="Telefono" placeholder="Teléfono">
        <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
        <input type="text" class="form-control mb-3" name="Correo" placeholder="Correo">
        <input type="password" class="form-control mb-3" name="Contraseña" placeholder="Contraseña">
        <input type="submit" value="Enviar" class="btn btn-success">
       </form>
      <!-- <div class="vh-100 row m-0 text-center align-items-center justify-content-center"> -->
      <!-- <input type="submit" value="Enviar" name="Sub" />    -->
     </div>

     
        <!-- <h1><span class="badge bg-warning">Ingrese datos</span></h1> -->
   <!-- </div> -->

    <div class="col-md-8 table-responsive /*table-responsive container*/">
     <table class="text-center table table-bordered table-hover/*table-striped*/ shadow-lg mt-1" style="width:100% " 
     /*border="1"*/>
    
      <thead>
        <tr align="center">
          <th class="bg-info" >Id</th>
          <th class="bg-info">Telefono</th>
          <th class="bg-info">Nombre</th>
          <th class="bg-info">Correo</th>
          <th class="bg-info">Contraseña</th>   
          <th class="table-dark"></th>
          <th class="table-dark"></th>
        </tr>
      </thead>

      <tbody>

       <?php
        while($row=mysqli_fetch_array($query)){
       ?>

       <tr align="center">
         <th><?php  echo $row['Id']?></th>
         <th><?php  echo $row['Telefono']?></th>
         <th><?php  echo $row['Nombre']?></th> 
         <th><?php  echo $row['Correo']?></th>
         <th><?php  echo $row['Contraseña']?></th>
         <!-- <th> <a href="actualizar_usuario.php" ></th> -->
         <th style="text-align:center"><a href="actualizar_usuario.php?Id_"> <button type="button" class="btn btn-light border border-dark ">Editar</button></a></th>

         <th style="text-align:center"><a href="eliminar_usuario.php"> <button type="button" class="btn btn-danger">Eliminar</button></a></th>

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
   </div> 
  </div>
</div>


</body>
</html>