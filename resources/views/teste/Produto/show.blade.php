<!DOCTYPE html>
<html lang="pt-br">
    <x-head/>
<body>
    <x-navbar-teste/>
    <h1>Detalhes do Produto</h1>
    <div>
        <p><strong>ID:</strong> {{ $produto->id }}</p>
        <p><strong>Nome:</strong> {{ $produto->nome }}</p>
        <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
        <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
    </div>
    <a href="{{ route('produto.index') }}">Voltar para Lista de Produtos</a>
</body>
</html>
