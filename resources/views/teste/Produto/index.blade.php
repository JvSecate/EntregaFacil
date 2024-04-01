<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Restaurante</th>
                <th>Ações</th>
            </tr>
            <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->restaurante->nome }}</td>
                <td>
                    <a href="{{ route('produto.show', $produto->id)  }}">Detalhes</a>
                    <a href="{{ route('produto.index') }}">Editar</a>
                    <form action="{{ route('produto.index') }}" method="POST">
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
    <a href="{{ route('produto.index') }}">Incluir Produto</a>
</body>
</html>
