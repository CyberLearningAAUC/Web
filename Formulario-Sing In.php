<!DOCTYPE html>
<html>
    <head>
        <title>
            Registrarse
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="el_css_azul2.css">
        <link rel="icon" href="CyberLearning.ico">
    </head>
    <body>
        <div class="FSCROLL" id="GOBACK"></div>
        <?php
            ini_set('display_errors', 0);  // No muestra errores
            include("conexiónS.php");
            include("controladorS.php");
        ?>  
        <div class="box">
            <form method="post" action="">
                <h2>Registrarse</h2>
                <div class="inputBox">
                    <input type="text" name="nombres" maxlength="32" required>
                    <span>Nombre de usuario</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="email" name="correo" required>
                    <span>Correo</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="contraseña"required>
                    <span>Contraseña</span>
                    <i></i>
                </div>
                <div class="Links">
                    <a href="Formulario-Login.php">Iniciar sesión</a>
                </div>
                <input type="submit" value="Registro" name="submitt">
            </form>
        </div>
    </body>
</html>