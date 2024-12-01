<?php
include 'conexion.php'; // Archivo para la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos enviados desde el formulario
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Validar que los campos no estén vacíos
    if (!empty($nombre) && !empty($telefono) && !empty($correo) && !empty($mensaje)) {
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO clientes (nombre, correo, telefono, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

        if ($conn->query($sql) === TRUE) {
            echo "Cliente registrado correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }

    $conn->close(); // Cerrar la conexión
}
?>
