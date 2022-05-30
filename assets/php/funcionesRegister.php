<?php

//REGISTER
$nameRegister = test_input($_POST['nameRegister'] ?? null);
$emailRegister = test_input($_POST['emailRegister'] ?? null);
$passwordRegister1 = test_input($_POST['passwordRegister1'] ?? null);
$passwordRegister2 = test_input($_POST['passwordRegister2'] ?? null);

$erroresRegister = array();

if (isset($_POST['submit'])) {

    //VALIDACION DEL NOMBRE
    if (empty($nameRegister)) {
        array_push($erroresRegister, 'Debe ingresar un nombre.');
    }

    //VALIDACION DEL EMAIL
    if (!filter_var($emailRegister, FILTER_VALIDATE_EMAIL)) {
        array_push($erroresRegister, 'Debe ingresar un correo electronico válido.');
    }

    //VALIDACION DE LA CONTRASEÑA 1
    if (empty($passwordRegister1)) {
        array_push($erroresRegister, 'Debe ingresar una contraseña.');
    }

    //VALIDACION DE LA CONTRASEÑA 2
    if (empty($passwordRegister2)) {
        array_push($erroresRegister, 'Debe ingresar una contraseña.');
    }

    //VALIDACION DE CONTRASEÑAS
    if ($passwordRegister1 != $passwordRegister2) {
        array_push($erroresRegister, 'Debe ingresar contraseñas iguales.');
    }

    //SI NO HAY ERRORES ME REDIRECCIONA
    if (count($erroresRegister) == 0) {
        header('Location: register.php');
    }
}