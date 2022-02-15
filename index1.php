
<?php 
		
        

$con = mysqli_connect('localhost','root','','ventapartespc');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Venta Partes Pc </title>
</head>
<body>
    <h1> Hola mundo </h1>
 
    <br>

	<table border="1" >
		<tr>
			<td>Id</td>
			<td>Telefono</td>
			<td>Nombre</td>
			<td>Correo</td>
			<td>Contraseña</td>	
		</tr>

		

         $sql = "SELECT * FROM usuario";
         $que = mysqli_query($con,$sql);


		 //while($mostrar=mysqli_fetch_array($query)){
		while($mostrar=mysqli_fetch_array($que))
        ?>

		<tr>
			<td><?php echo $mostrar['Id'] ?></td>
			<td><?php echo $mostrar['Telefono'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Correo'] ?></td>
			<td><?php echo $mostrar['Contraseña'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>