<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Datos recibidos:<br>";
    echo "Nombre: " . $_POST["nombre"] . "<br>";
    echo "Teléfono: " . $_POST["telefono"] . "<br>";
    echo "Correo: " . $_POST["correo"] . "<br>";
    echo "Mensaje: " . $_POST["mensaje"] . "<br>";

    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO clientes (nombre, correo, telefono, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";
    if ($conn->query($sql) === TRUE) {
        echo "Cliente registrado correctamente.";
    } else {
        echo "Error al registrar cliente: " . $conn->error;
    }

    $conn->close();
}
?>
