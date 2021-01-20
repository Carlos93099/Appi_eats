<?php
    session_start();

    include "config/config.php";

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
</head>
<body>
    <img src="logo.png" alt="logo" width="200px" height="200px" align="center" class="logo">
    <form action="action/login.php" method="post">
        <p>Ingresa tu correo:</p>
        <span>👉<input type="text" name="correo" id="correo"></span>
        <p class="parrafoa">Ingresa tu contraseña:</p>
        <span>👉<input type="text" name="password" id="password"></span>
        <a href="">👉<button class="botona">Iniciar sesión</button></a> 
        <?php
          $invalid=sha1(md5("contrasena y email invalido"));
          if (isset($_GET['invalid']) && $_GET['invalid']==$invalid) {
              echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
                  <strong>Error!</strong> Contraseña o correo Electrónico invalido
                  </div>";
          }
      ?>
    </form>
</body>
</html>

<style>
    body {
        display: flex;
        justify-content: center;
        background-image: url(fondo.png);
        background-size: 100% 95%;
        background-repeat: no-repeat;
    }

    .logo {
        display: block;
        position: absolute;
        top: 60px;
    }

    form {
        display: flex;
        position:relative;
        flex-direction: column;
        align-items: center;
        margin-top: 450px;
    }

    p {
        font-size: 25px;
        margin: 0;
        padding: 0;
    }

    .parrafoa{
        padding-top: 10px;
    }

    input {
        margin: 0;
        padding:0;
        width: 300px;
        height: 40px;
        font-size: 25px;
    }

    a {
        margin-bottom: 40px;
    }

    a :hover {
        cursor: pointer;
    }

    button {
        width: 300px;
        height: 50px;
        font-size: 25px;
        border-radius: 5px;
        border-style: none;
        margin-top: 10px;
    }
    
    .botona {
        background: linear-gradient(to right, #F9A438 20%, #F3712A);
        color: white; 
    }
    }
</style>