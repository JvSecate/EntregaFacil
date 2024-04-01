<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Item-Pedidos</title>
</head>
<body>
    <h1>Lista de Item-Pedidos</h1>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Pedido</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <tbody>
            @foreach($item_pedidos as $itemPedido)
            <tr>
                <td>{{ $itemPedido->id }}</td>
                <td>{{ $itemPedido->produto->nome }}</td>
                <td>{{ $itemPedido->pedido->id }}</td>
                <td>{{ $itemPedido->quantidade }}</td>
                <td>
                    <a href="{{ route('item_pedidos.show', $itemPedido->id) }}">Detalhes</a>
                    <a href="{{ route('item_pedidos.edit', $itemPedido->id) }}">Editar</a>
                     
                    <form action="{{ route('item_pedidos.index') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('item_pedidos.index') }}">Incluir Item de Pedido</a>
</body>
</html>
