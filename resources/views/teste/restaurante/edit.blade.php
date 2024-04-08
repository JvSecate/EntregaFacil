<!DOCTYPE html>
<html lang="pt-br">
    <x-head/>
<body>
    <x-navbar-teste/>
    <h1>Editar Restaurante</h1>
    <form action="{{ route('restaurante.update', $restaurante->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $restaurante->nome }}">
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="{{ $restaurante->endereco }}">
        </div>
        <!-- Adicione aqui outros campos de edição, se necessário -->
        <button type="submit">Salvar Alterações</button>
    </form>
    <a href="{{ route('restaurante.index') }}">Cancelar</a>
</body>
</html>
