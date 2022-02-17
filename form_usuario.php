
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <title> Nuevo proveedor </title> -->
</head>

<body>

<div class="col-md-3">

  <form method="POST" action="add_usuario.php">

  <span class="badge bg-warning text-dark border border-dark  h-100"> <h1>Ingrese los datos que desea agregar
  </h1> </span>

   <input type="text" class="form-control mb-3" name="Id_usuario" placeholder="Id Usuario">
   </label>    
   
   <!-- <label>Ingrese el Telefono del usuario: -->
   <input type="text" class="form-control mb-3" name="Telefono" placeholder="Teléfono">
   </label>    
 
   <!-- <label>Ingrese el Nombre del usuario: -->
   <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
   </label>    
    
   <!-- <label>Ingrese el correo del usuario: -->
   <input type="text" class="form-control mb-3" name="Correo" placeholder="Correo">
   </label>    
   
   <!-- <label>Ingrese la contraseña: -->
   <input type="password" class="form-control" name="Contraseña" placeholder="Contraseña">
   </label>    

   <div class="vh-100 row m-0 text-center align-items-center justify-content-center">
   <input type="submit" value="Enviar" class="btn btn-success">
   <!-- <input type="submit" value="Enviar" name="Sub" />    -->
   </div>

  </form>

</div>  
</body>
</html>