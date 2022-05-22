<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

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

    //SI NO HAY ERRORES ME REDIRECCIONA
    if (count($erroresLogin) == 0) {
        header('Location: login.php');
    }
}