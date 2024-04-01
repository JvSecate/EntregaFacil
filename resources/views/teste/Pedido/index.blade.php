<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
</head>
<body>
    <h1>Lista de Pedidos</h1>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Entregador</th>
                <th>Restaurante</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->cliente->nome }}</td>
                <td>{{ $pedido->entregador->nome }}</td>
                <td>{{ $pedido->restaurante->nome }}</td>
                <td>{{ $pedido->status }}</td>
                <td>
                    <a href="{{ route('pedido.show', $pedido->id) }}">Detalhes</a>
                    <a href="{{ route('pedido.edit', $pedido->id) }}">Editar</a>
                    <form action="{{ route('pedido.index') }}" method="POST">
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
    <a href="{{ route('pedido.index') }}">Incluir Pedido</a>
</body>
</html>
