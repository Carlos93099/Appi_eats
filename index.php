<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <img src="logo.png" alt="logo" width="200px" height="200px" align="center" class="logo">
    <div> 
        <a href="iniciar_sesion.php">👉<button class="botona">Iniciar sesión</button></a> 
        <a href="registro.php">👉<button class="botonb">Registro</button></a>
    </div>
</body>
</html>

<style>
    body {
        display: flex;
        justify-content: center;
        background-image: url(fondo.png);
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .logo {
        display: block;
        position: absolute;
        top: 60px;
    }

    div {
        display: flex;
        position:relative;
        flex-direction: column;
        margin-top: 450px;
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
    }
    
    .botona {
        background: linear-gradient(to right, #F9A438 20%, #F3712A);
        color: white; 
    }
    }
</style>
