
<?php

include("conexion.php");

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

</head>
  

<body>
    
<div class="content">
  
  <div class="container mt-5">
    <!-- <div class="container-fluid col-md-8"> -->
    
     <div class="row ">
      <div class="col-md-3">

      <h1><span class="badge bg-warning text-dark border border-dark">Ingrese datos</span></h1>
       <form action="add_usuario.php" method="POST">
     
        <input type="text" class="form-control mb-3" name="Id_usuario" placeholder="Id Usuario">
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

    <div class="col-md-8 /*table-responsive container*/">
     <table class="text-center table table-bordered table-hover /*table-striped*/ shadow-lg mt-1"  style="width:100%" /*border="1"*/>
    
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
         <th> <a href="actualizar_usuario.php" ></th>                                        
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