<?php
include 'conexion.php'; // Incluye el archivo para conectar con la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Verifica que todos los campos tengan datos
    if (!empty($nombre) && !empty($telefono) && !empty($correo) && !empty($mensaje)) {
        // Inserta los datos en la base de datos
        $sql = "INSERT INTO clientes (nombre, correo, telefono, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

        if ($conn->query($sql) === TRUE) {
            echo "Cliente registrado correctamente.";
        } else {
            echo "Error al registrar cliente: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }

    $conn->close(); // Cierra la conexión
}
?>
