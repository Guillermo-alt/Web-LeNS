<?php
require "conect.php";
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$matric =$_POST['matricula'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];

$sql = "INSERT INTO comentarios (Matricula,Email,Asunto) VALUES ('$matric', '$email', '$asunto')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<script> alert("Mensaje Registrado");
location.href ="/contacto.html";
</script>