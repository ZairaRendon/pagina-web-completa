<?php
    include 'conexion.php';

    // Utilizamos el método post para alamacenar los datos en variables de entrada
    $nombre = $_POST["nombre"];
    $tel = $_POST["tel"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];



    // Insertar campos
    $insertar = "INSERT INTO tblcontacto(nombre,tel,correo,mensaje) VALUES ('$nombre','$tel','$correo','$mensaje')";

   
  
    // Verificar que el correo electrónico no exista

    $verificar_correo = mysqli_query($conexion,"SELECT * FROM tblcontacto WHERE correo = '$correo'");

   

    if(mysqli_num_rows($verificar_correo) > 0) {        
        echo '<script>
                alert("El correo ya existe");
                window.history.go(-1);
              </script>';
              exit;
    } 

    // Ejecutar consultas
    $resultado = mysqli_query($conexion,$insertar);
    if(!$resultado) {
        echo '<script>
                alert("Error de registro");
                window.history.go(-1);                
              </script>';
    } else {
        echo '<script>
                alert("Registro efectuado correctamente");
                window.history.go(-1);                
            </script>';  
    }

    // Cerrar consultas
    /* mysqli_close($conexion); */