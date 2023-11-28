<?php
session_start();
if (!isset($_SESSION["usuario"])) {
header("location:login/login.html");
        }
        echo "<h3><a href='login/login.html'><i class='fas fa-door-open'></i>Cerrar</a></h3>";       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/stylein.css">
</head>
<body>
    <header>
        <div class="menu">
        <nav>
            <h1>Control Asistencia</h1>
            <a href="#">INICIO</a>
            <a href="barra/asistencia.php">ASISTENCIA</a>
            <a href="barra/contacto.php">CONTACTO</a>
            <a href="barra/ayuda_asis.php">AYUDA Y ASISTENCIA</a>
            <a href="barra/perfil.php">PERFIL</a> <?php echo $_SESSION["usuario"].'-'.$_SESSION["id"] ?>
        </nav>
        </div>
    </header>
    
    <form action="guarpres.php" method="post">  
      <div class="contenido">
        <center>
          <!-- Fecha de Asistencia/Inasistencia -->
          <label for="fecha"></label>
          <input type="date" name="fecha" required="" class="calen"> <br> <br>
          <!-- Opciones de presente -->
          <label for="presente"></label>
          <input type="submit" value="Si Asisto" class="boton"> <input type="submit" value="No Asisto" id="no" class="boton">
          <input type="hidden" name="presente" value="Si Asisto" id="sa">
        </center>
      </div>
      <div id="mtv"></div>
    </form>
        
    <!--<script src="no uso/funcion.js">-->
        
    </script> 
</body>
</html>