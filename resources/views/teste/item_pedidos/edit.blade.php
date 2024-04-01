<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item de Pedido</title>
</head>
<body>
    <h1>Editar Item de Pedido</h1>
    <form action="{{ route('item_pedidos.update', $itemPedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="produto">Produto:</label>
            <select name="produto" id="produto">
                @foreach($produtos as $produto)
                    <option value="{{ $produto->id }}" {{ $itemPedido->produto_id == $produto->id ? 'selected' : '' }}>{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="quantidade">Quantidade:</label>
            <input type="text" id="quantidade" name="quantidade" value="{{ $itemPedido->quantidade }}">
        </div>
        <!-- Adicione aqui outros campos de edição, se necessário -->
        <button type="submit">Salvar Alterações</button>
    </form>
    <a href="{{ route('item_pedidos.index') }}">Cancelar</a>
</body>
</html>
