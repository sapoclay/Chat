<?php
  $hostname = "localhost";
  $username = "XXX";
  $password = "XXX";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Error de conexión a la base de datos: ".mysqli_connect_error();
  }
?>
