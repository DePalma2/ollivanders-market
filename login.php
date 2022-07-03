<?php require_once('assets/php/lang.php'); ?>

<!DOCTYPE html>
<html lang="<?php $idioma ?>">

<head>
    <!--=============== HEAD DEFAULT ===============-->
    <?php require_once('assets/php/dashboard/views/_head.php'); ?>

    <!--=============== ICONS ===============-->
    <?php require_once('assets/php/dashboard/views/_icons.php'); ?>

    <!--=============== CSS ===============-->
   <?php require_once('assets/php/dashboard/views/_cssContacto.php'); ?>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
</head>

<body>
<div class="bg-form">
        <!--==================== LOGIN ====================-->
        <div class="container-form">
            <form class="contact-form" action="login.php" method="POST">
                <span class="contact-form-title"><?php echo $lang['header_iniciarSesion']?></span>

                <!-- ERRORES -->
                <ul class="flex">
                    <?php require_once('assets/php/dashboard/helpers/helper_input.php') ?>
                    <?php require_once ('assets/php/funcionesLogin.php') ?>
                    <?php foreach ($erroresLogin as $error) : ?>
                    <li class="error"><?php echo $error ?></li>
                    <?php endforeach ?>
                </ul>

                <div class="container-inputs">
                    <div class="input-group">
                        <input required type="email" name="emailLogin" autocomplete="off" class="input"
                            value="<?php echo $emailLogin ?>">
                        <label class="user-label">Email</label>
                    </div>

                    <div class="input-group">
                        <input required type="password" name="passwordLogin" autocomplete="off" class="input"
                            value="<?php echo $passwordLogin?>">
                        <label class="user-label"><?php echo $lang['login_password_1']?></label>
                    </div>

                </div>

                <div class="container-contact-form-btn">
                    <div class="wrap-contact-form-btn">
                        <div class="contact-form-bgbtn"></div>
                        <button name="submit" class="contact-form-btn"><?php echo $lang['login_btn']?></button>
                    </div>
                </div>

                <div class="return-index">
                    <span class="text">Para volver a la pagina principal haga
                        <a href="index.php" class="text">click aqui</a>
                    </span>
                    <br>
                    <span class="text">Si no tiene cuenta puede registrarse haciendo
                        <a href="register.php" class="text">click aqui</a>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/login.js"></script>
</body>

</html>