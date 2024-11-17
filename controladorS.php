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
                    top: -90px
                }
            }
        </style>
    </head>
    <body>
        <?php
        
            $sqlConsul = $coon->query("SELECT * FROM singg WHERE nombres='$Nombre' or correo='$Email' ");

            if (!empty($_POST["submitt"])) {
                if (empty($_POST["nombres"]) or empty($_POST["correo"]) or empty($_POST["contraseña"]) ) {
                    echo '<div class="write-datos">LLENE TODOS LOS CAMPOS</div>';
                } else {
                    if ($coon->query($sql) === TRUE){
                        echo '<div class="send-soon">REGISTRO COMPLETADO EXITOSAMENTE, PUEDE INICIAR SESIÓN</div>';
                    }
                }
                if ($datos=$sqlConsul->fetch_object()) {
                    echo '<div class="write-different-number">EL NOMBRE DE USUARIO Y/O CORREO YA ESTÁ EN USO</div>';
                } 
            }


        ?>
    </body>
</html>
