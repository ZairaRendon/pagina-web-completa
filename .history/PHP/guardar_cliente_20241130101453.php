<?php
include 'conexion.php'; // Incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO clientes (nombre, correo, telefono, mensaje) 
            VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente registrado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
