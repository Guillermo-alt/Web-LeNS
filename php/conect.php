<?php
$servername = "localhost";
$database = "prueba";
$username = "root";
$password = "Kinomoto76";

$conn = mysqli_connect($servername, $username, $password, $database);
 
if (mysqli_connect_errno()) 
{
    die("Error al conectar con mysql DB " . mysqli_connect_errno()); //imprime error y muere
}
echo "conectado con éxito"; //echo puede imprimir varias cadenas - imp y sigue la concontinua