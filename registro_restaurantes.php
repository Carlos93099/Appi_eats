<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar restaurantes</title>
</head>
<body>
    <figure>
        <img src="fondo1.png" alt="fondo" width="2685px" height="125%" class="fondoa">
        <img src="fondo2.png" alt="fondo" width="2685px" height="125%" class="fondob">
        <img src="fondo3.png" alt="fondo" width="2685px" height="125%" class="fondoc">
        <img src="logo.png" alt="logo" width="600px" height="600px" class="logo">
    </figure>
    <form>
        <p>Ingresa el restaurante:</p>
        <span>👉<input type="text" name="nombre" id="nombre"></span>
        <p class="parrafoa">Ingresa tu correo:</p>
        <span>👉<input type="text" name="correo" id="correo"></span>
        <p class="parrafoa">Ingresa tu contraseña:</p>
        <span>👉<input type="text" name="password" id="password"></span>
        <a href="">👉<button class="botona">Registrate</button></a> 
    </form>
</body>
</html>

<style>
    body {
        overflow-x: hidden;
    }

    figure {
        display: relative;
        height: 100%;
        width: 1440px;
    }

    figure img {
        top: -70px;
        left: -640px;
    }
    .fondoa {
        display: block;
        position: absolute;
        index: -4;
    }

    .fondob {
        display: block;
        position: absolute;
        index: -3;
    }

    .fondoc {
        display: block;
        position: absolute;
        index: -2;
    }

    .logo {
        display: block;
        position: absolute;
        index: -1;
        top: -50px;
        left: 400px;
    }

    form {
        display: flex;
        position:relative;
        flex-direction: column;
        align-items: center;
        margin-top: 480px;
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

    @media only screen and (max-width: 767px) {
        .logo {
        left: 100px;
    }

    }
</style>