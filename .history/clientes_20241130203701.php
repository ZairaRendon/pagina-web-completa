<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Web Personal - clientes</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/clientes.css">
</head>
<body>
    <h1>ZairaPatricia Rendon Serrano <span> Ingenierìa en Computación</span></h1>
    <!-- Menu de navegacion -->
    <div class="fondo-nav">
        <nav class="menu">
            <a href="=index.html">Inicio</a>
            <a href="clientes.php">Clientes</a>
            <a href="sobreMi.html">Sobre mí</a>
            <a href="contacto.html">Contacto</a>
        </nav>
    </div>

    <div class="table-container">
        <h2>Clientes</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Incluir conexión a la base de datos
                include 'conexion.php';
            </tbody>
        </table>
    </div>
</body>
</html>