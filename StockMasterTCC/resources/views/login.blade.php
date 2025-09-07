<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StockMaster</title>
    <link rel="icon" href="{{ asset('img/stockmasterIcon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('stylesheet/cadastro-login.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css') }}">
</head>
<body>
    <article>
        <div class="logo">
            <img src="{{ asset('img/stockmasterLogo.png') }}" alt="Logo da StockMaster">
        </div>
        <form method="POST" action="Stockmaster.php">
            <div class="formulario-login">
                {{-- Ícones de framework front-end adicionados em login --}}
                <p><i class="bi bi-envelope-fill"></i> <label for="email">Email: </label>
                    <input type="email" name="email" required>
                </p>
            </div>
            <div class="formulario-login">
                <p><i class="bi bi-lock-fill"></i> <label for="senha">Senha: </label>
                    <input type="password" name="senha" required>
                </p>
            </div>
            <a href="{{ url('cadastrarMercadoria')}}">ENTRAR</a>
        </form>
    </article>
</body>
</html>
