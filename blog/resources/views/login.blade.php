<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

    <div class="contentlogin">

    <?php
    if(isset($_GET['error'])):
        $error = $_GET['error'];
        if($error == 'dato_exito'):
            echo "<p><strong style='color:green'>Se inicio sesión correctamente</strong></p>";
        endif;
        if($error == 'error_dato'):
            echo "<p><strong style='color:red'>Datos invalidos rellene correctamente el formulario</strong></p>";
        endif;
        if($error == 'nombre'):
            echo "<p><strong style='color:red'>Ingresa un nombre correcto</strong></p>";
        endif;
        if($error == 'email'):
            echo "<p><strong style='color:red'>Ingresa un email valido</strong></p>";
        endif;
        if($error == 'password'):
            echo "<p><strong style='color:red'>Ingresa una contraseña valida</strong></p>";
        endif;
        if($error == 'sesion'){
            echo "<p><strong style='color:red'>No eres un usuario registrado</strong></p>";
        }
    endif;
    ?>
        <h1>Iniciar sesión</h1>


        <img class="avatar" alt="" src="../img/logo-2.png" >

    <form action="{{ route('login')}}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" placeholder="Ingresa tu nombre" autofocus="autofocus" required="required" ettern="[a-zA-Z ]+">

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Ingresa tu email" required="required">

        <label for="pass">Contraseña</label>
        <input type="password" name="pass" placeholder="password" minlength="4">

        <input type="submit" value="Iniciar sesión">

    </form>
    </div>

</body>
</html>
