
<?php

include("conexion.php");

$con = conectar();

$sql = "SELECT * FROM proveedor";
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
            
          <th>Id_proveedor</th>
          <th>Nombre</th>
          <th>Pagina_web</th>

        </tr>
               </thead>

    <tbody>

        <?php

        while($row=mysqli_fetch_array($query)){

        ?>

        <tr>
          <th><?php  echo $row['Id_proveedor']?></th>
          <th><?php  echo $row['Nombre']?></th>
          <th><?php  echo $row['Pagina_web']?></th> 
                                                
        </tr>

        <?php 
            }
        ?>

    </tbody>
  </table>
 </div>

</body>
</html>