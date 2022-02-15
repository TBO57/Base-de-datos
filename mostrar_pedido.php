
<?php

include("conexion.php");

$con = conectar();

$sql = "SELECT * FROM pedido";
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
            
          <th>Id_usuario</th>
          <th>Id</th>
          <th>Fecha</th>
          <th>Monto_total</th>
          <th>Calle</th>
          <th>Carrera</th>
          <th>Departamento</th>
          <th>Municipio</th>
             
        </tr>
               </thead>

    <tbody>

        <?php

        while($row=mysqli_fetch_array($query)){

        ?>

        <tr>
          <th><?php  echo $row['Id_usuario']?></th>
          <th><?php  echo $row['Id']?></th>
          <th><?php  echo $row['Fecha']?></th>
          <th><?php  echo $row['Monto_total']?></th>
          <th><?php  echo $row['Calle']?></th>
          <th><?php  echo $row['Carrera']?></th> 
          <th><?php  echo $row['Departamento']?></th>
          <th><?php  echo $row['Municipio']?></th>
                                                    
        </tr>

        <?php 
            }
        ?>

    </tbody>
  </table>
 </div>

</body>
</html>