<?php require_once('assets/php/lang.php'); ?>

<!DOCTYPE html>
<html lang="<?php $idioma ?>">

<head>
    <!--=============== HEAD DEFAULT ===============-->
    <?php require_once('assets/php/dashboard/views/_head.php'); ?>

    <!--=============== ICONS ===============-->
    <?php require_once('assets/php/dashboard/views/_icons.php'); ?>

    <!--=============== BOOTSTRAP ===============-->
    <?php require_once('assets/php/dashboard/views/_bootstrap.php'); ?>

    <!--=============== CSS ===============-->
    <?php require_once('assets/php/dashboard/views/_cssContacto.php'); ?>
</head>

<body>
    <div class="bg-form">
        <div class="container-form">
            <form class="contact-form px-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
            <span class="contact-form-title"><?php echo $lang['header_contacto']?></span>

                <ul class="flex">
                    <?php require_once('assets/php/dashboard/helpers/helper_input.php') ?>
                    <?php require_once ('assets/php/funcionesContacto.php') ?>

                    <?php foreach ($errores as $error) : ?>
                    <li class="error"><?php echo $error ?></li>
                    <?php endforeach ?>
                </ul>

                <div class="container-inputs">
                    <div class="col-sm-12 mb-3">
                        <label class="form-label"><?php echo $lang['contacto_nombre']?></label>
                        <input required type="text" name="name" autocomplete="off" class="form-control"
                            value="<?php echo $name ?>">
                    </div>

                    <div class="col-sm-12 mb-3">
                        <label class="form-label">Email</label>
                        <input required type="text" name="email" autocomplete="off" class="form-control" placeholder="<?php echo $lang['contacto_placeholder_email']?>"
                            value="<?php echo $email ?>">
                    </div>

                    <div class="col-sm-12 mb-3">
                        <label class="form-label"><?php echo $lang['contacto_mensaje']?></label>
                        <textarea required name="msg" autocomplete="off" class="form-control" placeholder="<?php echo $lang['contacto_placeholder_mensaje']?>"></textarea>
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