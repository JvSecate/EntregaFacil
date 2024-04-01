<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
</head>
<body>
    <h1>Lista de Autores</h1>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
            <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nome }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->tipo }}</td>
                <td>
                    
                    <a href="{{ route('usuario.show', $usuario->id) }}">Detalhes</a>
                    <a href="{{ route('usuario.edit', $usuario->id) }}">Editar</a>
                    <form action="{{ route('usuario.index') }}" method="POST"> 
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                    </td>
            </tr>
            @endforeach
            </tbody>
        </table><a href="{{ route('usuario.index') }}">Inclusão</a>
    </div>
</body>
</html>
