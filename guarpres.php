<?php
session_start();
$idu=$_SESSION["id"];
require ('conexion.php');
    /*$_SESSION["nombre"]=$_POST["nombre"];  
    $apellido =$_POST['apellido'];*/
    $presente = $_POST['presente'];
    $fecha = $_POST['fecha'];
    //$motivo=$_POST["motivo"];

    $insertar = "INSERT INTO asistencia(id_usu, presente, fecha) VALUES ($idu, '$presente', '$fecha')";
    
    $resultado=$mysqli->query($insertar); 
        if ($resultado) {
            header('location:index.php');
        }
?>