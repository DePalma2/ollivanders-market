<?php

$name = test_input($_POST['name'] ?? null);
$email = test_input($_POST['email'] ?? null);
$msg = test_input($_POST['msg'] ?? null);

$errores = array();

if (isset($_POST['submit'])) {

    //VALIDACION DEL NOMBRE
    if (empty($name)) {
        array_push($errores, 'Debe ingresar un nombre.');
    }

    //VALIDACION DEL EMAIL
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errores, 'Debe ingresar un correo electronico válido.');
    }

    //VALIDACION DEL MENSAJE
    if (empty($msg)) {
        array_push($errores, 'Debe ingresar un mensaje.');
    }

    //SI NO HAY ERRORES ME REDIRECCIONA
    if (count($errores) == 0) {
        header('Location: contacto.php');
    }
}