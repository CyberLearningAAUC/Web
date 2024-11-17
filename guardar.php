<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login in</title>
</head>

<style>

</style>

<body>

    <div class="php">
        <?php
        // Configuración de la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "database";

        // Crear la conexión 
        $coon = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión 
        if ($coon->connect_error) {
            die("Error de conexión: " . $coon -conect_error);
        }

        // Obtener los datos del formulario 
        $Nombre = $_POST['nombres'];
        $Password1  = $_POST['contraseña'];


        $sql = "INSERT INTO baseDT(`nombres`, `contraseña`) 
        VALUES('$Nombre', '$Password1')";

        if ($coon->query($sql) === TRUE) {
            echo "Datos enviados";
        } else {
            echo "Error: " . $sql . "<br>" . $coon->error;
        }

        $coon->close();
        ?>
    </div>

    <div class="goback">
        <a href="index.html">
            <button>
                Volver al inicio
            </button>
        </a>
    </div>
</body>
</html>
