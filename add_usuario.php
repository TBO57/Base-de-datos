
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <?php
     $Id_user = $_REQUEST["Id_usuario"];
     $Tel = $_REQUEST["Telefono"];  
     $Nom = $_REQUEST["Nombre"]; 
     $email = $_REQUEST["Correo"]; 
     $pwd = $_REQUEST["Contraseña"]; 
  
    include("conexion.php");

    $con = conectar();
    
    $sql = "INSERT INTO usuario(id,telefono,nombre,correo,contraseña) VALUES ('$Id_user','$Tel','$Nom','$email','$pwd')";

     $consulta = mysqli_query($con,$sql) or die ("No se pudieron guardar los datos");

     if ($consulta = 1)
     {
        Header("Location: mostrar_usuario.php");
        /*print "Datos guardados con Exito ";*/
     }
    ?>
</body>
</html>