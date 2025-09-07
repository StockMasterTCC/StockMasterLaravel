{{--Criando cabeçalho do projeto StockMaster --}}
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StockMaster - Cadastrar mercadoria</title>
    <link rel="icon" href="{{ asset('img/stockmasterIcon.png') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/stockmaster.css') }}">
    <script src="{{ url('js/stockmaster.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    {{-- Adicionando o Bootstrap 5.0.1 --}}
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css') }}">

</head>
    {{-- O corpo da pagina, a partir daqui criaremos Header(cabeçalho), main(o conteúdo principal e 
        possivelmente Footer(rodapé)) --}}
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
        <a href="{{ url('cadastrarMercadoria') }}"><i class="bi bi-box"></i> Cadastrar mercadoria</a>
        <a href="{{ url('listaDeFuncionario') }}"><i class="bi bi-person-fill"></i> Lista de funcionários</a>
        <a href="{{ url('gestaoEntradaSaida') }}"><i class="bi bi-arrow-down-up"></i> Gestão de entrada/saída de itens</a>
        <a href="{{ url('cadastroFuncionario') }}"><i class="bi bi-person-plus-fill"></i> Cadastro de funcionário</a>
    </nav>
</body>
</html>