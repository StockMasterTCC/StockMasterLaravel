<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Cadastro</title>
    <link rel="stylesheet" href="{{ url('stylesheet/cadastro-login.css') }}">
    <link rel="icon" href="{{ asset('img/stockmasterIcon.png') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css') }}">
</head>
<body>
    <article>
        <div class="logo">
            <img src="{{ asset('img/stockmasterLogo.png') }}" alt="Logo da StockMaster">
            <form method="POST">
                <div class="formulario-login">
                    {{-- Ícones de framework front-end adicionados em cadastro --}}
                    <p><i class="bi bi-person-fill"></i> <label for="nome">Nome: </label>
                        <input type="text" name="nome" required>
                    </p>
                </div>
                <div class="formulario-login">
                    <p><i class="bi bi-person-fill"></i> <label for="sobrenome">Sobrenome: </label>
                        <input type="text" name="sobrenome" required>
                    </p>
                </div>
                <div class="formulario-login">
                    <p><i class="bi bi-envelope-fill"></i> <label for="email">Email: </label>
                        <input type="email" name="email" required>
                    </p>
                </div>
                <div class="formulario-login">
                    <p><i class="bi bi-lock-fill"></i> <label for="senha">Criar senha:</label>
                        <input type="password" name="senha" required>
                    </p>
                </div>
                <a href="{{ url('/') }}">ENTRAR</a>
            </form>
        </div>
    </article>
</body>
</html>
