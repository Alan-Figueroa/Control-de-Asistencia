<?php
    require ('conexion.php');
    $apellido_nombre = $_POST['apellido_nombre'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $f_nac = $_POST['f_nac'];

    $insertar = "INSERT INTO profesor(apellido_nombre, dni, telefono, email, f_nac) VALUES ('$apellido_nombre', $dni, $telefono, '$email', '$f_nac')";

    $resultado=$mysqli->query($insertar); 
        if ('resultado'); {
            header('location:index.php');
        }
?>