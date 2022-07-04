<?php

require_once('assets/php/lang.php');

$name = test_input($_POST['name'] ?? null);
$email = test_input($_POST['email'] ?? null);
$msg = test_input($_POST['msg'] ?? null);

$errores = array();

if (isset($_POST['submit'])) {

    //VALIDACION DEL NOMBRE
    if (strlen($name) < 3 || strlen($name) > 50 || !preg_match("/^[a-zA-Z ]*$/", $name) || empty($name)) {
        array_push($errores, $lang['contacto_error_nombre']);
    }

    //VALIDACION DEL EMAIL
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) < 5 || strlen($email) > 50 || empty($email)) {
        array_push($errores, $lang['contacto_error_email']);
    }

    //VALIDACION DEL MENSAJE
    if (strlen($msg) > 500 || empty($msg)) {
        array_push($errores, $lang['contacto_error_mensaje']);
    }

    //SI NO HAY ERRORES ENVIA EL CORREO
    if (count($errores) == 0) {
        $to = 'lukas.otero@davinci.edu.ar';
        $subject = 'Contacto desde la web';

        $message = <<<HTML
            <h1>$subject</h1>
            <p>De: $name / $email</p>
            <h2>Mensaje</h2>
            $msg
        HTML;

        $headers = "MIME-Version: 1.0 \r\n";
        $headers .= "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: $name <$email> \r\n";
        //$headers .= "Bcc: lucas.palma@davinci.edu.ar \r\n";
        //$headers .= "Bcc: tomas.ruiz@davinci.edu.ar \r\n";

        $rta = mail($to, $subject, $message, $headers);

        if ($rta) {
            header('Location: contacto.php');
        } else {
            array_push($errores, $lang['contacto_error_envio']);
        }
    }
}