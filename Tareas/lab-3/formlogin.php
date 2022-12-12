<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
    <div class="border">
    <?php

        session_start();
        if(!empty($_SESSION['usuario_app'])){
            header("Location: fitroduccion.html");
        }

    ?>
        <h4>Login de usuario</h4>
        <form action="javascript:login()" id="form-login">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario"><br><br>
            <label for="password">Contraseña</label>
            <input type="text" name="password" id="password"><br><br>
            <input type="submit" value="INGRESAR" >
        </form>
    </div>
    <script src="main.js"></script>
</body>
</html>