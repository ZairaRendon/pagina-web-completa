<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'nombre_de_tu_base_de_datos');

// Verificar conexión
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

// Capturar los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Insertar los datos en la tabla
$sql = "INSERT INTO clientes (nombre, telefono, correo, mensaje) VALUES ('$nombre', '$telefono', '$correo', '$mensaje')";
if ($conn->query($sql) === TRUE) {
    // Redirigir al formulario con mensaje de éxito
    header('Location: index.html?success=1');
    exit();
} else {
    // Redirigir con mensaje de error
    header('Location: index.html?error=1');
    exit();
}

// Cerrar conexión
$conn->close();
?>
