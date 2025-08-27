<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster</title>
    <link rel="icon" href="{{ asset('img/stockmasterIcon.png') }}">
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
</style>
<body>
    <article>
        <div class="logo">
            <img src="{{ asset('img/stockmasterLogo.png') }}" alt="Logo da StockMaster">
            <button class="cadastro"><a href="{{ url('cadastro') }}">CADASTRO</a></button>
            <button class="login"><a href="{{ url('login') }}">LOGIN</a></button>
        </div>
    </article>
</body>

</html>