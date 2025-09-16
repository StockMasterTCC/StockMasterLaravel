<?php
//configuração de banco de dados
$servidor = "localhost: 3306";
$usuario_bd = "root";
$senha_bd = "";
$banco = "usuario";

$conexao = new mysqli($servidor, $usuario_bd, $senha_bd, $banco);
?>