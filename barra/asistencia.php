<?php
session_start();
$idu=$_SESSION["id"];
echo $idu;
include('../conexion.php');
$sel="SELECT id_usu, presente, asistencia.fecha, motivo, usuarios.id, usuarios.nombre AS usunombre, usuarios.apellido, usuarios.usuario FROM asistencia INNER JOIN usuarios ON usuarios.id=asistencia.id_usu WHERE id_usu=$idu";
$res=$mysqli->query($sel);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
    <link rel="stylesheet" href="../css/asistencia.css">
</head>
<body>
    <div class="menu">
        <header>
            <nav>
                <h1>Control Asistencia</h1>
                <a href="../index.php">INICIO</a>
                <a href="#">ASISTENCIA</a>
                <a href="contacto.php">CONTACTO</a>
                <a href="ayuda_asis.php">AYUDA Y ASISTENCIA</a>
                <a href="perfil.php">PERFIL</a>
            </nav>
        </header>
    </div>

    <!--  Muestra Asistencia -->
    <div class="container">
        <h1>Historial Asistencia</h1>
        <center> <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Presente</th>
                <th>Motivo</th>
            </tr>
            <?php
            while ($info=$res->fetch_assoc()) {
             ?>
            <tr>
                <td>
                    <?php echo $info['usunombre'];?>
                </td>
                
                <td>
                    <?php echo $info['fecha'];?>
                </td>
                <td>
                    <?php echo $info['presente'];?>
                </td>
                <td>
                    <?php echo $info['motivo'];?>
                </td>
                
            </tr>
            <?php
            }
            ?>
        </table> </center>
    </div>
</body>
</html>