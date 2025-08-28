<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StockMaster</title>
    <link rel="icon" href="{{ asset('img/stockmasterIcon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="stylesheets/login-cadastro.css">
</head>
<style>
    /* index.html */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: linear-gradient(45deg, #0a6bbb, #ca6c0e);
    background-attachment: fixed;
    color: white;
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

article {
    width: 90%;
    max-width: 500px;
    margin: 40px auto;
    padding: 20px;
    border-radius: 50px;
    background-color: white;
    line-height: 1.5;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.logo {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 0;
    margin-top: -70px
}

.cadastro, .login, a {
    background-color: #000000;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    cursor: pointer;
    margin: 15px 0;
    font-size: 25px;
    width: 50%;
    text-decoration: none;
}

img {
    width: 100%;
    border-radius: 50px;
    margin-bottom: -30px;
}

/* login.php e cadastro.php*/
form {
    display: flex;
    flex-direction: column;
    width: 100% auto;
}

.formulario-login {
    color: black;
    margin-bottom: 10px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
}

input[type="email"],
input[type="password"],
input[type="text"] {
    width: calc(100% - 20px);
    padding: 5px;
    margin: 10px 10px 10px 10px;
    font-size: 16px;
    border: 1px solid #3b3b3b;
    border-radius: 10px;
}

input[type="submit"] {
    background-color: #000000;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    cursor: pointer;
    font-size: 16px;
    width: 50%;
    margin: 10px auto;
}
    </style>
<body>
    <article>
        <div class="logo">
            <img src="{{ asset('img/stockmasterLogo.png') }}" alt="Logo da StockMaster">
        </div>
        <form method="POST" action="Stockmaster.php">
            <div class="formulario-login">
                <p><label for="email">Email: </label>
                    <input type="email" name="email" required>
                </p>
            </div>
            <div class="formulario-login">
                <p><label for="senha">Senha: </label>
                    <input type="password" name="senha" required>
                </p>
            </div>
            <a href="{{ url('cadastrarMercadoria')}}">Entrar</a>
            <input type="submit" value="ENTRAR">
        </form>
    </article>
</body>
</html>
