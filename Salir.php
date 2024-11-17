<?php

session_start();

session_destroy();

header("location:Formulario-Login.php");
exit();

?>