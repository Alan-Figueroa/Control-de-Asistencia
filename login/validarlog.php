<?php
try {
    $base= new PDO ("mysql:host=localhost; dbname=control_asistencia", "root", "");
    $base->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql= "SELECT * FROM usuarios WHERE usuario= :usuario AND contrasenia= :clave";
    $resultado= $base->prepare($sql);
    $usuario=htmlentities(addslashes ($_POST["usuario"])); //omite caracteres especiales
    $clave=htmlentities(addslashes ($_POST["clave"]));
    //el marcador se corresponde con log
    $resultado->bindValue(":usuario", $usuario);
    $resultado->bindValue(":clave", $clave);
    $resultado->execute(); //ejecutamos
    $dato=$resultado->fetch();

    //corroboramos si el usuario existe en la bbdd   
    $cantidad_registro=$resultado->rowCount(); //el resultado es 0 o 1
    
    
    if ($cantidad_registro!=0) {
        session_start();
        $_SESSION["usuario"]=$_POST["usuario"];
        $_SESSION["id"]=$dato['id'];
        $_SESSION["nombre"]=$dato["nombre"];
        $_SESSION["apellido"]=$dato["apellido"];

        
    	header("Location: ../index.php");
    }else {    	
		header("Location: login.html");
    }
} catch (Exception $e) {
    die ("Error: " .$e->getMessage());
}
echo $_SESSION["id"];
?>