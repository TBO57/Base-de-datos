
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Nuevo proveedor </title>

</head>
<body>

  <form method="POST" action="add_proveedor.php">
  <fieldset>
    <legend>Ingrese los datos que desea agregar</legend>

     <p>
   <label>Ingrese el Id del proveedor:
   <input type="text" name="Id_proveedor">
   </label>    
     </p>

     <p>
   <label>Ingrese el Nombre del proveedor:
   <input type="text" name="Nombre">
   </label>    
     </p>

     <p>
   <label>Ingrese la url de la pagina web del proveedor:
   <input type="text" name="Pagina_web">
   </label>    
     </p>

     <p>
     <input type="submit" value="Enviar" name="Sub" />   
     </p>
  </fieldset>

  </form>

</body>
</html>