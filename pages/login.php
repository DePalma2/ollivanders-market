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

                    <!-- LOGIN FORM -->
                    <form action="#">
                        <div class="input-field">
                            <input type="text" placeholder="Ingresa tu email" required>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Ingresa tu contraseña" required>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Recordarme</label>
                            </div>

                            <a href="#" class="text">Olvidaste tu contraseña?</a>
                        </div>

                        <div class="input-field button">
                            <input type="button" value="Ingresar">
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

                    <form action="#">
                        <div class="input-field">
                            <input type="text" placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Ingresa tu email" required>

                        </div>
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Ingresa tu contraseña" required>
                            <i class="uil uil-lock icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Confirma tu contraseña" required>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="sigCheck">
                                <label for="sigCheck" class="text">Recordarme</label>
                            </div>
                        </div>

                        <div class="input-field button">
                            <input type="button" value="Registrarse">
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