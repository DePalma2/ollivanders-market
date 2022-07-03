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
        <!--==================== REGISTER ====================-->
        <div class="container-form">
            <form class="contact-form" action="register.php" method="POST">
                <span class="contact-form-title"><?php echo $lang['register_titulo']?></span>

                <!-- ERRORES -->
                <ul class="flex">
                    <?php require_once('assets/php/dashboard/helpers/helper_input.php') ?>
                    <?php require_once ('assets/php/funcionesRegister.php') ?>
                    <?php foreach ($erroresRegister  as $error) : ?>
                    <li class="error"><?php echo $error ?></li>
                    <?php endforeach ?>
                </ul>

                <div class="container-inputs">

                <div class="input-group">
                        <input required type="text" name="nameRegister" autocomplete="off" class="input"
                            value="<?php echo $nameRegister ?>">
                        <label class="user-label"><?php echo $lang['contacto_nombre']?></label>
                    </div>

                    <div class="input-group">
                        <input required type="email" name="emailRegister" autocomplete="off" class="input"
                            value="<?php echo $emailRegister  ?>">
                        <label class="user-label">Email</label>
                    </div>
                    
                    <div class="input-group">
                        <input required type="password" name="passwordRegister1" autocomplete="off" class="input"
                            value="<?php echo $passwordRegister1 ?>">
                        <label class="user-label"><?php echo $lang['login_password_1']?></label>
                    </div>

                    <div class="input-group">
                        <input required type="password" name="passwordRegister2" autocomplete="off" class="input"
                            value="<?php echo $passwordRegister2 ?>">
                        <label class="user-label"><?php echo $lang['register_password_2']?></label>
                    </div>

                </div>

                <div class="container-contact-form-btn">
                    <div class="wrap-contact-form-btn">
                        <div class="contact-form-bgbtn"></div>
                        <button name="submit" class="contact-form-btn"><?php echo $lang['register_btn']?></button>
                    </div>
                </div>

                <div class="return-index">
                    <span class="text">Para volver a la pagina principal haga
                        <a href="index.php" class="text">click aqui</a>
                    </span>
                    <br>
                    <span class="text">Si ya tiene una cuenta puede ingresar haciendo
                        <a href="login.php" class="text">click aqui</a>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/login.js"></script>
</body>

</html>