<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Item de Pedido</title>
</head>
<body>
    <h1>Detalhes do Item de Pedido</h1>
    <div>
        <p><strong>ID:</strong> {{ $itemPedido->id }}</p>
        <p><strong>Produto:</strong> {{ $itemPedido->produto->nome }}</p>
        <p><strong>Pedido:</strong> {{ $itemPedido->pedido->id }}</p>
        <p><strong>Quantidade:</strong> {{ $itemPedido->quantidade }}</p>
    </div>
    <a href="{{ route('item_pedidos.index') }}">Voltar para Lista de Itens de Pedido</a>
</body>
</html>
