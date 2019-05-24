<?php
include_once('class.Database.php');

class Usuario
{
    public static function login($correo, $password)
    {
        $query = "SELECT * FROM tblUsuarios WHERE correo = '$correo' AND pass = '$password'";
        $resultado = Database::select($query)[0];

        if ($resultado['id'] > 0) {
            setcookie('idUsuario', $resultado['id'], time() + (60), '/');
            return TRUE;
        }

        return FALSE;
    }
}
