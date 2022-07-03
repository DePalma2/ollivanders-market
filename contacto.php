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
</head>

<body>
    <div class="bg-form">
        <!--==================== CONTACTO ====================-->
        <div class="container-form">
            <form class="contact-form" action="contacto.php" method="POST">
                <span class="contact-form-title"><?php echo $lang['header_contacto']?></span>

                <!-- ERRORES -->
                <ul class="flex">
                    <?php require_once('assets/php/dashboard/helpers/helper_input.php') ?>
                    <?php require_once ('assets/php/funcionesContacto.php') ?>

                    <?php foreach ($errores as $error) : ?>
                    <li class="error"><?php echo $error ?></li>
                    <?php endforeach ?>
                </ul>

                <div class="container-inputs">
                    <div class="input-group">
                        <input required type="text" name="name" autocomplete="off" class="input"
                            value="<?php echo $name ?>">
                        <label class="user-label"><?php echo $lang['contacto_nombre']?></label>
                    </div>

                    <div class="input-group">
                        <input required type="text" name="email" autocomplete="off" class="input"
                            value="<?php echo $email ?>">
                        <label class="user-label">Email</label>
                    </div>

                    <div class="input-group">
                        <textarea required name="msg" autocomplete="off" class="input"></textarea>
                        <label class="user-label"><?php echo $lang['contacto_mensaje']?></label>
                    </div>
                </div>

                <div class="container-contact-form-btn">
                    <div class="wrap-contact-form-btn">
                        <div class="contact-form-bgbtn"></div>
                        <button name="submit" class="contact-form-btn"><?php echo $lang['contacto_btn']?></button>
                    </div>
                </div>

                <div class="return-index">
                    <span class="text">Para volver a la pagina principal haga
                        <a href="index.php" class="text">click aqui</a>
                    </span>
                </div>
            </form>
        </div>
    </div>
</body>

</html>