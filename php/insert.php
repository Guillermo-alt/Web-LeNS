<?php
require "conect.php";
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$nombre ="sad";
$email = $_POST['email'];
$asunto = $_POST['asunto'];

$sql = "INSERT INTO Comentarios (Nombre, Correo, Asunto) VALUES ('$nombre', '$email', '$asunto')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
1
<script> alert("Mensaje Registrado");
location.href ="/Web-LeNS/contacto.html";
</script>