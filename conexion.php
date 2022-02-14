
<?php
 
  function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $BD = "venta partes pc";

    $con = mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$BD);

    return $con;

  }
?>