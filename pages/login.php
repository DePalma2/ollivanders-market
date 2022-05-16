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
    <link rel="stylesheet" href="../assets/css/login.css">

    <title>Olivander's Market</title>
</head>

<body>
    <div class="container-form-lg-rg">
        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Iniciar Sesion</span>

                    <!-- ERRORES -->
                    <ul class="flex">
                        <?php require_once ('../assets/php/funcionesLogin.php') ?>

                        <?php foreach ($erroresLogin as $error) : ?>
                        <li class="error"><?php echo $error ?></li>
                        <?php endforeach ?>
                    </ul>

                    <!-- LOGIN FORM -->
                    <form action="login.php" method="POST">
                        <div class="input-field">
                            <input required type="email" name="emailLogin" placeholder="Ingresa tu email"
                                value="<?php echo $emailLogin ?>">
                        </div>
                        <div class="input-field">
                            <input required type="password" class="password" name="passwordLogin"
                                placeholder="Ingresa tu contraseña">
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Recordarme</label>
                            </div>
                            <a href="#" class="text">Olvidaste tu contraseña?</a>
                        </div>
                        <div class="input-field button">
                            <input name="submit1" type="button" value="Ingresar">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">No tienes una cuenta
                            <a href="#" class="text signup-link">Registrate aqui</a>
                        </span>
                        <br>
                        <span class="text">Para volver a la pagina principal haga
                            <a href="../index.html" class="text signup-link">click aqui</a>
                        </span>
                    </div>
                </div>

                <!-- REGISTRO FORM -->
                <div class="form signup">
                    <span class="title">Registro</span>

                    <!-- ERRORES -->
                    <ul class="flex">
                        <?php foreach ($erroresRegister as $error) : ?>
                        <li class="error"><?php echo $error ?></li>
                        <?php endforeach ?>
                    </ul>

                    <form action="#">
                        <div class="input-field">
                            <input required type="text" name="nameRegister" placeholder="Ingresa tu nombre"
                                value="<?php echo $nameRegister ?>">
                        </div>
                        <div class="input-field">
                            <input required type="email" name="emailRegister" placeholder="Ingresa tu email"
                                value="<?php echo $emailRegister ?>">

                        </div>
                        <div class="input-field">
                            <input required type="password" class="password" name="passwordRegister1"
                                placeholder="Ingresa tu contraseña">
                            <i class="uil uil-lock icon"></i>
                        </div>
                        <div class="input-field">
                            <input required type="password" class="password" name="passwordRegister2"
                                placeholder="Confirma tu contraseña">
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="sigCheck">
                                <label for="sigCheck" class="text">Recordarme</label>
                            </div>
                        </div>

                        <div class="input-field button">
                            <input type="button" name="submit2" value="Registrarse">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Ya tenes una cuenta?
                            <a href="#" class="text login-link">Ingresa sesion</a>
                        </span>
                        <br>
                        <span class="text">Para volver a la pagina principal haga
                            <a href="../index.html" class="text signup-link">click aqui</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=============== MAIN JS ===============-->
    <script src="../assets/js/login.js"></script>
</body>

</html>