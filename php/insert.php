<?php
require "conect.php";
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$sql = "INSERT INTO Comentarios (Nombre, Correo, Asunto) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>