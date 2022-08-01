<?php require_once('assets/php/lang.php'); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!--=============== HEAD DEFAULT ===============-->
    <?php require_once('assets/php/dashboard/views/_head.php'); ?>

    <!--=============== ICONS ===============-->
    <?php require_once('assets/php/dashboard/views/_icons.php'); ?>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== JQUERY ===============-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <!--=============== CSS LOCAL ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!--=============== RESPONSIVE ===============-->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
    <!--==================== HEADER ====================-->
    <header>
        <nav class="flex-column">
            <ul class="container-logo">
                <li class="logo flex"><img src="assets/img/varios/logo.png"></li>
                <li class="text-logo"><a href="index.php">Ollivander's</a></li>
            </ul>

            <!-- BOTON LANG -->
            <div class="card">
                <ul class="langButton">
                    <li id="btnEs"><a href="?lang=es"><span class="fi fi-es"></span></a></li>
                    <li id="btnPt"><a href="?lang=pt"><span class="fi fi-pt"></span></a></li>
                    <li id="btnEn"><a href="?lang=en"><span class="fi fi-us"></span></a></li>
                </ul>
            </div>

            <a href="login.php" class="d-none"><button
                    class="btn-primary"><?php echo $lang['header_iniciarSesion']?></button></a>
            <div class="btn-hamburguesa">
                <button type="button" class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
            </div>

            <ul class="container-btn-hamburguesa">
                <li class="item btn-secondary"><a href="index.php"><?php echo $lang['header_inicio']?></a></li>
                <li class="item btn-secondary"><a href="index.php"><?php echo $lang['header_nosotros']?></a></li>
                <li class="item btn-secondary"><a href="#productos_home.php"><?php echo $lang['header_productos']?></a>
                </li>
                <li class="item btn-secondary"><a href="contacto.php"><?php echo $lang['header_contacto']?></a></li>
                <a href="login.php" class="d-block"><button
                        class="item btn-primary"><?php echo $lang['header_iniciarSesion']?></button></a>
            </ul>
        </nav>
    </header>

    <!-- Filtros -->

    <div class="container-filtro">
        <div class="categoria-filtro">
            <div class="container">
                <div class="title">
                    <h2 class="section__titulo"><?php echo $lang['productos_titulo']?></h2>
                </div>
                <div class="main-filtro">
                    <span class="text-filtro"><button type="button" class="filtro-btn " id="todos">Todos</button></span>
                    <span class="text-filtro"><button type="button" class="filtro-btn"
                            id="varitas">Varitas</button></span>
                    <span class="text-filtro"><button type="button" class="filtro-btn"
                            id="libros">libros</button></span>
                    <span class="text-filtro"><button type="button" class="filtro-btn"
                            id="accesorios">Accesorios</button></span>
                    <span class="text-filtro"><button type="button" class="filtro-btn"
                            id="tunicas">Tunicas</button></span>
                </div>
            </div>
        </div>
    </div>




    <!-- Productos -->

    <section class="section" id="product">
        <div class="container flex">

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/ronWeasley.png" class="product__img">
                <h3 class="product__titulo">Ron Weasley</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/voldemort.png" class="product__img">
                <h3 class="product__titulo">Voldemort</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/nicolasFlamel.png" class="product__img">
                <h3 class="product__titulo">Nicolas Flamel</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/narcisaMalfoy.png" class="product__img">
                <h3 class="product__titulo">Narcisa Malfoy</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/harryPotter.png" class="product__img">
                <h3 class="product__titulo">Harry Potter</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido varitas todos">
                <img src="assets/img/varitas/sauco.png" class="product__img">
                <h3 class="product__titulo">Sauco</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$59.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido accesorios todos">
                <img src="assets/img/funkos/funkoDumbledore.png" class="product__img">
                <h3 class="product__titulo">Dumbledore</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$29.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido accesorios todos">
                <img src="assets/img/funkos/funkoEspectroPatronus.png" class="product__img">
                <h3 class="product__titulo">Espectro Patronus</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$29.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido accesorios todos">
                <img src="assets/img/funkos/funkoHarryPotter.png" class="product__img">
                <h3 class="product__titulo">Harry Potter</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$29.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido libros todos">
                <img src="assets/img/libros/elMisterioDelPrincipe.png" class="product__img">
                <h3 class="product__titulo">El Misterio Del Principe</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$39.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido libros todos">
                <img src="assets/img/libros/laOrdenDelFenix.png" class="product__img">
                <h3 class="product__titulo">La Orden Del Fenix</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$39.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido libros todos">
                <img src="assets/img/libros/sagaCompleta.png" class="product__img">
                <h3 class="product__titulo">Saga Completa de Libros</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$39.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido tunicas todos">
                <img src="assets/img/tunicas/tunicaGryffindor.png" class="product__img">
                <h3 class="product__titulo">Tunica Gryffindor</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$14.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido tunicas todos">
                <img src="assets/img/tunicas/tunicaRavenclaw.png" class="product__img">
                <h3 class="product__titulo">Tunica Ravenclaw</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$14.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>

            <div class="product__contenido tunicas todos">
                <img src="assets/img/tunicas/tunicaSlytherin.png" class="product__img">
                <h3 class="product__titulo">Tunica Slytherin</h3>
                <span class="product__subtitulo"><?php echo $lang['productos_subtitulo']?></span>
                <span class="product__precio">$14.99</span>
                <button class="btn product__btn">
                    <i class="bx bx-cart-alt product__icon"></i>
                </button>
            </div>


        </div>
    </section>
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/filtro.js"></script>
</body>

</html>