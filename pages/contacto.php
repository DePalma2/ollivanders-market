<?php
    require_once('../assets/php/funciones.php');

    $name = test_input($_POST['name'] ?? null);
    $email = test_input($_POST['email'] ?? null);
    $msg = test_input($_POST['msg'] ?? null);

    $errores = array();

    if (isset($_POST['submit'])) {

        //VALIDACION DEL NOMBRE
        if (empty($name)) {
            array_push($errores, 'Debe ingresar un nombre.');
        }

        //VALIDACION DEL EMAIL
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errores, 'Debe ingresar un correo electronico válido.');
        }

        //VALIDACION DEL TEXTAREA
        if (empty($msg)) {
            array_push($errores, 'Debe ingresar un mensaje.');
        }

        //SI NO HAY ERRORES ME REDIRECCIONA
        if (count($errores) == 0) {
            header('Location: contacto.php');
        }
    }
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../assets/img/logo.png " type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== FLAG ICON ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.2.0/css/flag-icons.min.css">

    <!--=============== JQUERY ===============-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/contacto.css">

    <!--=============== RESPONSIVE ===============-->
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <title>Olivander's Market</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header>
        <nav>
            <ul class="menu">
                <img src="../assets/img/logo.png" alt="Logo">
                <li class="logo">
                    <a href="../index.html">Olivander's</a>
                </li>
                <li class="item"><a href="../index.html">Inicio</a></li>
                <li class="item"><a href="../index.html#aboutUs">Acerca de Nosotros</a></li>
                <li class="item"><a href="../index.html#product">Productos</a></li>
                <li class="item"><a href="../index.html#new">Recien Llegado</a></li>
                <li class="item"><a href="../pages/contacto.php">Contacto</a></li>
                <li class="item button"><a href="./login/login.html">Iniciar Sesion</a></li>
                <li class="toggle"><span class="bars"></span></li>


                <div class="langButton">
                    <div class="switch_container_lang">
                        <div id="esLang" class="switch esLang active" onclick="cambiarEstado('esLang')">
                            <span class="fi fi-es"></span>
                        </div>
                        <div id="brLang" class="switch brLang" onclick="cambiarEstado('brLang')">
                            <span class="fi fi-br"></span>
                        </div>
                        <div id="usLang" class="switch usLang" onclick="cambiarEstado('usLang')">
                            <span class="fi fi-us"></span>
                        </div>
                        <div id="selector" class="selector"></div>
                    </div>
                </div>
            </ul>
        </nav>
    </header>

    <main class="main">
        <!--==================== CONTACTO ====================-->
        <div class="bg-contact" style="background-image: url('../assets/img/contacto/background.jpg');">
            <div class="container-contact">
                <div class="wrap-contact">
                    <form class="contact-form validate-form" action="contacto.php" method="POST">
                        <span class="contact-form-title">
                            Ponerse en Contacto
                        </span>
                        
                        <ul>
                        <?php foreach ($errores as $error) : ?>
                            <li class="error"><?php echo $error ?></li>
                        <?php endforeach ?>
                        </ul>

                        <div class="wrap-input validate-input">
                            <input class="input" type="text" name="name" placeholder=" " autocomplete="off" value="<?php echo $name ?>" required>
                            <span class="focus-input" data-placeholder="Nombre"></span>
                        </div>
                        <div class="wrap-input validate-input">
                            <input class="input" type="email" name="email" placeholder=" " autocomplete="off" value="<?php echo $email ?>" required>
                            <span class="focus-input" data-placeholder="Email"></span>
                        </div>
                        <div class="wrap-input validate-input">
                            <textarea class="input" name="msg" placeholder=" " autocomplete="off" value="<?php echo $msg ?>" required></textarea>
                            <span class="focus-input" data-placeholder="Mensaje"></span>
                        </div>
                        <div class="container-contact-form-btn">
                            <div class="wrap-contact-form-btn">
                                <div class="contact-form-bgbtn"></div>
                                <button type="submit" class="contact-form-btn">Envíar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__contenido">
                <a href="#" class="footer__logo">
                    <img src="../assets/img/logo.png" alt="logo" class="footer__logo-img">
                    Olivander's Market
                </a>

                <p class="footer__descripcion">Adentrate en el mundo de la <br> <b>Magia</b>.</p>

                <div class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram-alt'></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-twitter'></i>
                    </a>
                </div>
            </div>

            <div class="footer__contenido">
                <h3 class="footer__titulo">Acerca</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Acerca de nosotros</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Casas de Hogwarts</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Inscribete en Hogwarts</a>
                    </li>
                </ul>
            </div>

            <div class="footer__contenido">
                <h3 class="footer__titulo">Nuestros servicios</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Precios</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Descuentos</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Modo de envío</a>
                    </li>
                </ul>
            </div>

            <div class="footer__contenido">
                <h3 class="footer__titulo">Nuestra compañía</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Enterate de nuevas aventuras</a>
                    </li>
                </ul>
            </div>
        </div>

        <span class="footer__copy">&#169; Lucas De Palma, Tomas Ruiz y Lukas Otero. Todos los derechos reservados</span>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="../assets/js/scrollreveal.min.js"></script>

    <!--=============== BOTON LANG JS ===============-->
    <script src="../assets/js/botonLang.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="../assets/js/main.js"></script>
</body>

</html>