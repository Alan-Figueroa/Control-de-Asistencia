<?php
include "conexion.php";
$nombre=$_REQUEST["nombre"];
$apellido=$_REQUEST["apellido"];
$fecha=$_POST["fecha"];
$mail=$_REQUEST["mail"];
$usuario=$_REQUEST["usuario"];
$clave=$_REQUEST["clave"];

$SQL="SELECT * FROM usuarios WHERE usuario='$usuario'";
if ($resultado = $con->query($SQL)){
	if($resultado->num_rows>0){
		header("Location:form.php?existe=si&nombre=$nombre&apellido=$apellido&fecha=$fecha&mail=$mail");
		echo "usuario existente";
	}
	else{
		$SQL="INSERT INTO usuarios (nombre, apellido, fecha, mail, usuario,contrasenia) VALUES ('$nombre','$apellido','$fecha','$mail','$usuario','$clave')";
		if ($resultado = $con->query($SQL)){
			echo "Esta todo bien";
		}
	header("Location:../login/login.html");
	}
}

?>