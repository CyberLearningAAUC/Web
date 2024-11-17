<!DOCTYPE html>
<html>
    <head>
        <title>
            Iniciar sesión
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="FormLOG.css">
        <link rel="icon" href="CyberLearning.ico">
    </head>
    <body>
        <div class="FSCROLL" id="GOBACK"></div>
        <?php
            ini_set('display_errors', 0);  // No muestra errores
            include("conexión.php");
            include("controlador.php");
            session_start();
            $Nombre = $_SESSION['nombres'];
            if (isset($Nombre)) {
                header("location:Principal.php");
            } else {
            }
        ?>  
        <div class="box">
            <form method="post" action="">
                <h2>Iniciar sesión</h2>
                <div class="inputBox">
                    <input type="text" class="inputs" name="nombres" required/>
                    <span class="spans">Usuario</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" class="inputs" name="contraseña" required/>
                    <span class="spans">Contraseña</span>
                    <i></i>
                </div>
                <div class="Links">
                    <a href="#">¿Olvidó su contraseña?</a>
                    <a href="Formulario-Sing In.php">Registrarse</a>
                </div>
                <input type="submit" value="Ingresar" name="submitt">
            </form>
        </div>

    </body>
</html>