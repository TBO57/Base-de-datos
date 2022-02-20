<?php

include("conexion.php");

$con=conectar();

$Id_user = $_POST['Id_usuario'];
$Tel =$_POST['Telefono'];
$Nom =$_POST['Nombre'];
$email =$_POST['Correo'];
$pwd =$_POST['Contraseña'];

$sql="UPDATE usuario SET Telefono='$Tel',Nombre='$Nom',Correo='$email',Contraseña='$pwd' WHERE Id='$Id_user'";
// $sql="UPDATE departamentos SET Nombre='$nombre_',Economia='$economia_' WHERE IdDpto='$codigo_dpto_'";

$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  <link href=" https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

</head>
<body>

<?php

 if($query){

  Header("Location: mostrar_usuario.php");
 }
 
?>

</body>
</html>