
<?php

include("conexion.php");

$con = conectar();

$sql = "SELECT * FROM reseña";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <title> Usuarios </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
  

<body>
    
<div class="col-md-8">
  <table id="departamentos" style="width:100%" border="1">
    
        <tr align="center" >
            
          <th>Codigo_producto</th>
          <th>Usuario</th>
          <th>Fecha</th>
          <th>Comentario</th>
          <th>Valoracion</th>
             
        </tr>
               </thead>

    <tbody>

        <?php

        while($row=mysqli_fetch_array($query)){

        ?>

        <tr>
          <th><?php  echo $row['Codigo_producto']?></th>
          <th><?php  echo $row['Usuario']?></th>
          <th><?php  echo $row['Fecha']?></th> 
          <th><?php  echo $row['Comentario']?></th>
          <th><?php  echo $row['Valoracion']?></th>
                                                    
        </tr>

        <?php 
            }
        ?>

    </tbody>
  </table>
 </div>

</body>
</html>