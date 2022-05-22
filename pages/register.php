<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../assets/img/logo.png " type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="../assets/css/contacto.css">

    <!--=============== RESPONSIVE ===============-->
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <title>Olivander's Market</title>
</head>

<body>
<div class="bg-form">
        <!--==================== REGISTER ====================-->
        <div class="container-form">
            <form class="contact-form" action="register.php" method="POST">
                <span class="contact-form-title">Register</span>

                <!-- ERRORES -->
                <ul class="flex">
                    <?php require_once ('../assets/php/funcionesRegister.php') ?>
                    <?php foreach ($erroresRegister  as $error) : ?>
                    <li class="error"><?php echo $error ?></li>
                    <?php endforeach ?>
                </ul>

                <div class="container-inputs">

                <div class="input-group">
                        <input required type="text" name="nameRegister" autocomplete="off" class="input"
                            value="<?php echo $nameRegister ?>">
                        <label class="user-label">Nombre</label>
                    </div>

                    <div class="input-group">
                        <input required type="email" name="emailRegister" autocomplete="off" class="input"
                            value="<?php echo $emailRegister  ?>">
                        <label class="user-label">Email</label>
                    </div>
                    
                    <div class="input-group">
                        <input required type="password" name="passwordRegister1" autocomplete="off" class="input"
                            value="<?php echo $passwordRegister1 ?>">
                        <label class="user-label">Contraseña</label>
                    </div>

                    <div class="input-group">
                        <input required type="password" name="passwordRegister2" autocomplete="off" class="input"
                            value="<?php echo $passwordRegister2 ?>">
                        <label class="user-label">Repetir contraseña</label>
                    </div>

                </div>

                <div class="container-contact-form-btn">
                    <div class="wrap-contact-form-btn">
                        <div class="contact-form-bgbtn"></div>
                        <button name="submit" class="contact-form-btn">Registrarse</button>
                    </div>
                </div>

                <div class="return-index">
                    <span class="text">Para volver a la pagina principal haga
                        <a href="../index.html" class="text">click aqui</a>
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
    <script src="../assets/js/login.js"></script>
</body>

</html>