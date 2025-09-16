<?php
// Include the database connection file
include "conecta_mysql.inc";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the values from the form
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Hash the password for secure storage
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Prepare a statement to check if the email already exists
    $stmt = $conexao->prepare("SELECT email FROM usuario WHERE email = ?");
    if (!$stmt) {
        die("Error preparing statement: " . $conexao->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if any rows were returned
    if ($stmt->num_rows > 0) {
        echo "<html><head>";
        echo "<style>body {font-family: Arial, sans-serif; font-size: 25px; text-align: center; margin-top: 50px; color: #cc0000; }</style>";
        echo "</head><body>";
        echo "<p>Este email já está cadastrado!</p>";
        echo "<p><a href='{{ url('stockmasterLogin')'>Voltar</a></p>";
        echo "</body></html>";
    } else {
        // The email is not in use, so insert the new user
        $stmt->close(); // Close the previous statement

        $stmt = $conexao->prepare("INSERT INTO usuario (nome, sobrenome, email, senha) VALUES (?, ?, ?, ?)");
        if (!$stmt) {
            die("Error preparing statement: " . $conexao->error);
        }
        $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha_hash);

        if ($stmt->execute()) {
            echo "<html><head>";
            echo "<style>body {font-family: Arial, sans-serif; font-size: 25px; text-align: center; margin-top: 50px; color: #008000; }</style>";
            echo "</head><body>";
            echo "<p>Cadastro realizado com sucesso!</p>";
            echo "<p><a href='{{ url(''>Faça o login aqui</a></p>";
            echo "</body></html>";
        } else {
            echo "<html><head>";
            echo "<style>body {font-family: Arial, sans-serif; font-size: 25px; text-align: center; margin-top: 50px; color: #cc0000; }</style>";
            echo "</head><body>";
            echo "<p>Erro ao cadastrar. Tente novamente.</p>";
            echo "<p><a href='{{ url('stockmasterLogin') }}>Voltar</a></p>";
            echo "</body></html>";
        }
    }

    $stmt->close();
    $conexao->close();
}
?>
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