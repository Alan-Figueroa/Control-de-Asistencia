<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Profesor</title>
</head>
    <style type="text/css">
        body {
			background-image: url(img/logo.png);
			background-position: center;
			background-color: #CBC7C7;
			background-repeat: no-repeat;
			max-width: 100%;
			height: auto;
			margin-left: 15%;
		}

		body h3 {
			font-size: 30px;
		}

		.parrafo {
			font-family: serif;
			font-size: 20px;
		}

		.parrafo input[type=text] {
			width: 20%;
			padding: 8px 15px;
			margin: 8px 0;
			box-sizing: border-box;
			border-radius: 12px;
		}

		.parrafo input[type=number] {
			width: 20%;
			padding: 8px 15px;
			margin: 8px 0;
			box-sizing: border-box;
			border-radius: 12px;
		}

		.parrafo input[type=date] {
			width: 12%;
			padding: 8px 10px;
			margin: 8px 0;
			box-sizing: border-box;
			border-radius: 12px;
		}

		.parrafo input[type=submit] {
			font-size: 18px;
			border-radius: 12px;
		}
    </style>
<body>
    <form action="guarprof.php" method="post">
        <h3>Registrar Profesor</h3>
        <div class="parrafo">
		<label for="apellido_nombre">Apellido y Nombre</label><br>
		<input type="text" name="apellido_nombre" required="">
		<br>
		<label for="dni">DNI</label><br>
		<input type="number" name="dni" required="">
        <br>
		<label for="telefono">Telefono</label><br>
		<input type="number" name="telefono" required="">
		<br>
		<label for="email">Mail</label><br>
		<input type="text" name="email" required="">
		<br>
		<label for="f_nac">Fecha Nacimiento</label><br>
		<input type="date" name="f_nac" required="">
		<br>
        <br>
		<input type="submit" value="Registrate" href="login.php">
		</div>
    </form>
</body>
</html>