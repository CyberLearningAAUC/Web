<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Principal</title>
    <script src="Index.js"></script>
    <link rel="stylesheet" href="Principal1.css">
    <link rel="icon" href="CyberLearning.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1&display=swap" rel="stylesheet">
</head>
<body onload="PlayAudio()">
    <?php
        session_start();
        $Nombre = $_SESSION['nombres'];

        if (!isset($Nombre)) {
            header("location: Formulario-Login.php");
        } else {
        }
    ?>
    <div id="GOBACK"></div>
    <div class="Mother-menu" id="LateralBar">
        <div class="div-logo div-fast-access">
            <a href="index.html">
                <img src="LOGO MENÚ MADRE.png" class="image-menu-logo">
            </a>
            <button class="mother-menu-fast-access-2">
                Acceso rápido
            </button>
            <div class="list-fast-access">
                <a href="HTML.html"><img src="Viñeta.png" class="Viñeta">  Html</a>
                <a href="CSS.html"><img src="Viñeta.png" class="Viñeta">  Css</a>
                <a href="JAVASCRIPT.html"><img src="Viñeta.png" class="Viñeta">  JavaScript</a>
                <a href="PHP.html"><img src="Viñeta.png" class="Viñeta">  Php</a>
                <a href="Principal.php"><img src="Viñeta.png" class="Viñeta">  Principal</a>
            </div>
            <div class="div-music">
                <button class="mother-menu-music">
                    Música
                </button>
                <div class="controls">
                    <audio id="Audio" controls loop>
                        <source src="s1.wav" type="audio/wav">
                    </audio>
                    <audio id="Audio" controls loop>
                        <source src="s2.wav" type="audio/wav">
                    </audio>
                    <audio id="Audio" controls loop>
                        <source src="s3.wav" type="audio/wav">
                    </audio>
                </div>
            </div> 
            <a href='Salir.php'>
                <div id="SALIRPT" class="Exit">
                    Cerrar sesión
                </div>
            </a>
        </div>
    </div>
    <div class="Menú">
            <img src="CyberLearning Lateral.png" id="Log-Menú" onclick="Menú()">
            <div class="mother-menu-fast-access" onclick="toggleOptions()">
                <button id="Fast-Access" onclick="toggleOptions()">
                    Acceso rápido
                </button>
                <img id="Flecha-List" src="VOLVERWOF.png">
            </div>
            <div class="Search-Log-Div">
                <img src="Search-Log.png" class="Search-Log-Img">
                <input type="text" id="Search-1" placeholder="Busca uno de nuestros cursos"/>
            </div>

            <div class="User" onclick="TOE1()">

                <div class="username">
                    <?php
                        echo "<div class='username-1'>$Nombre</div>";
                    ?>
                </div>
                <div class="User-log"> 
                    <img src="User.png" class="User-img">
                </div>

            </div>

        </div>
    <div class="First-Presentation" onclick="HideOptions(); HideOptionsMenú()">

        <div id="options" class="element_options">
            <a href="HTML.html">Html</a>
            <a href="CSS.html">Css</a>
            <a href="JAVASCRIPT.html">JavaScript</a>
            <a href="#" id="Php-FS">Php</a>
        </div>

        <div class="presentation" onclick="HideOptions(); HideOptionsMenú()">
            <div class="First-Text-P">
                Bienvenido a <span class="CL-Blue">CyberLearning,</span> una plataforma de aprendizaje Online
            </div>
            <center>
                <div class="Search-Bar">
                    <img src="Search-Log.png" class="Search-Log-Img">
                    <input type="text" id="Search-2" placeholder="Busca uno de nuestros cursos"/>
                </div>
                <div class="Cursos-Conjunto">
                    <a href="HTML.html">
                    <button class="HTML-Con Len-Con">
                        <img src="HTML Log.png" class="Log-HTML">
                    </button>
                    </a>
                    <a href="CSS.html">
                    <button class="CSS-Con Len-Con">
                        <img src="CSS Log.png" class="Log-CSS">
                    </button>
                    </a>
                    <a href="JAVASCRIPT.html">
                    <button class="JavaScript-Con Len-Con-1">
                        <img src="JavaScript Log.png" class="Log-JAVASCRIPT">
                    </button>
                    </a>
                    <button class="PHP-Con Len-Con-1">
                        <img src="PHP Log.png" class="Log-PHP">
                    </button>
                </div>
            <center>
        </div>
    </div>
    <div class="Second-Presentation" onclick="HideOptions(); HideOptionsMenú()">
        <div class="tittle">
            <h1>Aprenda a <span class="CL-Blue">programar</span></h1>
        </div>
        <div class="Text-from-tittle">
            En CyberLearning, le ofrecemos cursos para que domine cada lenguaje de desarrollo
            web de forma <span class="CL-Blue">gratuita.</span> Puede comenzar a aprender a su ritmo, sin la 
            presión de entregar trabajos <span class="CL-Blue">¡Tómese su tiempo!</span><br>
            <div class="First-List">
                <span class="Lan-FA">JavaScript<img src="Viñeta.png" class="Point"></span>
                <span class="Lan-FA">Html<img src="Viñeta.png" class="Point"></span>
                <span class="Lan-FA">Css<img src="Viñeta.png" class="Point"></span>
                <span class="Lan-FAON">Php<img src="Viñeta.png" class="Point"></span>
            </div>
            <a href="#Last">
                <button class="Comenzar">
                    Comenzar
                </button>
            </a>
        </div>
        <img src="Programing2.png" class="Programing-Img">
        <div id="Last"></div>
    </div>
    <div class="Tercer-Presentation" onclick="HideOptions(); HideOptionsMenú()">
        <center><div class="Tittle-2">Comienza a aprender</div><br><div class="tittle-3">Cursos Principales</div></center>
        <center>
        <article class="Lenguajes">
            <a href="HTML.html">
                <div class="HTML lenguajes">
                    <h1>
                        Html
                        <div class="DecorationHTML"></div>
                    </h1>
                    <p>
                        HTML es el lenguaje básico de construcción de páginas web. Sirve para estructurar el contenido, como los 
                        textos, imágenes y enlaces, organizándolos para que se vean en un navegador.
                    </p>
                </div>
            </a>
            <a href="CSS.html">
                <div class="CSS lenguajes">
                    <h1>
                        Css
                        <div class="DecorationCSS"></div>
                    </h1>
                    <p>
                        CSS se utiliza para darle estilo a una página web. Permite cambiar colores, fuentes, tamaños y diseños para 
                        que el contenido se vea atractivo y ordenado.
                    </p>
                </div>
            </a>
            <a href="JAVASCRIPT.html">
                <div class="JAVASCRIPT lenguajes">
                    <h1>
                        JavaScript
                        <div class="DecorationJAVA"></div>
                    </h1>
                    <p>
                        JavaScript es un lenguaje de programación que da vida a la web. Permite agregar interactividad, como botones 
                        que reaccionan al hacer clic o animaciones que se mueven en la pantalla.
                    </p>
                </div>
            </a>

            <a>
                <div class="PHP lenguajes">
                    <div class="coming-soon"><center>Coming Soon</center></div>
                    <h1>
                        Php
                        <div class="DecorationPHP"></div>
                    </h1>
                    <p>
                        PHP es un lenguaje de programación que se usa en el servidor para crear páginas web dinámicas. Con PHP, una página 
                        web puede mostrar contenido personalizado según las necesidades del usuario.
                    </p>
                </div>
            </a>
        </article>
        </center>
    </div>
    <footer onclick="HideOptions()">
        <section>
            <a href="#GOBACK">Volver al inicio</a><br><br>
        </section>
        <div class="ForCenter">
            <div class="footersection3 FF">
                <h3>Redacción:</h3>
                <p>
                    Ana Isabel Restrepo Espinosa<br>
                    Carlos Fernando Chavarría Chavarría<br>
                    Orlando Manuel Deulofeuth Cuello
                </p>
            </div>
            <div class="footersection4 FF">
                <h3>Lenguajes usados:</h3>
                <p>
                    HTML<br>
                    CSS<br>
                    JavaScript
                </p>
            </div>
            <div class="footersection1 FF">
                <h3>Diseño:</h3>
                <p>
                    Orlando Manuel Deulofeuth Cuello
                </p>
            </div>
            <div class="footersection2 FF">
                <h3>Construcción del código:</h3>
                <p>
                    Orlando Manuel Deulofeuth Cuello
                </p>
            </div>
        </div>
        <div class="SenaPro">
            <span>Proyecto del</span>
            <img src="FOOTER logo.png" width="50px" id="SENALog" alt="SENA Logo">
        </div>
        <div class="CyberLearning">
            <span>CyberLearning™</span>
            <img src="CyberLearning JustLog.png" width="50px" id="CyberLearningLog" alt="JustBetweenUs Logo">
        </div>
        <div class="MoreInfoAboutUs"><a href="Principal Or.html">Centro de ayuda</a></div>
        <p id="Copyright">
            © 2024 CyberLearning. All rights reserved
        </p>
    </footer>
</body>
</html>