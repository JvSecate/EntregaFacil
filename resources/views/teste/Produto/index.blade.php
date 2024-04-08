<!DOCTYPE html>
<html lang="pt-br">
    <x-head/>
<body>
    <x-navbar-teste/>
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
                    <a href="{{ route('produto.edit', $produto->id) }}">Editar</a>
                    <form action="{{ route('produto.destroy', $produto->id) }}" method="POST">
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
