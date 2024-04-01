<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes</title>
</head>
<body>
    <h1>Lista de Restaurantes</h1>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
            <tbody>
            @foreach($restaurantes as $restaurante)
            <tr>
                <td>{{ $restaurante->id }}</td>
                <td>{{ $restaurante->nome }}</td>
                <td>{{ $restaurante->endereco }}</td>
                <td>
                   
                    <a href="{{ route('restaurante.show', $restaurante->id) }}">Detalhes</a>
                    <a href="{{ route('restaurante.index') }}">Editar</a>
                    <form action="{{ route('restaurante.index') }}" method="POST">
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
    <a href="{{ route('restaurante.index') }}">Incluir Restaurante</a>
</body>
</html>
