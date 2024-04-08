<!DOCTYPE html>
<html lang="pt-br">
    <x-head/>
<body>
    <x-navbar-teste/>
    <h1>Editar Usuário</h1>
    <form action="{{ route('usuario.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $usuario->nome }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $usuario->email }}">
        </div>
        <div>
            <label for="tipo">Tipo:</label>
            <select name="tipo" id="tipo">
                <option value="Cliente" {{ $usuario->tipo === 'Cliente' ? 'selected' : '' }}>Cliente</option>
                <option value="Entregador" {{ $usuario->tipo === 'Entregador' ? 'selected' : '' }}>Entregador</option>
            </select>
        </div>
        <button type="submit">Salvar Alterações</button>
    </form>
    <a href="{{ route('usuario.index') }}">Cancelar</a>
</body>
</html>
