<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Cadastro</title>
    <link rel="stylesheet" href="stylesheet/cadastro-login.css">
    <link rel="icon" href="img/stockmasterIcon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>
<body>
    <article>
        <div class="logo">
            <img src="img/stockmasterLogo.png" alt="Logo da StockMaster">
            <form method="GET" action="">
                <div class="formulario-login">
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
                <input type="submit" value="CADASTRAR">
            </form>
        </div>
    </article>
</body>
</html>