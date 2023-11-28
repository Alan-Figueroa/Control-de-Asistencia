<?php
$nombre="";
$apellido="";
$fecha="";
$mail="";
$error="";
if(isset($_REQUEST["existe"])){
	$nombre=$_REQUEST["nombre"];
	$apellido=$_REQUEST["apellido"];
	$fecha=$_REQUEST["fecha"];
	$mail=$_REQUEST["mail"];
	
	$error="<h1>Ya existe el usuario, ingrese uno distinto</h1>";
}
?>
<html>
	<head>
	<title>Registrarse o Entrar</title>
	<link rel="stylesheet" href="estilo.">
	<link rel= "icon" href ="icono.jpg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1; minimum-scale=1">
	<link rel="stylesheet" href="estilos.css">
	</head>
	
	<body>
		
		<form action="registrar.php" method="post" class="form-register">
            <h2 class="form__titulo">Crea una cuenta</h2>
           	<p>Nombre</p>
			<i class="fas fa-user"></i>
			<input type="text" maxlength="50" placeholder="&#128100; Nombre"  name="nombre" value="<?php echo $nombre?>" required>
			<br>
			<p>Apellido</p>
			<input type="text" maxlength="50" placeholder="&#128372; Apellido"  name="apellido" value="<?php echo $apellido?>" required> 
			<br>
			<p>Fecha de Nacimiento</p>
			<input type="date"  name="fecha"  value="<?php echo $fecha?>" required>
			<br>
			<p>Mail</p>
			<input type="email" maxlength="50" placeholder="&#128231; Ejemplo@hotmail.com"  name="mail" value="<?php echo $mail?>" required> 
			<br>
			<p>Usuario</p>
			<input type="text" maxlength="50" placeholder="&#128273; Usuario"  name="usuario" required> 
			<br>
			<p>Contraseña</p>
			<input type="password" maxlength="50" placeholder="&#128274; **********"  name="clave" required>
			<?php echo $error
			?>
			<br>
			<input type="submit" name ="reg" value="Registrar" class="submit"> 
			<p>¿Ya tienes una cuenta?<a href="../login/login.html">Ingresa aquí</a></p>
	
			
		</form>
	</body>
</html>