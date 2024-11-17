<html>
    <head>
        <style>
            body {
                display: flex;
                align-items: center;
                flex-direction: column;
            }

            .write-datos {
                background: rgba(223, 25, 10, 0.337);
                width: 200px;
                padding: 15px;
                border-radius: 6px;
                margin: 0 auto;
                position: absolute;
                animation: down 5s ease forwards;
                z-index: 100; 
                display: flex;
                align-items: center;
                flex-direction: column;
                font-weight: bold;
                text-align: center;

            }

            .send-soon {
                background: rgba(10, 223, 124, 0.337);
                width: 350px;
                padding: 15px;
                border-radius: 6px;
                margin: 0 auto;
                position: absolute;
                animation: down 5s ease forwards;
                z-index: 100; 
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                font-weight: bold;
                text-align: center;
            }

            .write-different-number{
                background: rgba(223, 25, 10, 0.337);
                width: 350px;
                padding: 15px;
                border-radius: 6px;
                margin: 0 auto;
                position: absolute;
                animation: down 5s ease forwards;
                z-index: 100; 
                display: flex;
                align-items: center;
                flex-direction: column;
                font-weight: bold;
                text-align: center;
            }

            .incorrect-datos {
                background: rgba(223, 25, 10, 0.337);
                width: 320px;
                padding: 15px;
                border-radius: 6px;
                margin: 0 auto;
                position: absolute;
                animation: down 5s ease forwards;
                z-index: 100; 
                display: flex;
                align-items: center;
                flex-direction: column;
                font-weight: bold;
                text-align: center;
            }

            @keyframes down {
                0% {
                    top: -60px
                }

                10% {
                    top: 38px
                }

                17% {
                    top: 35px;
                }

                25% {
                    top: 35px;                
                }

                50% {
                    top: 35px;
                }

                75% {
                    top: 35px;
                }

                83% {
                    top: 35px;
                }

                90% {
                    top: 38px
                }

                100% {
                    top: -60px
                }
            }
        </style>
    </head>
    <body>
        <?php

            require 'conexión.php';

            session_start();
        
            $sqlConsul = $coon->query("SELECT * FROM singg WHERE nombres='$Nombre' and contraseña='$Password' ");

            if (!empty($_POST["submitt"])) {
                if (empty($_POST["nombres"]) or empty($_POST["contraseña"]) ) {
                    echo '<div class="write-datos">LLENE TODOS LOS CAMPOS</div>';
                } else {
                    if ($datos=$sqlConsul->fetch_object()) {
                        $_SESSION['nombres'] = $Nombre;
                        header("location:Principal.php");
                    } else {
                        echo '<div class="incorrect-datos">USUARIO Y/O CONTRASEÑA INCORRECTOS</div>';
                    }
                }
            }


        ?>
    </body>
</html>
