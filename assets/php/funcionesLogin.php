<?php

require_once('assets/php/lang.php');

//LOGIN
$emailLogin = test_input($_POST['emailLogin'] ?? null);
$passwordLogin = test_input($_POST['passwordLogin'] ?? null);

$erroresLogin = array();

if (isset($_POST['submit'])) {

    //VALIDACION DEL EMAIL
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) < 5 || strlen($email) > 50 || empty($email)) {
        array_push($errores, $lang['contacto_error_email']);
    }

    //VALIDACION DE LA CONTRASEÑA
    if (empty($passwordLogin) || strlen($passwordLogin) < 5 || strlen($passwordLogin) > 50) {
        array_push($erroresLogin, $lang['login_error_password']);
    }

    //VALIDACION DE ADMINISTRADOR
    if (count($erroresLogin) == 0) {
        header('Location: ../assets/php/dashboard/productos.php');
    }
}