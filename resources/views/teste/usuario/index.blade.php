<!DOCTYPE html>
<html lang="pt-br">
    <x-head/>
<body>
    <x-navbar-teste/>
    <h1>Lista de Usuários</h1>
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
                    <form action="{{ route('usuario.destroy', $usuario->id) }}" method="POST"> 
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
