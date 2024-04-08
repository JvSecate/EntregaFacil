<!DOCTYPE html>
<html lang="pt-br">
    <x-head/>
<body>
    <x-navbar-teste/>
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
                    <a href="{{ route('restaurante.edit', $restaurante->id) }}">Editar</a>
                    <form action="{{ route('restaurante.destroy', $restaurante->id) }}" method="POST">
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
