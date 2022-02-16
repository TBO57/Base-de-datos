
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Nuevo proveedor </title>

</head>
<body>

  <form method="POST" action="modify_usuario.php">
  <fieldset>
    <legend>Ingrese los datos que desea agregar</legend>

     <p>
   <label>Ingrese el Id del usuario:
   <input type="text" name="Id_usuario">
   </label>    
     </p>

     <p>
   <label>Ingrese el Telefono del usuario:
   <input type="text" name="Telefono">
   </label>    
     </p>

     <p>
   <label>Ingrese el Nombre del usuario:
   <input type="text" name="Nombre">
   </label>    
     </p>

     <p>
   <label>Ingrese el correo del usuario:
   <input type="text" name="Correo">
   </label>    
     </p>

     <p>
   <label>Ingrese la contraseña:
   <input type="password" name="Contraseña">
   </label>    
     </p>

     <p>
     <input type="submit" value="Enviar" name="Sub" />   
     </p>
  </fieldset>

  </form>

</body>
</html>