<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster</title>
    <link rel="icon" href="{{ asset('img/stockmasterIcon.png') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/cadastro-login.css') }}">
</head>
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