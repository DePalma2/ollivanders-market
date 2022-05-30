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

    <title>Ollivander's Market</title>
</head>

<body>
    <div class="bg-form">
        <!--==================== CONTACTO ====================-->
        <div class="container-form">
            <form class="contact-form" action="contacto.php" method="POST">
                <span class="contact-form-title">Contacto</span>

                <!-- ERRORES -->
                <ul class="flex">
                    <?php require_once('../assets/php/dashboard/helpers/helper_input.php') ?>
                    <?php require_once ('../assets/php/funcionesContacto.php') ?>

                    <?php foreach ($errores as $error) : ?>
                    <li class="error"><?php echo $error ?></li>
                    <?php endforeach ?>
                </ul>

                <div class="container-inputs">
                    <div class="input-group">
                        <input required type="text" name="name" autocomplete="off" class="input"
                            value="<?php echo $name ?>">
                        <label class="user-label">Nombre</label>
                    </div>

                    <div class="input-group">
                        <input required type="text" name="email" autocomplete="off" class="input"
                            value="<?php echo $email ?>">
                        <label class="user-label">Email</label>
                    </div>

                    <div class="input-group">
                        <textarea required name="msg" autocomplete="off" class="input"></textarea>
                        <label class="user-label">Mensaje</label>
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
</body>

</html>