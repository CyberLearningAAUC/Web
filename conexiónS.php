

<?php
        // Configuración de la conexión a la base de datos
        $servername = "bqlhak8mcqgqahqkabgh-mysql.services.clever-cloud.com";
        $username = "uuyefzreobfuk5nj";
        $password = "xHWIV3hZklNeBkToDC0M";
        $dbname = "bqlhak8mcqgqahqkabgh";

        // Crear la conexión 
        $coon = new mysqli($servername, $username, $password, $dbname);
        $coon->set_charset("utf8");

        if ($coon->connect_error) {
                die("Error de conexión: " . $coon -conect_error);
        }

        // Obtener los datos del formulario 
        $Nombre = $_POST['nombres'];
        $Email = $_POST['correo'];
        $Password = $_POST['contraseña'];

        $sql = "INSERT INTO singg(`nombres`, `correo`, `contraseña`) 
        VALUES('$Nombre', ' $Email', '$Password')";


?>
