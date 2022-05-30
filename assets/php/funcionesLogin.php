<?php

$flag = false;

//LOGIN
$emailLogin = test_input($_POST['emailLogin'] ?? null);
$passwordLogin = test_input($_POST['passwordLogin'] ?? null);

$erroresLogin = array();

if (isset($_POST['submit'])) {

    //VALIDACION DEL EMAIL
    if (!filter_var($emailLogin, FILTER_VALIDATE_EMAIL)) {
        array_push($erroresLogin, 'Debe ingresar un correo electronico válido.');
    }

    //VALIDACION DE LA CONTRASEÑA
    if (empty($passwordLogin)) {
        array_push($erroresLogin, 'Debe ingresar una contraseña.');
    }

    //VALIDACION DE ADMINISTRADOR
    if ($emailLogin === 'admin@admin.com' && $passwordLogin === 'admin') {
        header('Location: ../assets/php/dashboard/productos.php');
        $flag = true;
    }

    //SI NO HAY ERRORES ME REDIRECCIONA
    if (count($erroresLogin) == 0 && $flag == false) {
        header('Location: login.php');
    }
}