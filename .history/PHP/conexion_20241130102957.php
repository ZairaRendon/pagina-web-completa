<?php
$servername = "localhost";
$username = "root";
$password = ""; // Sin contraseña por defecto
$dbname = "clientes_db"; // Cambia si el nombre de tu base de datos es diferente

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
