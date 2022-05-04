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

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../assets/css/contacto.css">

    <!--=============== RESPONSIVE ===============-->
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <title>Olivander's Market</title>
</head>

<body>
    <div class="container-form">
        <!--==================== CONTACTO ====================-->
        <div class="container-contact">
            <div class="wrap-contact">
                <form class="contact-form" action="contacto.php" method="POST">
                    <span class="contact-form-title">
                        Ponerse en Contacto
                    </span>

                    <!-- ERRORES -->
                    <ul>
                        <?php require_once ('../assets/php/funcionesContacto.php') ?>

                        <?php foreach ($errores as $error) : ?>
                        <li class="error"><?php echo $error ?></li>
                        <?php endforeach ?>
                    </ul>

                    <div class="container-wraps">
                        <div class="wrap-input validate-input">
                            <input class="input" type="text" name="name" placeholder=" " autocomplete="off" required
                                value="<?php echo $name ?>">
                            <span class="focus-input" data-placeholder="Nombre"></span>
                        </div>

                        <div class="wrap-input validate-input">
                            <input class="input" type="email" name="email" placeholder=" " autocomplete="off" required
                                value="<?php echo $email ?>">
                            <span class="focus-input" data-placeholder="Email"></span>
                        </div>
                        <div class="wrap-input validate-input">
                            <textarea class="input" name="msg" placeholder=" " autocomplete="off" required></textarea>
                            <span class="focus-input" data-placeholder="Mensaje"></span>
                        </div>
                    </div>

                    <div class="container-contact-form-btn">
                        <div class="wrap-contact-form-btn">
                            <div class="contact-form-bgbtn"></div>
                            <button name="submit" class="contact-form-btn">Envíar</button>
                        </div>
                    </div>

                    <div class="return-index">
                        <span class="text">Para volver a la pagina principal haga
                            <a href="../index.html" class="text">click aqui</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>