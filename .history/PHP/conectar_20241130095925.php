<?php
// Configuración de la conexión
$servername = "localhost";
$username = "root";
$password = ""; // Sin contraseña por defecto
$dbname = "clientes_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
