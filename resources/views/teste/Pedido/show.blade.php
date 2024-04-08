<!DOCTYPE html>
<html lang="pt-br">
    <x-head/>
<body>
    <x-navbar-teste/>
    <h1>Detalhes do Pedido</h1>
    <div>
        <p><strong>ID:</strong> {{ $pedido->id }}</p>
        <p><strong>Cliente:</strong> {{ $pedido->cliente->nome }}</p>
        <p><strong>Entregador:</strong> {{ $pedido->entregador->nome }}</p>
        <p><strong>Restaurante:</strong> {{ $pedido->restaurante->nome }}</p>
        <p><strong>Status:</strong> {{ $pedido->status }}</p>
    </div>
    <a href="{{ route('pedido.index') }}">Voltar para Lista de Pedidos</a>
</body>
</html>
