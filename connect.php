<?php
$servername = "localhost";
$database = "prueba_gs";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

mysqli_close($conn);

?>
<!-- Comentario del cambio -->
<!-- Add other comment -->