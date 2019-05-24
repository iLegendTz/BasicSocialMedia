<?php
include_once('../clases/class.Usuario.php');

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'login':
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo (Usuario::login($email, $password));
            break;
    }
}
