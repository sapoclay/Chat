<?php
  $hostname = "localhost";
  $username = "root";
  $password = "36159152";
  $dbname = "chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Error de conexión a la base de datos: ".mysqli_connect_error();
  }
?>
