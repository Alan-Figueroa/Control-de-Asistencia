<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
<div class="menu">
        <header>
            <nav>
                <h1>Control Asistencia</h1>
                <a href="../index.php">INICIO</a>
                <a href="asistencia.php">ASISTENCIA</a>
                <a href="contacto.php">CONTACTO</a>
                <a href="ayuda_asis.php">AYUDA Y ASISTENCIA</a>
                <a href="#">PERFIL</a>
            </nav>
        </header>
    </div>
    <div class="per">
        <?php 
        include '../conexion.php';
        $select = "SELECT * FROM usuarios";
        $resultado=$mysqli->query($select);
        echo "<center><table border='2'>";
            echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Apellido</th>";
                echo "<th>Fecha Nacimiento</th>";
                echo "<th>Mail</th>";
                echo "<th>Usuario</th>";
                echo "<th>Contraseña</th>";
            echo "</tr>";
            while ($dato=$resultado->fetch_assoc()){;
                echo "<tr>";
                    echo "<td>{$dato['nombre']}</td>";
                    echo "<td>{$dato['apellido']}</td>";
                    echo "<td>{$dato['fecha']}</td>";
                    echo "<td>{$dato['mail']}</td>";
                    echo "<td>{$dato['usuario']}</td>";
                    echo "<td>{$dato['contrasenia']}</td>";
            }
        ?>
    </div>
</body>
</html>