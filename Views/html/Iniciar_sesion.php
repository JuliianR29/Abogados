<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Views/Img/logo.png" type="image/png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>

<body class="body">
    <header class="header">
        <img class="header__img" src="./Img/logo-platzi.png" alt="">
    </header>

    <section class="login">
        <section class="login__container">
            <h2>Inicia Sesión</h2>
            <form class="login__container--form" action="">
                <input class="input" type="text" placeholder="Correo">
                <input class="input" type="password" placeholder="Contraseña">
                <button class="button">Iniciar sesión</button>
                <div class="login__container--remember-me">
                    <label>
                        <input type="checkbox" name="" id="cbox1" value="checkbos">Recuérdame
                    </label>
                    <a href="/">Olvidé mi contraseña</a>
                </div>
            </form>
            <section class="login__container--social-media">
                <div><img class="login__container--imgs" src="./img/google.webp" alt="Google">Inicia sesión con Google</div>
                    <div><img class="login__container--imgs" src="./img/twitter.png" alt="Twitter">Inicia sesión con Twitter</div>
            </section>
            <p class="login__container--register">No tienes ninguna cuenta <a href="/">Registrate</a></p>
        </section>
    </section>
    <footer class="footer">
        <a href="/">Términos de uso</a>
        <a href="/">Declaracion de privacidad</a>
        <a href="/">Centro de ayuda</a>

    </footer>
</body>

</html>