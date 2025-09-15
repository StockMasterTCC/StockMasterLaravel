{{--Criando cabeçalho do projeto StockMaster --}}
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StockMaster - Área administrativo</title>
    <link rel="icon" href="{{ asset('img/stockmasterIcon.png') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/stockmaster.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css') }}">
</head>
    {{-- O corpo da pagina, a partir daqui criaremos Header(cabeçalho), main(o conteúdo principal e 
        possivelmente Footer(rodapé))--}}
<body>
    <header>
        <div class="logo">
            <img src="{{ url('img/stockmasterIcon.png') }}" alt="Logo da StockMaster">
            <h1>STOCKMASTER</h1>
        </div>
    </header>
    {{-- main --}}
    {{-- div é como se fosse uma divisão de uma tag, onde podemos colocar o atributo global class ou id, 
        onde também podemos agrupar elementos com caracteristicas semelhantes, aplicando estilo CSS ou comportamentos 
        de Javascript--}}
    <div id="pesquisar">
        <form method="get" action="">
        <input type="text" name="search" id="pesquisar" placeholder="Pesquisar...">
        </form>
    </div>
    <nav class="navbar">
        <a href="{{ url('areaAdministrativo') }}"><i class="bi bi-briefcase-fill"></i> Área administrativo</a>
        <a href="{{ url('areaDeItens') }}"><i class="bi bi-box2-fill"></i> Área de Itens</a>
        <a href="{{ url('areaPedidosEmail') }}"><i class="bi bi-envelope-at-fill"></i> Área de pedidos por email</a>
        <a href="{{ url('perfilFornecedor') }}"><i class="bi bi-person-plus-fill"></i> Perfil de Fornecedor</a>
    </nav>
    {{--Adicionamos PHP para aparecer a mensagem de Boas-Vindas, Fornecedor--}}
    <?php
    $usuarioFornecedor = "Fornecedor";
        echo "<h1 align=center>Boas-vindas, $usuarioFornecedor!</h1>";
    ?>
</body>
</html>