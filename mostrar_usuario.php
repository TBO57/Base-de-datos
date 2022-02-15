
<?php

include("conexion.php");

$con = conectar();

$sql = "SELECT * FROM usuario";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
  <title> Usuarios </title>

<body>
    

<table id="departamentos" style="width:100%">
    
        <tr align="center" border="1">
            <th color=green>Codigo</th>
             <th>Id</th>
             <th>Telefono</th>
             <th>Nombre</th>
             <th>Correo</th>
             <th>Contraseña</th>
             <th></th>
              <th></th>
                </tr>
               </thead>

               

        <tbody>
             <?php
              while($row=mysqli_fetch_array($query))
               {
                ?>
                 <tr>
                <th><?php  echo $row['Id']?></th>
                <th><?php  echo $row['Telefono']?></th>
                <th><?php  echo $row['Nombre']?></th> 
                <th><?php  echo $row['Correo']?></th>
                <th><?php  echo $row['Contraseña']?></th>
                <                                       
             </tr>
            <?php 
            }
            ?>
        </tbody>
</body>
</html>