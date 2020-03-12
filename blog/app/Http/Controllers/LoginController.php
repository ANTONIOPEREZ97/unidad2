<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $error = 'error_dato';


if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['pass'])){

    $error = 'dato_exito';

    //Guardar los datos recogidos en POST
    $nombre=($_POST['nombre']);
    $email=($_POST['email']);
    $pass=($_POST['pass']);

    //validacion de cada campo a nivel backend
    if(!is_string($nombre) || preg_match("/[0-9]+/",$nombre)){
        $error = 'nombre';
    }
    elseif(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    elseif(empty($pass) || strlen($pass)<4){
        $error='password';
    }

    // Validacion de usuarios
    if($nombre == 'administrador' && $pass == 'administrador'){
        header("Location:views/admin/admin.php");
    }

    elseif($pass == 'comprador' && $nombre == 'comprador'){
        header("Location:views/comprador/productos.php");
    }else{
        $error = 'sesion';
    }

}else{
    $error = 'error_dato';
}

if( $error != 'dato_exito'){
  header("Location:views/login.php?error=$error");
}
    }
}
